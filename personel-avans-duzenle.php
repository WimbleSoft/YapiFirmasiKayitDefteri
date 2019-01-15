<?php
session_start(); 
if(!isset($_SESSION["login"])){
?>
<meta http-equiv="refresh" content="0;URL=giris.php">
<?php
} else
{
?>
<!-- GİRİŞ KONTROL -->
<?php include("kafa.php") ?>
<?php include("menu.php") ?>
<?php include("kontrol/veritabani.php") ?>

            <nav id="secondary">
              <ul>
                <li class="current"><a href="personel.php">Personel</a></li>
                <li ><a href="personel-ekle.php">Personel Ekle</a></li>
               </ul>
            </nav>

<?php
$id=$_GET['id'];
$personelid=$_GET['personelid'];
$ay=$_GET['ay'];
$yil=$_GET['yil'];
$personelcek=$connection->query("select * from personel where id='$personelid'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($personelcek as $pcek)
		{

?>


<section id="content">
<h2><?=$pcek['ad'];?>&nbsp;<?=$pcek['soyad'];?> adlı personele ait avans bilgisi düzenleniyor.</h2>
<form class="wymupdate" action="personel-avans-duzenle-kontrol.php" enctype="multipart/form-data" method="post" > 
<?php
		$vericek=$connection->query("select * from personel_avanslar where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{

?>
<script>
function toplamodemehesapla()
{
if(document.getElementById("avanslar").value=="")
{
document.getElementById("avanslar").value=0;
}
var x;
x=parseFloat(document.getElementById("odenmis").value)-parseFloat(document.getElementById("duzenlenen").value);
document.getElementById("toplamodenen").value=x+parseFloat(document.getElementById("avanslar").value);
}

</script>
  
	<table style="background-image:url(img/bos.png); background-repeat:repeat" class="datatable">
    <thead>
      <tr>
        <th>ÖDEME TARİHİ</th>
        <th>ÖDEME MİKTARI</th>
        <th>TOPLAM ÖDENEN</th>
        <th>İŞLEMLER</th>
      </tr>
    </thead>
    <tbody>
      <tr>
	   <form class="wymupdate" action="personel-avans-duzenle-kontrol.php" enctype="multipart/form-data" method="post" > 
		<input id="ay" name="ay" type="hidden" value="<?=$ay;?>"/>
		<input id="personelid" name="personelid" type="hidden" value="<?=$personelid;?>"/>
		<input id="yil" name="yil" type="hidden" value="<?=$yil;?>"/>
        <td><input id="tarih" name="tarih" type="text" value="<?=$vcek['tarih'];?>"/></td>
        <td><input id="avanslar" name="avanslar" type="text" onkeyup="toplamodemehesapla()" value="<?=$vcek['avanslar'];?>"/></td>
        <?php
		$toplamodemecek2=$connection->query("select SUM(avanslar) AS odenmistl from personel_avanslar where personelid='$personelid' and ay='$ay' and yil='$yil'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamodemecek2 as $toplamodeme2)
		{
		?>
		<input id="odenmis" name="odenmis" hidden="hidden" value="<?=$toplamodeme2['odenmistl'];?>"   />
		<input id="duzenlenen" name="duzenlenen" type="hidden" value="<?=$vcek['avanslar'];?>"   />
		<td><input readonly="readonly" id="toplamodenen" name="toplamodenen" value="<?=$toplamodeme2['odenmistl'];?>" type="text" /></td>
		<?php } ?>
		<td>
		<span class="button-group">
		<input type="submit" class="button primary submit" value="Avansı Düzenle" />
		</form>
		<a href="personel-avans-sil.php?ay=<?=$ay;?>&yil=<?=$yil;?>&personelid=<?=$personelid;?>&id=<?=$vcek['id'];?>" class="button icon edit">Avansı Sil</a>
		</span>
		</td>
      </tr>
    <?php 	} ?>

	</tbody>
	</table>


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