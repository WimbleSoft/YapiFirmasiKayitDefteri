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
                <li><a href="kasa.php">Kasa</a></li>
				<li class="current"><a href="insaat-kasa.php">İnşaat Kasa</a></li>
               </ul>
            </nav>
<section id="content">
<h2>İnşaat Kasa Verileri</h2>
<a href="insaat-kasa-ekle.php" class="button icon add">İnşaat Kasa Verisi Ekle</a>

		<?php	
		$toplamgunlukcek=$connection->query("select SUM(gelir_nakit) AS toplamgelir_nakit,SUM(gelir_cek) AS toplamgelir_cek,SUM(gider_nakit) AS toplamgider_nakit,SUM(gider_cek) AS toplamgider_cek from insaat_kasa")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamgunlukcek as $toplamgunluk)
		{
			$toplamgunluk['toplamgelir_nakit'];
			$toplamgunluk['toplamgelir_cek'];
			$toplamgunluk['toplamgider_nakit'];
			$toplamgunluk['toplamgider_cek'];
		}
		?>
		
		<table style="background-image:url(img/bos.png); background-repeat:repeat" >
	<thead>
      <tr>
        <th>Gelir Nakit</th>
		<th>Gelir Çek</th>
        <th>Gider Nakit</th>
        <th>Gider Çek</th>
		<th>Bakiye Nakit</th>
        <th>Bakiye Çek</th>
      </tr>
    </thead>

	<tbody>
	<tr style="border-top-width: 10px; border-color:black;">
        <td><?=number_format($gelirnakit=$toplamgunluk['toplamgelir_nakit'],2);?></td>
        <td><?=number_format($gelircek=$toplamgunluk['toplamgelir_cek'],2);?></td>
		<td><?=number_format($gidernakit=$toplamgunluk['toplamgider_nakit'],2);?></td>
		<td><?=number_format($gidercek=$toplamgunluk['toplamgider_cek'],2);?></td>
		<td><?=number_format($gelirnakit-$gidernakit,2);?></td>
        <td><?=number_format($gelircek-$gidercek,2);?></td>
      </tr>
	</tbody>
</table>
<div>
<br><br><br>
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
		$vericek=$connection->query("select * from insaat_kasa")->fetchAll(PDO::FETCH_ASSOC);
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
            <a href="insaat-kasa-duzenle.php?id=<?=$vcek['id'];?>" class="button icon edit">İnşaat Kasa Bilgisini Düzenle</a>
            <a href="insaat-kasa-sil.php?id=<?=$vcek['id'];?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">İnşaat Kasa Bilgisini Sil</a>
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