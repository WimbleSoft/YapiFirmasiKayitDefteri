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
                <li ><a href="yoneticiler.php">Yöneticiler</a></li>
                <li class="current"><a href="yonetici-ekle.php">Yönetici Ekle</a></li>
               </ul>
            </nav>


            <section id="content">
<h2>Yönetici hesabı ekleniyor.</h2>
<form class="wymupdate" action="yonetici-ekle-kontrol.php" enctype="multipart/form-data" method="post" > 
  <div class="column left">
     <section>
      <label for="label">
        Ad Soyad
      </label>

      <div>
        <input id="adsoyad" name="adsoyad"  type="text" class="required"  />
        
      </div>
    </section>
    
    <section>
      <label for="label">
        Kullanıcı Adı
      </label>

      <div>
        <input id="kadi" name="kadi"  type="text" class="required"  />
        
      </div>
    </section>

    <section>
      <label for="password">
        Şifre
      </label>

      <div>
        <input type="text" id="sifre" name="sifre"  class="required" />
      </div>
    </section>
    
  </div>

<div class="column right">
            <section>
      <label for="email">
        E-Posta Adresi
      </label>

      <div>
        <input id="eposta" name="eposta" type="text"  class="email" />
      </div>
    </section>
                    <section>
      <label for="phone">
        Telefon Numarası
      </label>

      <div>
        <input id="telefon" name="telefon" type="text"  class="required" />
      </div>
    </section>
    
</div>
<div class="clear"></div>

<br />
<p><input type="submit" class="button primary submit" value="Ekle" /></p>
</form>


</section>
</div>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php  } ?>
