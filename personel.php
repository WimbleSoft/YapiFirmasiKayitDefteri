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
<section id="content">
<h2>Personel Listesi</h2>



<div>
<table class="datatable">
    <thead>
      <tr>
        <th>Ad</th>
        <th>Soyad</th>
        <th>TC Kimlik No</th>
        <th>İşlemler</th>
      </tr>
    </thead>

    <tbody>
		<?php
		$vericek=$connection->query("select * from personel")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{
		?>
      <tr>
		<td><?=$vcek['ad'];?></td>
        <td><?=$vcek['soyad'];?></td>
        <td><?=$vcek['tcno'];?></td>
        <td>
          <span class="button-group">
            <a href="personel-detay.php?id=<?=$vcek['id'];?>&yil=<?=date("Y");?>" class="button icon search">İncele</a>
            <a href="personel-duzenle.php?id=<?=$vcek['id'];?>" class="button icon edit">Düzenle</a>
            <a href="personel-sil.php?id=<?=$vcek['id'];?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Sil</a>
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