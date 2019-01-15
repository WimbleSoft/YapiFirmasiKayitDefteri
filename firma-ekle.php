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



            <section id="content">
<h2>Müşteri ekleniyor.</h2>
<form class="wymupdate" action="firma-ekle-kontrol.php" enctype="multipart/form-data" method="post" > 
  <div class="column left">
  
  

	
	<section>
      <label for="label">
        Müşteri Adı
      </label>

      <div>
        <input id="firmaadi" name="firmaadi" type="text"/>
        
      </div>
    </section>
	
	
	<section>
      <label for="label">
        İlgili Adı
      </label>

      <div>
        <input id="ad" name="ad" type="text"/>
        
      </div>
    </section>
     <section>
      <label for="label">
        İlgili Soyadı
      </label>

      <div>
        <input id="soyad" name="soyad" type="text"/>
        
      </div>
    </section>


	

    
  </div>

<div class="column right">
    
	 <section>
      <label for="username">
        VD
      </label>

      <div>
        <input type="text" id="vd" name="vd"  />
      </div>
    </section>
	
    <section>
      <label for="username">
        Telefon
      </label>

      <div>
        <input type="text" id="telefon" name="telefon"/>
      </div>
    </section>
	    <section>
      <label for="username">
        Fax
      </label>

      <div>
        <input type="text" id="fax" name="fax"  />
      </div>
    </section>
    
	<section>
	<label for="not">Adres</label>
    <div>
    <textarea style="resize: none;"  id="adres" name="adres"></textarea></div>
    </section>


    

</div>
<div class="clear"></div>

<h2>&nbsp;</h2>
<br />
<p><input type="submit" class="button primary submit" value="Müşteri Ekle" /></p>
</form>


</section>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>
