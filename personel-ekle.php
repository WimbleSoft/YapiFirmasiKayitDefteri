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
                <li ><a href="personel.php">Personel</a></li>
                <li class="current"><a href="personel-ekle.php">Personel Ekle</a></li>
               </ul>
            </nav>



            <section id="content">
<h2>Persoenel ekleniyor.</h2>
<form class="wymupdate" action="personel-ekle-kontrol.php" enctype="multipart/form-data" method="post" > 
  <div class="column left">
    <section>
      <label for="label">
        Adı
      </label>

      <div>
        <input id="ad" name="ad" type="text" class="required" minlength="2"  />
        
      </div>
    </section>
     <section>
      <label for="label">
        Soyadı
      </label>

      <div>
        <input id="soyad" name="soyad" type="text" class="required" minlength="2"  />
        
      </div>
    </section>

    <section>
      <label for="username">
        TC Numarası
      </label>

      <div>
        <input type="text" id="tcno" name="tcno" class="required" minlength="11" />
      </div>
    </section>
	

    
  </div>

<div class="column right">
    
	 <section>
      <label for="username">
        Maaşı
      </label>

      <div>
        <input type="text" id="maas" name="maas" class="required" />
      </div>
    </section>
	
	<section>
      <label for="username">
        Başlama Tarihi
      </label>

      <div>
        <input type="text" id="baslamatarihi" name="baslamatarihi" class="required"value="<?=$tarih = date("Y-m-d");?>" />
      </div>
    </section>

    
	<section>
	<label for="not">Adres</label>
    <div>
    <textarea style="resize: none;" class="required" id="adres" name="adres"></textarea></div>
    </section>


    

</div>
<div class="clear"></div>

<h2>&nbsp;</h2>
<br />
<p><input type="submit" class="button primary submit" value="Personel Ekle" /></p>
</form>


</section>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>
