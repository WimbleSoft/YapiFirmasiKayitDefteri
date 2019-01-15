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
<section id="content">
<h2>Günlük Listesi</h2>
<a href="gunluk-ekle.php" class="button icon add">Günlük Girdisi Ekle</a>


<div>
<table class="datatable">
    <thead>
      <tr>
		<th>Tarih</th>
        <th>Açıklama</th>
        <th>Gelir Nakit</th>
		<th>Gelir Çek</th>
        <th>Gider Nakit</th>
        <th>Gider Çek</th>
		<th>Bakiye Nakit</th>
        <th>Bakiye Çek</th>
        <th>İşlemler</th>
      </tr>
    </thead>

    <tbody>
		<?php
		$vericek=$connection->query("select * from gunluk")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{
		?>
      <tr>
		<td><?=$vcek['tarih'];?></td>
		<td><?=$vcek['aciklama'];?></td>
        <td><?=number_format($vcek['gelir_nakit'],2);?></td>
        <td><?=number_format($vcek['gelir_cek'],2);?></td>
		<td><?=number_format($vcek['gider_nakit'],2);?></td>
        <td><?=number_format($vcek['gider_cek'],2);?></td>
		<td><?=number_format($vcek['gelir_nakit']-$vcek['gider_nakit'],2);?></td>
        <td><?=number_format($vcek['gelir_cek']-$vcek['gider_cek'],2);?></td>
        <td>
          <span class="button-group">
            <a href="gunluk-duzenle.php?id=<?=$vcek['id'];?>" class="button icon edit">Günlük Bilgisini Düzenle</a>
            <a href="gunluk-sil.php?id=<?=$vcek['id'];?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Günlük Bilgisini Sil</a>
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