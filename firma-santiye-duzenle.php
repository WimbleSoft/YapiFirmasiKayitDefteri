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

<?php
$id=$_GET['id'];
$firmaid=$_GET['firmaid'];
$firmacek=$connection->query("select * from firma where id='$firmaid'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($firmacek as $fcek)
		{

?>


<section id="content">
<h2><?=$fcek['firmaadi'];?> adlı müşteriye ait şantiye bilgisi düzenleniyor.</h2>
<form class="wymupdate" action="firma-santiye-duzenle-kontrol.php" enctype="multipart/form-data" method="post" > 
<?php
		$vericek=$connection->query("select * from firma_santiyeler where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{

?>

  <div class="column left">
    <section>
      <label for="label">
        Şantiye Adı
      </label>

      <div>
		<input type="hidden" id="firmaid" name="firmaid" value="<?=$fcek['id'];?>"/>
		<input type="hidden" id="id" name="id" value="<?=$vcek['id'];?>"/>
        <input id="santiyeadi" name="santiyeadi" type="text" value="<?=$vcek['santiyeadi'];?>" class="required" minlength="2"  />
        
      </div>
    </section>
     <section>
      <label for="label">
        İlgili Adı
      </label>

      <div>
        <input id="ad" name="ad" type="text" value="<?=$vcek['ad'];?>" class="required" minlength="2"  />
        
      </div>
    </section>
	 <section>
      <label for="label">
        İlgili Soyadı
      </label>

      <div>
        <input id="soyad" name="soyad" type="text" value="<?=$vcek['soyad'];?>" class="required" minlength="2"  />
        
      </div>
    </section>
   
	

    
  </div>
<?php } ?>
<div class="column right">
    
	 <section>
      <label for="username">
        Adres
      </label>

      <div>
        <textarea style="resize: none;"  id="adres" name="adres"><?=$vcek['adres'];?></textarea>
      </div>
    </section>

<p><input type="submit" class="button primary submit" value="Şantiye Bilgisini Güncelle" /></p>
    

</div>
<div class="clear">


</div>

<h2>&nbsp;</h2>
<br />
</form>

<?php } ?>

</section>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>