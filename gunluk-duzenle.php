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
                <li class="current"><a href="gunluk.php">Günlük</a></li>
                <li ><a href="gunluk-ekle.php">Günlük Ekle</a></li>
               </ul>
            </nav>

<?php
$id=$_GET['id'];

$vericek=$connection->query("select * from gunluk where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{

?>


<section id="content">
<h2><?=$vcek['aciklama'];?> açıklamalı gunluk düzenleniyor.</h2>
<form class="wymupdate" action="gunluk-duzenle-kontrol.php" enctype="multipart/form-data" method="post" > 
<table class="datatable">
	<thead>
      <tr>
		<th>Tarih</th>
        <th>Açıklama</th>
        <th>Gelir Nakit</th>
		<th>Gelir Çek</th>
        <th>Gider Nakit</th>
        <th>Gider Çek</th>
        <th>İşlemler</th>
      </tr>
    </thead>

	<tbody>
	<tr>
        <td><input id="tarih" name="tarih" type="text" value="<?=$vcek['tarih'];?>"/></td>
		<input hidden="hidden" id="id" name="id" type="text" value="<?=$vcek['id'];?>"/>
		<td><input id="aciklama" name="aciklama" type="text"  value="<?=$vcek['aciklama'];?>" /></td>
        <td><input id="gelir_nakit" name="gelir_nakit" type="text" value="<?=$vcek['gelir_nakit'];?>" /></td>
        <td><input id="gelir_cek" name="gelir_cek" type="text" value="<?=$vcek['gelir_cek'];?>"  /></td>
        <td><input id="gider_nakit" name="gider_nakit" type="text"  value="<?=$vcek['gider_nakit'];?>" /></td>
        <td><input id="gider_cek" name="gider_cek" type="text"  value="<?=$vcek['gider_cek'];?>" /></td>
		<td><p><input type="submit" class="button primary submit" value="Günlük Bilgisini Güncelle" /></p></td>
    </tr>
	</tbody>
</table>
</form>

<div class="clear">


</div>

<h2>&nbsp;</h2>
<br />


<?php } ?>

</section>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>