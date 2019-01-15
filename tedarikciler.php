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
                <li class="current"><a href="tedarikciler.php">Tedarikçiler</a></li>
                <li ><a href="tedarikciler-ekle.php">Tedarikçiler Ekle</a></li>
               </ul>
            </nav>
<section id="content">
<h2>Tedarikçiler Listesi</h2>



<div>
<table class="datatable">
    <thead>
      <tr>
        <th>Tedarikçi Adı</th>
        <th>İşlemler</th>
      </tr>
    </thead>

    <tbody>
		<?php
		$vericek=$connection->query("select * from tedarikciler")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{
		?>
      <tr>
		<td><?=$vcek['ad'];?></td>
        <td>
          <span class="button-group">
            <a href="tedarikciler-detay.php?id=<?=$vcek['id'];?>" class="button icon search">Faturalarını Görüntüle</a>
            <a href="tedarikciler-duzenle.php?id=<?=$vcek['id'];?>" class="button icon edit">Tedarikçi Adı Düzenle</a>
            <a href="tedarikciler-sil.php?id=<?=$vcek['id'];?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Tedarikçiyi Sil (Tedarikçi Faturaları Saklı Kalır)</a>
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