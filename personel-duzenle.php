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
                <li class="current"><a href="personel.php">Personel</a></li>
                <li ><a href="personel-ekle.php">Personel Ekle</a></li>
               </ul>
            </nav>

<?php
$id=$_GET['id'];

$vericek=$connection->query("select * from personel where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{

?>


<section id="content">
<h2><?=$vcek['ad'];?>&nbsp;<?=$vcek['soyad'];?> adlı personel düzenleniyor.</h2>
<form class="wymupdate" action="personel-duzenle-kontrol.php" enctype="multipart/form-data" method="post" > 
  <div class="column left">
    <section>
      <label for="label">
        Adı
      </label>

      <div>
        <input id="ad" minlength="1" name="ad" value="<?=$vcek['ad'];?>" type="text"  />
        <input type="hidden" name="id" value="<?=$vcek['id'];?>"  />
        
      </div>
    </section>

	
     <section>
      <label for="label">
        Soyadı
      </label>

      <div>
        <input id="soyad" name="soyad" value="<?=$vcek['soyad'];?>"  type="text" class="required" minlength="1"  />
        
      </div>
    </section>

    <section>
      <label for="username">
        TC Numarası
      </label>

      <div>
        <input type="text" id="tcno" name="tcno" value="<?=$vcek['tcno'];?>"  class="required" minlength="11" />
      </div>
    </section>
	
    
  </div>

<div class="column right">


<section>
      <label for="username">
        Maaşı
      </label>

      <div>
        <input type="text" id="maas" name="maas" value="<?=$vcek['maas'];?>"  class="required"  />
      </div>
    </section>
	
	<section>
      <label for="username">
        Başlama Tarihi
      </label>

      <div>
        <input type="text" id="baslamatarihi" name="baslamatarihi" value="<?=$vcek['baslamatarihi'];?>"  class="required" />
      </div>
    </section>

    
	<section>
	<label for="not">Adres</label>
    <div>
    <textarea style="resize: none;" class="required" id="adres" name="adres"><?=$vcek['adres'];?></textarea></div>
    </section>

    

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