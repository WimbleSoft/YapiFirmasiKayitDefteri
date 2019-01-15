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
                <li class="current"><a href="firma.php">Müşteriler</a></li>
                <li ><a href="firma-ekle.php">Müşteri Ekle</a></li>
				
               </ul>
            </nav>


<?php
$id=$_GET['id'];

$vericek=$connection->query("select * from firma where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{

?>

<section id="content">
	<h2><?=$vcek['firmaadi'];?> adlı firma detayları.</h2>
	<form class="wymupdate" enctype="multipart/form-data" method="post" > 
	 
	 
	   <div class="column left">
		<section>
		  <label for="label">
			İlgili Adı
		  </label>

		  <div>
			<?=$vcek['ad'];?>
			<input type="hidden" name="id" value="<?=$vcek['id'];?>"  />
			
		  </div>
		</section>

		
		 <section>
		  <label for="label">
			İlgili Soyadı
		  </label>

		  <div>
			<?=$vcek['soyad'];?>
			
		  </div>
		</section>

		<section>
		  <label for="username">
			VD
		  </label>

		  <div>
			<?=$vcek['vd'];?>
		  </div>
		</section>
		
	  </div>

	<div class="column right">


	<section>
		  <label for="username">
			Adres
		  </label>

		  <div>
			<?=$vcek['adres'];?>
		  </div>
		</section>
		
		<section>
		  <label for="username">
			Telefon
		  </label>

		  <div>
			<?=$vcek['telefon'];?>
		  </div>
		</section>
		
		<section>
		  <label for="username">
			Fax
		  </label>

		  <div>
			<?=$vcek['fax'];?>
		  </div>
		</section>

		

	</div>
	 
	 
	 
	<div class="clear">
	<a href="firma-duzenle.php?id=<?=$vcek['id'];?>" class="button icon edit">Müşteri Bilgilerini Düzenle</a>
	<a href="firma-sil.php?id=<?=$vcek['id'];?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Firmayı Sil</a>
	
	
<h2><?=$vcek['firmaadi'];?> firmasına ait şantiyeler</h2>
<a href="firma-santiye-ekle.php?id=<?=$vcek['id'];?>" class="button icon add">Şantiye Ekle</a>

<div>
<table  style="background-image:url(img/bos.png); background-repeat:repeat" class="datatable">
    <thead>
      <tr>
        <th>ŞANTİYE ADI</th>
		<th>İLGİLİ ADI</th>
		<th>İLGİLİ SOYADI</th>
        <th>İŞLEMLER</th>
      </tr>
    </thead>

    <tbody>
    
    
    
    
    <?php
		$santiyelericek=$connection->query("select * from firma_santiyeler where firmaid='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($santiyelericek as $santiyecek)
		{
	?>
    
    
      <tr>
        <td><?=$santiyecek['santiyeadi'];?></td>
		<td><?=$santiyecek['ad'];?></td>             
		<td><?=$santiyecek['soyad'];?></td>     
		<td>    
          <span class="button-group">
			<a href="firma-santiye-detay.php?id=<?=$santiyecek['id'];?>&firmaid=<?=$santiyecek['firmaid'];?>" class="button icon search">Şantiyeyi İncele</a>
            <a href="firma-santiye-duzenle.php?id=<?=$santiyecek['id'];?>&firmaid=<?=$santiyecek['firmaid'];?>" class="button icon search">Şantiye Bilgileri Düzenle</a>
            <a href="firma-santiye-sil.php?id=<?=$santiyecek['id'];?>&firmaid=<?=$santiyecek['firmaid'];?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Şantiye Kaydını Sil</a>
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