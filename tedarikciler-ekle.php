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
                <li ><a href="tedarikciler.php">Tedarikçiler</a></li>
                <li class="current"><a href="tedarikciler-ekle.php">Tedarikçi Ekle</a></li>
               </ul>
            </nav>



            <section id="content">
<h2>Tedarikçi ekleniyor.</h2>
<form class="wymupdate" action="tedarikciler-ekle-kontrol.php" enctype="multipart/form-data" method="post" > 
  <div class="column left">
    <section>
      <label for="label">
        Tedarikçi Adı
      </label>

      <div>
        <input id="ad" name="ad" type="text" class="required" minlength="2"  />
        
      </div>
    </section>
    
	

    
  </div>

<div class="column right">
   

    <p><input type="submit" class="button primary submit" value="Tedarikçiler Ekle" /></p>

</div>
<div class="clear"></div>

<h2>&nbsp;</h2>
<br />

</form>


</section>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>
