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

            <nav onload="basta()" id="secondary">
              <ul>
                <li class="current"><a href="firma.php">Müşteriler</a></li>
                <li ><a href="firma-ekle.php">Müşteri Ekle</a></li>
				
               </ul>
            </nav>

<?php
$id=$_GET['id'];
$firmaid=$_GET['firmaid'];
$santiyecek=$connection->query("select * from firma_santiyeler where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($santiyecek as $scek)
		{

?>

<section id="content">
	<h2><?=$scek['santiyeadi'];?> adlı şantiye detayları.</h2>
	<form class="wymupdate" enctype="multipart/form-data" method="post" > 
	   <div class="column left">
		<section>
		  <label for="label">
			İlgili Adı
		  </label>
		  <div>
			<?=$scek['ad'];?>
		  </div>
		</section>
		 <section>
		  <label for="label">
			İlgili Soyadı
		  </label>
		  <div>
			<?=$scek['soyad'];?>
		  </div>
		</section>
	  </div>
	<div class="column right">
		<section>
		  <label for="username">
			Adres
		  </label>
		  <div>
			<?=$scek['adres'];?>
		  </div>
		</section>
	</div>
	<div class="clear">
	<a href="firma-santiye-duzenle.php?id=<?=$scek['id'];?>&firmaid=<?=$scek['firmaid'];?>" class="button icon edit">Şantiye Bilgilerini Düzenle</a>
	<a href="firma-santiye-sil.php?id=<?=$scek['id'];?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Şantiyeyi Sil</a>
	</div>
	</form>
</section>
<nav id="secondary">
      <ul>
        <li><a href="firma-santiye-detay.php?id=<?=$scek['id'];?>&firmaid=<?=$scek['firmaid'];?>">Cari İşlemler</a></li>
        <li><a href="firma-santiye-hakedis.php?id=<?=$scek['id'];?>&firmaid=<?=$scek['firmaid'];?>">Hakediş</a></li>
		<li><a href="firma-santiye-teklif.php?id=<?=$scek['id'];?>&firmaid=<?=$scek['firmaid'];?>">Teklif</a></li>
		<li class="current"><a href="firma-santiye-montajcilar.php?id=<?=$scek['id'];?>&firmaid=<?=$scek['firmaid'];?>">Montajcılar</a></li>		
      </ul>
    </nav>
<section id="content2">
<div>
<br><br>
<a href="firma-santiye-montajci-ekle.php?id=<?=$scek['id'];?>&firmaid=<?=$scek['firmaid'];?>" class="button icon add">Montajcı Ekibi Ekle</a>

<table  style="background-image:url(img/bos.png); background-repeat:repeat" class="datatable">
    <thead>
		<tr>
			<th>MONTAJ EKİBİ</th>
			<th>HAKEDİŞ TOPLAMI</th>
			<th>İŞLEMLER</th>
		</tr>
    </thead>
    <tbody>
    <?php
		$santiyecarilericek=$connection->query("select * from santiyeler_montajcilar where santiyeid='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($santiyecarilericek as $sccek)
		{
	?>
      <tr>
        <td><?=$sccek['montajekibi'];?></td>
		<td><?=$sccek['hakedis_toplami'];?></td>
		<td>    
          <span class="button-group">
			 <a href="firma-santiye-montajci-detay.php?id=<?=$sccek['id'];?>&santiyeid=<?=$sccek['santiyeid'];?>&firmaid=<?=$firmaid;?>" class="button icon search">Detay</a>
            <a href="firma-santiye-montajci-duzenle.php?avansid=<?=$sccek['id'];?>&santiyeid=<?=$sccek['santiyeid'];?>&firmaid=<?=$firmaid;?>" class="button icon search">Düzenle</a>
            <a href="firma-santiye-montajci-sil.php?id=<?=$sccek['id'];?>&santiyeid=<?=$sccek['santiyeid'];?>&firmaid=<?=$firmaid;?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Sil</a>
          </span>
        </td>
      </tr>
	<?php } ?>   
	
    </tbody>
    
  </table>


</div>



</section>
<?php } ?>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>