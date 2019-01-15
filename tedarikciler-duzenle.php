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
<h2><?=$vcek['ad'];?> adlı tedarikçi düzenleniyor.</h2>
<form class="wymupdate" action="tedarikciler-duzenle-kontrol.php" enctype="multipart/form-data" method="post" > 
  <div class="column left">
    <section>
      <label for="label">
       Tedarikçi Adı
      </label>

      <div>
        <input id="ad" minlength="1" name="ad" value="<?=$vcek['ad'];?>" type="text"  />
        <input type="hidden" name="id" value="<?=$vcek['id'];?>"  />
        
      </div>
    </section>

	
   
    
  </div>

<div class="column right">

</div>
<div class="clear">


</div>

<h2>&nbsp;</h2>
<br />
<p><input type="submit" class="button primary submit" value="Güncelle" /></p>
</form>

<?php } ?>

</section>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>