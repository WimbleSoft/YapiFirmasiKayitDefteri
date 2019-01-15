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
                <li><a href="kasa.php">Kasa</a></li>
				<li class="current"><a href="insaat-kasa.php">İnşaat Kasa</a></li>
               </ul>
            </nav>



            <section id="content">
<h2>İnşaat Kasa Verisi Ekleniyor.</h2>
<form class="wymupdate" action="insaat-kasa-ekle-kontrol.php" enctype="multipart/form-data" method="post" > 
  <table  style="background-image:url(img/bos.png); background-repeat:repeat" class="datatable">
    <thead>
      <tr>
        <th>Tarih</th>
        <th>Açıklama</th>
        <th>Gelir Nakit</th>
		<th>Gelir Çek</th>
        <th>Gider Nakit</th>
        <th>Gider Çek</th>
        <th>İşlemler</th>
      </tr>
    </thead>

    <tbody>
    
    
   
    
      <tr>
        <td><input id="tarih" name="tarih" type="text" value="<?=$tarih = date("Y-m-d");?>"/></td>
		<td><input id="aciklama" name="aciklama" type="text"   /></td>
        <td><input id="gelir_nakit" name="gelir_nakit" type="text"  /></td>
        <td><input id="gelir_cek" name="gelir_cek" type="text"   /></td>
        <td><input id="gider_nakit" name="gider_nakit" type="text"   /></td>
        <td><input id="gider_cek" name="gider_cek" type="text"   /></td>
		<td><p><input type="submit" class="button primary submit" value="Günlüğü Kaydet" /></p></td>
      </tr>
	
	<tr>
        <td><input id="tarih2" name="tarih2" type="text" value="<?=$tarih = date("Y-m-d");?>"/></td>
		<td><input id="aciklama2" name="aciklama2" type="text"   /></td>
        <td><input id="gelir_nakit2" name="gelir_nakit2" type="text"  /></td>
        <td><input id="gelir_cek2" name="gelir_cek2" type="text"   /></td>
        <td><input id="gider_nakit2" name="gider_nakit2" type="text"   /></td>
        <td><input id="gider_cek2" name="gider_cek2" type="text"   /></td>
		<td></td>
      </tr>
	  
	  <tr>
        <td><input id="tarih3" name="tarih3" type="text" value="<?=$tarih = date("Y-m-d");?>"/></td>
		<td><input id="aciklama3" name="aciklama3" type="text"   /></td>
        <td><input id="gelir_nakit3" name="gelir_nakit3" type="text"  /></td>
        <td><input id="gelir_cek3" name="gelir_cek3" type="text"   /></td>
        <td><input id="gider_nakit3" name="gider_nakit3" type="text"   /></td>
        <td><input id="gider_cek3" name="gider_cek3" type="text"   /></td>
		<td></td>
      </tr>
	  
	  <tr>
        <td><input id="tarih4" name="tarih4" type="text" value="<?=$tarih = date("Y-m-d");?>"/></td>
		<td><input id="aciklama4" name="aciklama4" type="text"   /></td>
        <td><input id="gelir_nakit4" name="gelir_nakit4" type="text"  /></td>
        <td><input id="gelir_cek4" name="gelir_cek4" type="text"   /></td>
        <td><input id="gider_nakit4" name="gider_nakit4" type="text"   /></td>
        <td><input id="gider_cek4" name="gider_cek4" type="text"   /></td>
		<td></td>
      </tr>
	  
	  <tr>
        <td><input id="tarih5" name="tarih5" type="text" value="<?=$tarih = date("Y-m-d");?>"/></td>
		<td><input id="aciklama5" name="aciklama5" type="text"   /></td>
        <td><input id="gelir_nakit5" name="gelir_nakit5" type="text"  /></td>
        <td><input id="gelir_cek5" name="gelir_cek5" type="text"   /></td>
        <td><input id="gider_nakit5" name="gider_nakit5" type="text"   /></td>
        <td><input id="gider_cek5" name="gider_cek5" type="text"   /></td>
		<td></td>
      </tr>

    </tbody>
  </table>
  
  </form>
<div class="clear"></div>




</section>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>
