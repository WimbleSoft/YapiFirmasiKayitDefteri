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
                <li ><a href="firma.php">Müşteri</a></li>
                <li class="current"><a href="firma-ekle.php">Müşteri Ekle</a></li>
               </ul>
            </nav>


<?php
$id=$_GET['id'];
?>

<?php
	$firmacek=$connection->query("select * from firma where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
	foreach ($firmacek as $fcek)
	{
?>

 

<section id="content">
<h2><?=$fcek['firmaadi'];?> adlı müşteriye şantiye ekleniyor.</h2>
<form class="wymupdate" action="firma-santiye-ekle-kontrol.php" enctype="multipart/form-data" method="post" > 

 <div class="column left">
    <section>
      <label for="label">
        Şantiye Adı
      </label>

      <div>
		<input type="hidden" id="firmaid" name="firmaid" value="<?=$fcek['id'];?>"/>
        <input id="santiyeadi" name="santiyeadi" type="text"  />
        
      </div>
    </section>
    <section>
      <label for="label">
        İlgili Adı
      </label>

      <div>
        <input id="ad" name="ad" type="text"  />
        
      </div>
    </section>

    <section>
      <label for="username">
        İlgili Soyadı
      </label>

      <div>
        <input type="text" id="soyad" name="soyad"/>
      </div>
    </section>
	

    
  </div>

<div class="column right">
    
	    <section>
      <label for="username">
        Şantiye Adresi
      </label>

      <div>
        <textarea style="resize: none;"  id="adres" name="adres"></textarea>
      </div>
    </section>

<p><input type="submit" class="button primary submit" value="Şantiye Ekle" /></p>
    

</div>

<div class="clear"></div>

<h2>&nbsp;</h2>
<br />

</form>


</section>
 <?php } ?>   
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>
