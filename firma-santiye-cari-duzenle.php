<?php
session_start(); 
if(!isset($_SESSION["login"])){
?>
<meta http-equiv="refresh" content="0;URL=giris.php">
<?php
} else
{
?>
<script>
function toplamalimhesapla()
{
	if(document.getElementById("alinan_cek").value=="")
	{
	document.getElementById("alinan_cek").value=0;
	}
	if(document.getElementById("alinannakit_tl").value=="")
	{
	document.getElementById("alinannakit_tl").value=0;
	}
	if(document.getElementById("alinannakit_usd").value=="")
	{
	document.getElementById("alinannakit_usd").value=0;
	}
	
document.getElementById("bakiye_tl").value=(parseFloat(document.getElementById("alinannakit_tl").value)+parseFloat(document.getElementById("alinan_cek").value)+(parseFloat(document.getElementById("alinannakit_usd").value)*parseFloat(document.getElementById("kur").value)))-parseFloat(document.getElementById("hakedistutari_tl").value);
}
</script>
<!-- GİRİŞ KONTROL -->
<?php include("kafa.php") ?>
<?php include("menu.php") ?>
<?php include("kontrol/veritabani.php") ?>

            <nav id="secondary">
              <ul>
                <li class="current"><a href="firma.php">Müşteri</a></li>
                <li ><a href="firma-ekle.php">Müşteri Ekle</a></li>
               </ul>
            </nav>

<?php
$id=$_GET['id'];
$santiyeid=$_GET['santiyeid'];
$santiyecek=$connection->query("select * from firma_santiyeler where id='$santiyeid'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($santiyecek as $scek)
		{

?>

<section id="content">
<h2><?=$scek['santiyeadi'];?> adlı müşteriye ait şantiye bilgisi düzenleniyor.</h2>
<form class="wymupdate" action="firma-santiye-cari-duzenle-kontrol.php" enctype="multipart/form-data" method="post" > 
<?php
		$vericek=$connection->query("select * from santiyeler_cari where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{
			$firmacek=$connection->query("select * from firma_santiyeler where id='$santiyeid'")->fetchAll(PDO::FETCH_ASSOC);
			foreach ($firmacek as $fcek)
			{
?>

<div>
<table  style="background-image:url(img/bos.png); background-repeat:repeat" >
    <thead>
      <tr>
        <th>TARİH</th>
		<th>ALINAN ÇEK</th>
		<th>ALINAN NAKİT-TL</th>
		<th>ALINAN NAKİT-USD</th>
		<th>KURU</th>
		<th>HAKEDİŞ TUTARI-TL</th>
		<th>BAKİYE-TL</th>
      </tr>
    </thead>
<?php
			$toplamalimcek4=$connection->query("select SUM(alinan_cek) AS alinmisCEK2 from santiyeler_cari where santiyeid='$santiyeid'")->fetchAll(PDO::FETCH_ASSOC);
			foreach ($toplamalimcek4 as $toplamalim4)
			{
			$alinmiscek=$toplamalim4['alinmisCEK2'];
			}
			$toplamalimcek5=$connection->query("select SUM(alinannakit_tl) AS alinmisTL2 from santiyeler_cari where santiyeid='$santiyeid'")->fetchAll(PDO::FETCH_ASSOC);
			foreach ($toplamalimcek5 as $toplamalim5)
			{
			$alinmistl=$toplamalim5['alinmisTL2'];
			}
			$toplamalimcek6=$connection->query("select SUM(alinannakit_usd) AS alinmisUSD2 from santiyeler_cari where santiyeid='$santiyeid'")->fetchAll(PDO::FETCH_ASSOC);
			foreach ($toplamalimcek6 as $toplamalim6)
			{
			$alinmisusd=$toplamalim6['alinmisUSD2'];
			}
			$sancek=$connection->query("select * from santiyeler_hakedis where santiyeid='$santiyeid'")->fetchAll(PDO::FETCH_ASSOC);
			foreach ($sancek as $skcek)
			{
			$geneltop=$skcek['geneltoplam'];
			}
		?>

    <tbody>
      <tr>
        <td>
		<input id="bakiye" name="bakiye" type="hidden" value="<?=$alinmiscek+$alinmistl+$alinmisusd-$geneltop;?>"/>
		<input type="hidden" id="santiyeid" name="santiyeid" value="<?=$vcek['santiyeid'];?>"/>
		<input type="hidden" id="firmaid" name="firmaid" value="<?=$fcek['firmaid'];?>"/>
		<input type="hidden" id="id" name="id" value="<?=$vcek['id'];?>"/>
        <input id="tarih" name="tarih" type="text" value="<?=$vcek['tarih'];?>"/></td>
        <td><input id="alinan_cek" name="alinan_cek" type="text"  onkeyup="toplamalimhesapla()"value="<?=$vcek['alinan_cek'];?>"/></td>
        <td><input id="alinannakit_tl" name="alinannakit_tl" onkeyup="toplamalimhesapla()" type="text" value="<?=$vcek['alinannakit_tl'];?>"/></td>
        <td><input id="alinannakit_usd" name="alinannakit_usd" onkeyup="toplamalimhesapla()"type="text" value="<?=$vcek['alinannakit_usd']/$vcek['kur'];?>"/></td>
        <td><input id="kur" name="kur" onkeyup="toplamalimhesapla()" type="text" value="<?=$vcek['kur'];?>"/></td>
        <td><input size="10"readonly="readonly" id="hakedistutari_tl" 	name="hakedistutari_tl" type="text" value="<?=$geneltop;?>"/></td>
			<td><input size="10"readonly="readonly" id="bakiye_tl" 			name="bakiye_tl"		type="text" value="<?=$alinmiscek+$alinmistl+$alinmisusd-$geneltop;?>"/></td>
		<td>  
		<p><input type="submit" class="button primary submit" value="Cari İşlemi Güncelle" /></p>
        </td>
      </tr>

    </tbody>
  </table>


</div>

<?php } ?>
<?php } ?>
<div class="clear">


</div>

<h2>&nbsp;</h2>
<br />
</form>

<?php } ?>

</section>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>