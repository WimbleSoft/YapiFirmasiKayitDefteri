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


<?php
$id=$_GET['id'];

$vericek=$connection->query("select * from tedarikciler where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{

?>

<section id="content">
	<h2><?=$vcek['ad'];?> adlı Tedarikci Detayları.</h2>
	<form class="wymupdate" enctype="multipart/form-data" method="post" > 
	 
	 
	   <div class="column left">
		<section>
		  <label for="label">
			Tedarikçi Adı
		  </label>

		  <div>
			<?=$vcek['ad'];?>
			<input type="hidden" name="id" value="<?=$vcek['id'];?>"  />
			
		  </div>
		</section>
		
		<section>
		  <label for="label">
			Toplam Fatura Tutarı
		  </label>

		  <div>

		<?php	
		$tedarikciid=$id;
		$toplamfaturacek=$connection->query("select SUM(tutar_tl) AS toplamfat from tedarikciler_faturalari where tedarikciid='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamfaturacek as $toplamfatura)
		{
		?>
		<?=number_format($toplamfatura['toplamfat'], 2);?>
		<?php } ?>
		  </div>
		</section>
		
		<section>
		  <label for="label">
			Ödenecek Tutar
		  </label>

		  <div>
		
		<?php
		$toplamodemecek2=$connection->query("select SUM(odenen_tl) AS odenmistl from tedarikciler_faturalari_odemeleri where tedarikciid='$tedarikciid'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamodemecek2 as $toplamodeme2)
		{
		$toplamodeme2['odenmistl'];
		}
		?>
		<?php
		$toplamodemcek4=$connection->query("select SUM(odenen_cek) AS odenmiscek from tedarikciler_faturalari_odemeleri where tedarikciid='$tedarikciid'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamodemcek4 as $toplamodeme4)
		{
		$toplamodeme4['odenmiscek'];
		} 
		?>
		<td><?=number_format($toplamfatura['toplamfat']-$toplamodeme2['odenmistl']-$toplamodeme4['odenmiscek'],2);?></td>
		  </div>
		</section>

	
		<a href="tedarikciler-duzenle.php?id=<?=$vcek['id'];?>" class="button icon edit">Tedarikçi Adını Düzenle</a>
	<a href="tedarikciler-sil.php?id=<?=$vcek['id'];?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Tedarikçiyi Sil</a>
	
	  </div>

	<div class="column right">
	
	
		<section>
		  <label for="label">
			Ödenen Tutar-TL
		  </label>

		  <div>
		<?php
		$tedarikciid=$id;
		$toplamodemecek=$connection->query("select SUM(odenen_tl) AS odenmistl from tedarikciler_faturalari_odemeleri where tedarikciid='$tedarikciid'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamodemecek as $toplamodeme)
		{
		?>
		<?=number_format($toplamodeme['odenmistl'],2);?>
		<?php } ?>
		  </div>
		</section>
		
		<section>
		  <label for="label">
			Ödenen Tutar-ÇEK
		  </label>

		  <div>
		<?php
		$toplamodemcek3=$connection->query("select SUM(odenen_cek) AS odenmiscek from tedarikciler_faturalari_odemeleri where tedarikciid='$tedarikciid'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamodemcek3 as $toplamodemek3)
		{
		?>
		
		<?=number_format($toplamodemek3['odenmiscek'],2);?>
		<?php }	?>
		  </div>
		</section>
	</div>
	 
	 
	 
	<div class="clear">
	<br><br><br>
	
<h3><?=$vcek['ad'];?> adlı tedarikçinin faturaları</h3>
<a href="tedarikciler-faturalari-ekle.php?id=<?=$vcek['id'];?>" class="button icon add">Fatura Ekle</a> <a href="tedarikciler-faturalari-detay.php?id=<?=$vcek['id'];?>&ad=<?=$vcek['ad'];?>" class="button icon search">Cari İşlemler</a>

<div>
<table  style="background-image:url(img/bos.png); background-repeat:repeat" class="datatable">
    <thead>
      <tr>
        <th>FATURA TARİHi</th>
        <th>FATURA TUTAR-TL</th> 
        <th>İŞLEMLER</th>
      </tr>
    </thead>

    <tbody>
    
    
    
    
    <?php
		$faturalaricek=$connection->query("select * from tedarikciler_faturalari where tedarikciid='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($faturalaricek as $faturacek)
		{
	?>
    
    
      <tr>
        <td><?=$faturacek['tarih'];?></td>
        <td><?=number_format($faturacek['tutar_tl'],2);?></td>
		
		
		
		<td>    
          <span class="button-group">
            <a href="tedarikciler-faturalari-duzenle.php?id=<?=$faturacek['id'];?>&ad=<?=$vcek['ad'];?>&tedarikciid=<?=$id;?>" class="button icon edit">Düzenle</a>
            <a href="tedarikciler-faturalari-sil.php?id=<?=$faturacek['id'];?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Faturayı Sil</a>
           
            </span>
        </td>
       
      </tr>

    
 <?php } ?>   
    
    
    
    
    
      

    </tbody>
  </table>


</div>

	
	
	</div>

	
	</form>

	<?php } ?>

</section>
</div>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>