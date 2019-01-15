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
                <li class="current"><a href="yoneticiler.php">Yöneticiler</a></li>
                <li ><a href="yonetici-ekle.php">Yönetici Ekle</a></li>
               </ul>
            </nav>
<section id="content">
<h2>Yönetici Listesi</h2>

<div>
<table class="datatable">
    <thead>
      <tr>
        <th>Ad Soyad</th>
        <th>Kullanıcı Adı</th>
        <th>E-Posta Adresi</th>
        <th>Telefon Numarası</th>
        <th>Kayıt Numarası</th>
        <th>İşlemler</th>
      </tr>
    </thead>

    <tbody>
        <?php
	
		$vericek=$connection->query("select * from yoneticiler")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{
		?>
      <tr>
		<td><?=$vcek['adsoyad'];?></td>
        <td><a href="yonetici-detay.php?id=<?=$vcek['id'];?>" class="button icon search"><?=$vcek['kadi'];?></a></td>
        <td><?=$vcek['eposta'];?></td>
        <td><?=$vcek['telefon'];?></td>
        <td><?=$vcek['id'];?></td>
        <td>
          <span class="button-group">
            <a href="yonetici-duzenle.php?id=<?=$vcek['id'];?>" class="button icon edit">Düzenle</a>
            <a href="yonetici-sil.php?id=<?=$vcek['id'];?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Sil</a>
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