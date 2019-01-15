<?php
session_start(); 
if(!isset($_SESSION["login"])){
?>
<meta http-equiv="refresh" content="0;URL=giris.php">
<?php
} else
{
?><script>

function toplamodemehesapla()
{
var odenen_tl1,odenencek1;
	if(document.getElementById("odenen_tl").value=="")
	{
	odenen_tl1=0;
	}
	else odenen_tl1=parseFloat(document.getElementById("odenen_tl").value);
	if(document.getElementById("odenen_cek").value=="")
	{
	odenen_cek1=0;
	}
	else odenen_cek1=parseFloat(document.getElementById("odenen_cek").value);
	
	
	document.getElementById("toplamodenen").value=parseFloat(document.getElementById("odenmis").value)+odenen_tl1+odenen_cek1;


}
function cleard(id)
{
	
	var odenen_tl2,odenen_cek2;
	
	if(id=='odenen_tl')
	{
		if(document.getElementById("odenen_tl").value=="")
		{
		odenen_tl2=0;
		}
		else odenen_tl2=parseFloat(document.getElementById("odenen_tl").value);
		
		document.getElementById("toplamodenen").value=parseFloat(document.getElementById("toplamodenen").value)-odenen_tl2;
	}
	
	if(id=="odenen_cek")
	{
		if(document.getElementById("odenen_cek").value=="")
		{
		odenen_cek2=0;
		}
		else odenen_cek2=parseFloat(document.getElementById("odenen_cek").value);
		
		document.getElementById("toplamodenen").value=parseFloat(document.getElementById("toplamodenen").value)-odenen_cek2;
	}
	
	document.getElementById(id).value="";
	
	
}
</script>
<!-- GİRİŞ KONTROL -->
<?php include("kafa.php") ?>
<?php include("menu.php") ?>
<?php include("kontrol/veritabani.php") ?>

            <nav id="secondary">
              <ul>
                <li class="current"><a href="tedarikciler.php">Tedarikçiler</a></li>
                <li><a href="tedarikciler-ekle.php">Tedarikçiler Ekle</a></li>
               </ul>
            </nav>


<?php
$id=$_GET['id'];
$tedarikciid=$_GET['tedarikciid'];
$ad=$_GET['ad'];
?>

<?php
	$tedarikciodemesicek=$connection->query("select * from tedarikciler_faturalari_odemeleri where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
	foreach ($tedarikciodemesicek as $ocek)
	{
?>

 

<section id="content">
<?php
$tedarikciid=$ocek['tedarikciid'];
$tedarikcicek=$connection->query("select * from tedarikciler_faturalari where id='$tedarikciid'")->fetchAll(PDO::FETCH_ASSOC);
	foreach ($tedarikcicek as $tcek)
	{
?>	
<h2><?=$ad;?> adlı tedarikçiye ait <?=$ocek['tarih'];?> tarihli ödeme düzenleniyor.</h2>
<?php } ?>
<br><br>
<form class="wymupdate" action="tedarikciler-faturalari-odeme-duzenle-kontrol.php" enctype="multipart/form-data" method="post" > 
<div><br><br>
<table  style="background-image:url(img/bos.png); background-repeat:repeat" class="datatable">
    <thead>
      <tr>
        <th>ÖDEME TARİHİ</th>
		<th>ÖDEME TUTARI-TL</th>
        <th>ÖDEME TUTARI-ÇEK</th>
        <th>TOPLAM ÖDENEN</th>
        <th>İŞLEMLER</th>
      </tr>
    </thead>
		<?php
		$toplamodemecek2=$connection->query("select SUM(odenen_tl) AS odenmistl from tedarikciler_faturalari_odemeleri where tedarikciid='$tedarikciid'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamodemecek2 as $toplamodeme2)
		{
		$toplamodeme2['odenmistl'];
		}
		$toplamodemcek4=$connection->query("select SUM(odenen_cek) AS odenmiscek from tedarikciler_faturalari_odemeleri where tedarikciid='$tedarikciid'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamodemcek4 as $toplamodeme4)
		{
		$toplamodeme4['odenmiscek'];
		}
		?>
    <tbody>
      <tr>
		<input type="hidden" id="tedarikciid" name="tedarikciid" value="<?=$ocek['tedarikciid'];?>"/>
		<input type="hidden" id="ad" name="ad" value="<?=$ad;?>"/>
		<input type="hidden" id="id" name="id" value="<?=$id;?>"/>
		<input type="hidden" id="odenmis" name="odenmis"  value="<?php if($toplamodeme2['odenmistl']==NULL&&$toplamodeme4['odenmiscek']==NULL)echo 0; else echo $toplamodeme2['odenmistl']+$toplamodeme4['odenmiscek']-$ocek['odenen_tl']-$ocek['odenen_cek'];?>"   />
     
		<input type="hidden" id="duzenlenenTL" name="duzenlenenTL"  value="<?=$ocek['odenen_tl'];?>" />
		<input type="hidden" id="duzenlenenCEK" name="duzenlenenCEK"  value="<?=$ocek['odenen_cek'];?>" />
        <td><input id="tarih" name="tarih" type="text"			 	value="<?=$ocek['tarih'];?>"  /></td>
        <td><input id="odenen_tl" name="odenen_tl" onkeyup="toplamodemehesapla()" onclick="cleard(this.id)"type="text" 		value="<?=$ocek['odenen_tl'];?>" /></td>
        <td><input id="odenen_cek" name="odenen_cek" onkeyup="toplamodemehesapla()" onclick="cleard(this.id)"type="text" 	value="<?=$ocek['odenen_cek'];?>" /></td>
		<td><input id="toplamodenen" readonly="readonly" name="toplamodenen" value="<?php if($toplamodeme2['odenmistl']==NULL&&$toplamodeme4['odenmiscek']==NULL)echo 0; else echo $toplamodeme2['odenmistl']+$toplamodeme4['odenmiscek'];?>" type="text" /></td>
		<td><p><input type="submit" class="button primary submit" 	value="Ödemeyi Düzenle" /></p></td>
      </tr>
    </tbody>
</table>


</div>


<div class="clear"></div>

<h2>&nbsp;</h2>
<br />

</form>


</section>
 <?php } ?>   
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>
