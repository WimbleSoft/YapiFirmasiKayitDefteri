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
<style type="text/css">
.sdsdsd {
	text-align: center;
}
.dssdsd {
	text-align: center;
}
.fgfgfg {
	font-weight: bold;
}
</style>
<?php include("menu.php") ?>
<?php include("kontrol/veritabani.php") ?>
<script>
function hesapla()
{
document.getElementById("doseme").value=+parseFloat(document.getElementById("doseme_metraji").value)*+parseFloat(document.getElementById("doseme_fiyati").value);
document.getElementById("supurgelik").value=+parseFloat(document.getElementById("supurgelik_metraji").value)*+parseFloat(document.getElementById("supurgelik_fiyati").value);
document.getElementById("sove").value=+parseFloat(document.getElementById("sove_metraji").value)*+parseFloat(document.getElementById("sove_fiyati").value);
document.getElementById("denizlik").value=+parseFloat(document.getElementById("denizlik_metraji").value)*+parseFloat(document.getElementById("denizlik_fiyati").value);
document.getElementById("basamak").value=+parseFloat(document.getElementById("basamak_metraji").value)*+parseFloat(document.getElementById("basamak_fiyati").value);


document.getElementById("hakedis_toplami").value=parseFloat(document.getElementById("basamak").value)+parseFloat(document.getElementById("denizlik").value)+parseFloat(document.getElementById("sove").value)+parseFloat(document.getElementById("supurgelik").value)+parseFloat(document.getElementById("doseme").value);
}
</script>
            <nav id="secondary">
              <ul>
                <li class="current"><a href="firma.php">Müşteriler</a></li>
                <li ><a href="firma-ekle.php">Müşteri Ekle</a></li>
				
               </ul>
            </nav>

