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
<h2><?=$vcek['kadi'];?> adlı yönetici hesabı detayları.</h2>
<form class="wymupdate" enctype="multipart/form-data" method="post" > 
  <div class="column left">
    <section>
      <label for="label">
        Adı Soyadı
      </label>

      <div>
        <?=$vcek['adsoyad'];?>
        
      </div>
    </section>
    
    
    <section>
      <label for="label">
        Kullanıcı Adı
      </label>

      <div>
        <?=$vcek['kadi'];?>
        
      </div>
    </section>

    <section>
      <label for="username">
        Şifre<small>Güvenlik nedeniyle gösterilmez.</small>
      </label>

      <div>
        ********
      </div>
    </section>

    

    
    

            
    
    
  </div>

<div class="column right">
            <section>
      <label for="password">
        E-Posta Adresi
      </label>

      <div>
        <?=$vcek['eposta'];?>
      </div>
    </section>
                    <section>
      <label for="password">
        Telefon Numarası
      </label>

      <div>
        <?=$vcek['telefon'];?>
      </div>
    </section>
    
</div>
<div class="clear"></div>

<br />
            <a href="yonetici-duzenle.php?id=<?=$vcek['id'];?>" class="button icon edit">Düzenle</a>
            <a href="yonetici-sil.php?id=<?=$vcek['id'];?>" onclick="return confirm('Hesabı silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Sil</a>

</form>

<?php } ?>

</section>
</div>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>	
