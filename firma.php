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
                <li class="current"><a href="firma.php">Müşteri</a></li>
                <li ><a href="firma-ekle.php">Müşteri Ekle</a></li>
               </ul>
            </nav>
<section id="content">
<h2>Müşteri Listesi</h2>



<div>
<table class="datatable">
    <thead>
      <tr>
		<th>Müşteri Adı</th>
        <th>Ad</th>
        <th>Soyad</th>
        <th>Telefon</th>
        <th>İşlemler</th>
      </tr>
    </thead>

    <tbody>
		<?php
		$vericek=$connection->query("select * from firma")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{
		?>
      <tr>
		<td><?=$vcek['firmaadi'];?></td>
		<td><?=$vcek['ad'];?></td>
        <td><?=$vcek['soyad'];?></td>
        <td><?=$vcek['telefon'];?></td>
        <td>
          <span class="button-group">
            <a href="firma-detay.php?id=<?=$vcek['id'];?>" class="button icon search">Şantiyeleri Listele</a>
            <a href="firma-duzenle.php?id=<?=$vcek['id'];?>" class="button icon edit">Firmayı Düzenle</a>
            <a href="firma-sil.php?id=<?=$vcek['id'];?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Firmayı Sil</a>
          </span>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

</div>



</section>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>