<?php
$id=$_GET['id'];
$firmaid=$_GET['firmaid'];
$santiyecek=$connection->query("select * from firma_santiyeler where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($santiyecek as $scek)
		{

?>

<section id="content">
	<h2><?=$scek['santiyeadi'];?> adlı şantiye detayları.</h2>
	<form class="wymupdate" enctype="multipart/form-data" method="post" > 
	   <div class="column left">
		<section>
		  <label for="label">
			İlgili Adı
		  </label>
		  <div>
			<?=$scek['ad'];?>
		  </div>
		</section>
		 <section>
		  <label for="label">
			İlgili Soyadı
		  </label>
		  <div>
			<?=$scek['soyad'];?>
		  </div>
		</section>
	  </div>
	<div class="column right">
		<section>
		  <label for="username">
			Adres
		  </label>
		  <div>
			<?=$scek['adres'];?>
		  </div>
		</section>
	</div>
	<div class="clear">
	<a href="firma-santiye-duzenle.php?id=<?=$scek['id'];?>&firmaid=<?=$scek['firmaid'];?>" class="button icon edit">Şantiye Bilgilerini Düzenle</a>
	<a href="firma-santiye-sil.php?id=<?=$scek['id'];?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Şantiyeyi Sil</a>
	</div>
	</form>
</section>
<nav id="secondary">
      <ul>
        <li><a href="firma-santiye-detay.php?id=<?=$scek['id'];?>&firmaid=<?=$scek['firmaid'];?>">Cari İşlemler</a></li>
        <li><a href="firma-santiye-hakedis.php?id=<?=$scek['id'];?>&firmaid=<?=$scek['firmaid'];?>">Hakediş</a></li>
		<li><a href="firma-santiye-teklif.php?id=<?=$scek['id'];?>&firmaid=<?=$scek['firmaid'];?>">Teklif</a></li>
		<li class="current"><a href="firma-santiye-montajcilar.php?id=<?=$scek['id'];?>&firmaid=<?=$scek['firmaid'];?>">Montajcılar</a></li>		
      </ul>
    </nav>
<section id="content2">
<div>

<form action="firma-santiye-montajci-ekle-kontrol.php" class="wymupdate" enctype="multipart/form-data" method="post" > 
	   <div class="column left">
		<section>
		  <label for="label">
			Montaj Ekibi
		  </label>
		  <div>
			<input name="montajekibi" required="required" id="montajekibi" type="text"/>
		  </div>
		</section>
		 <section>
		  <label for="label">
			Şantiye İsmi
		  </label>
		  <div>
			<input name="santiyeid" id="santiyeid" hidden="hidden" type="text" value="<?=$scek['id'];?>" />
            <input name="firmaid" id="firmaid" hidden="hidden" type="text" value="<?=$firmaid;?>" />
            <input name="santiyeadi" readonly="readonly" type="text" value="<?=$scek['santiyeadi'];?>" />
		  </div>
		</section>
         
        <input name="gonder" class="button" type="submit" size="50" style="width:500px; height:150px; font-size:30px"  value="MONTAJCIYI EKLE" />
	  </div>
	<div class="column right">
		<table width="200" border="1">
  <tr>
    <td colspan="4" class="sdsdsd">MONTAJCI HAKEDİŞİ</td>
    </tr>
  <tr>
    <td>CİNSİ</td>
    <td>METRAJI</td>
    <td>FİYATI</td>
    <td>TOPLAMI</td>
  </tr>
  <tr>
    <td class="fgfgfg">DÖŞEME</td>
    <td><label for="doseme_fiyati"></label>
      <input name="doseme_metraji"type="text" id="doseme_metraji" onkeyup="hesapla()" value="0" size="12" /></td>
    <td><input name="doseme_fiyati"onkeyup="hesapla()" type="text" id="doseme_fiyati"value="0" size="12" /></td>
    <td><input name="doseme" type="text" id="doseme" size="12" /></td>
  </tr>
  <tr>
    <td class="fgfgfg">SÜPÜRGELİK</td>
    <td><input name="supurgelik_metraji"onkeyup="hesapla()" type="text" id="supurgelik_metraji"value="0" size="12" /></td>
    <td><input name="supurgelik_fiyati"onkeyup="hesapla()" type="text" id="supurgelik_fiyati"value="0" size="12" /></td>
    <td><input name="supurgelik" type="text" id="supurgelik" size="12" /></td>
  </tr>
  <tr>
    <td class="fgfgfg">SÖVE</td>
    <td><input name="sove_metraji"onkeyup="hesapla()" type="text" id="sove_metraji"value="0" size="12" /></td>
    <td><input name="sove_fiyati"onkeyup="hesapla()" type="text" id="sove_fiyati"value="0" size="12" /></td>
    <td><input name="sove" type="text" id="sove" size="12" /></td>
  </tr>
  <tr>
    <td class="fgfgfg">DENİZLİK</td>
    <td><input name="denizlik_metraji" onkeyup="hesapla()"type="text" id="denizlik_metraji"value="0" size="12" /></td>
    <td><input name="denizlik_fiyati" onkeyup="hesapla()"type="text" id="denizlik_fiyati"value="0" size="12" /></td>
    <td><input name="denizlik" type="text" id="denizlik" size="12" /></td>
  </tr>
  <tr>
    <td class="fgfgfg">BASAMAK</td>
    <td><input name="basamak_metraji" onkeyup="hesapla()"type="text" id="basamak_metraji"value="0" size="12" /></td>
    <td><input name="basamak_fiyati" onkeyup="hesapla()" type="text" id="basamak_fiyati"value="0" size="12" /></td>
    <td><input name="basamak" type="text" id="basamak" size="12" /></td>
  </tr>
  <tr>
    <td colspan="3" class="dssdsd" style="font-weight: bold">HAKEDİŞİ TOPLAMI</td>
    <td style="font-weight: bold"><input name="hakedis_toplami" type="text" id="hakedis_toplami"value="0" size="12" /></td>
  </tr>
  <tr>
    <td colspan="3" class="dssdsd" style="font-weight: bold">BAKİYE</td>
    <td style="font-weight: bold">-------------</td>
  </tr>
</table>

	</div>
	<div class="clear">
	
	</div>
	</form>

</div>



</section>
<?php } ?>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>