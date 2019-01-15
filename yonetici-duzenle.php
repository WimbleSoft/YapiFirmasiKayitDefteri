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
                <li class="current"><a href="yoneticiler.php">Yöneticiler</a></li>
                <li ><a href="yonetici-ekle.php">Yönetici Ekle</a></li>
               </ul>
            </nav>

<?php
$id=$_GET['id'];
$vericek=$connection->query("select * from yoneticiler where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{
?>

            <section id="content">
<h2><?=$vcek['kadi'];?> adlı yönetici hesabı düzenleniyor.</h2>
<form class="wymupdate" action="yonetici-duzenle-kontrol.php" enctype="multipart/form-data" method="post" > 
  <div class="column left">
    <section>
      <label for="label">
        Adı Soyadı
      </label>

      <div>
        <input id="adsoyad" name="adsoyad" value="<?=$vcek['adsoyad'];?>" type="text"  />
                
      </div>
    </section>
    
    
    <section>
      <label for="label">
        Kullanıcı Adı
      </label>

      <div>
        <input id="kadi" name="kadi" value="<?=$vcek['kadi'];?>" type="text"  />
        <input type="hidden" name="id" value="<?=$vcek['id'];?>"  />
        
      </div>
    </section>

    <section>
      <label for="username">
        Şifre
      </label>

      <div>
        <input type="password" id="sifre" name="sifre" placeholder="Boş bırakıldığında şifre değişmeyecektir"  />
      </div>
    </section>

    

    
    

            
    
    
  </div>

<div class="column right">
            <section>
      <label for="password">
        E-Posta Adresi
      </label>

      <div>
        <input id="eposta" name="eposta" type="text" value="<?=$vcek['eposta'];?>" class="email" />
      </div>
    </section>
                    <section>
      <label for="password">
        Telefon Numarası
      </label>

      <div>
        <input id="telefon" name="telefon" type="text" value="<?=$vcek['telefon'];?>" class="required" />
      </div>
    </section>
    
</div>
<div class="clear"></div>

<br />
<p><input type="submit" class="button primary submit" value="Güncelle" /></p>
</form>

<?php } ?>

</section>
</div>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>	
