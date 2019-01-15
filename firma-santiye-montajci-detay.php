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

            <nav id="secondary">
              <ul>
                <li class="current"><a href="firma.php">Müşteriler</a></li>
                <li ><a href="firma-ekle.php">Müşteri Ekle</a></li>
				
               </ul>
            </nav>

<?php
$id=$_GET['id'];
$santiyeid=$_GET['santiyeid'];
$firmaid=$_GET['firmaid'];
$santiyecek=$connection->query("select * from firma_santiyeler where id='$santiyeid'")->fetchAll(PDO::FETCH_ASSOC);
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
<?php
$montajcicek=$connection->query("select * from santiyeler_montajcilar where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($montajcicek as $mcek)
		{

?>
<form class="wymupdate" action="firma-santiye-montajci-avans-ekle-kontrol.php" enctype="multipart/form-data" method="post" > 
	   <div class="column left">
		<section>
		  <label for="label">
			Montaj Ekibi
		  </label>
		  <div>
			<?=$mcek['montajekibi'];?>
		  </div>
		</section>
		 <section>
		  <label for="label">
			Şantiye İsmi
		  </label>
		  <div>
			<input name="id" id="id" hidden="hidden" type="text" value="<?=$mcek['id'];?>"/> 
			
            <?=$scek['santiyeadi'];?>
		  </div>
		</section>
		<div class="clear">
	<a href="firma-santiye-montajci-duzenle.php?id=<?=$id;?>&santiyeid=<?=$santiyeid;?>&firmaid=<?=$firmaid;?>" class="button icon edit">Montajcı Bilgilerini Düzenle</a>
	<a href="firma-santiye-montajci-sil.php?id=<?=$id;?>&santiyeid=<?=$santiyeid;?>&firmaid=<?=$firmaid;?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Montajcıyı Sil</a>
	</div>
		
		
	<br><br><br><br>
	<table  style="background-image:url(img/bos.png); background-repeat:repeat" class="datatable">
    <thead>
      <tr>
        <th>ÖDEME TARİHi</th>
		<th>ÖDEME TUTARI</th>
        <th>BAKİYE</th>
        <th>İŞLEMLER</th>
      </tr>
    </thead>
	
<script>
function toplamodemehesapla()
{
if(document.getElementById("miktari").value=="")
{
document.getElementById("miktari").value=0;
}
document.getElementById("toplamodenecek").value=parseFloat(document.getElementById("odenmis").value)-parseFloat(document.getElementById("miktari").value);


}
</script>

    <tbody>
	<tr>
	 
        <td><input id="tarihi" name="tarihi" type="text" value="<?=$tarih = date("Y-m-d");?>"   /></td>
		<?php
		$toplamodemecek2=$connection->query("select SUM(miktari) AS odenmistl from santiyeler_montajcilar_avanslar where santiye_montajci_id='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamodemecek2 as $toplamodeme2)
		{
		?>
		<input id="odenmis" name="odenmis" type="hidden" value="<?php if($toplamodeme2['odenmistl']==NULL)echo $mcek['hakedis_toplami']; else echo $mcek['hakedis_toplami']-$toplamodeme2['odenmistl'];?>"   />
		<?php } ?>
		<input name="santiyeid" id="santiyeid" hidden="hidden" type="text" value="<?=$scek['id'];?>"/> 
        <input name="firmaid" id="firmaid" hidden="hidden" type="text" value="<?=$firmaid;?>"/> 
		<input id="santiye_montajci_id" name="santiye_montajci_id" type="hidden" value="<?=$id;?>"/>
        <td><input class="required" id="miktari" name="miktari" type="text" onkeyup="toplamodemehesapla()" /></td>
        <td><input id="toplamodenecek" readonly="readonly" name="toplamodenecek" value="<?php if($toplamodeme2['odenmistl']==NULL)echo $mcek['hakedis_toplami']; else echo $mcek['hakedis_toplami']-$toplamodeme2['odenmistl'];?>" type="text" /></td>
		<td><input type="submit" class="button primary submit" value="Avans Ekle" /></td> 
 
	</tr>
	
	
	
    <?php
		$avanscek=$connection->query("select * from santiyeler_montajcilar_avanslar where santiye_montajci_id='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($avanscek as $odeme)
		{
	?>
      <tr>
        <td><?=$odeme['tarihi'];?></td>
        <td><?=$odeme['miktari'];?></td>
        <td><?php if($toplamodeme2['odenmistl']==NULL)echo $mcek['hakedis_toplami']; else echo $mcek['hakedis_toplami']-$toplamodeme2['odenmistl'];?></td>
		<td>    
          <span class="button-group">
            <a href="firma-santiye-montajci-avans-duzenle.php?id=<?=$id;?>&avansid=<?=$odeme['id'];?>&santiye_montajci_id=<?=$id;?>&firmaid=<?=$firmaid;?>&santiyeid=<?=$santiyeid;?>" alt="Düzenle" class="button icon edit"></a>
            <a href="firma-santiye-montajci-avans-sil.php?id=<?=$odeme['id'];?>&santiye_montajci_id=<?=$id;?>&firmaid=<?=$firmaid;?>&santiyeid=<?=$santiyeid;?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger"></a>
            </span>
        </td>
      </tr>
 <?php } ?>   
    
    
    
    
    
      

    </tbody>
  </table>
		
		
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
			<td><?=$mcek['doseme_metraji'];?></td>
			<td><?=$mcek['doseme_fiyati'];?> </td>
			<td><?=$mcek['doseme_metraji']*$mcek['doseme_fiyati'];?> </td>
		  </tr>
		  <tr>
			<td class="fgfgfg">SÜPÜRGELİK</td>
			<td><?=$mcek['supurgelik_metraji'];?> </td>
			<td><?=$mcek['supurgelik_fiyati'];?> </td>
			<td><?=$mcek['supurgelik_fiyati']*$mcek['supurgelik_metraji'];?></td>
		  </tr>
		  <tr>
			<td class="fgfgfg">SÖVE</td>
			<td><?=$mcek['sove_metraji'];?> </td>
			<td><?=$mcek['sove_fiyati'];?> </td>
			<td><?=$mcek['sove_fiyati']*$mcek['sove_metraji'];?> </td>
		  </tr>
		  <tr>
			<td class="fgfgfg">DENİZLİK</td>
			<td><?=$mcek['denizlik_metraji'];?> </td>
			<td><?=$mcek['denizlik_fiyati'];?> </td>
			<td><?=$mcek['denizlik_fiyati']*$mcek['denizlik_metraji'];?>  </td>
		  </tr>
		  <tr>
			<td class="fgfgfg">BASAMAK</td>
			<td><?=$mcek['basamak_metraji'];?> </td>
			<td><?=$mcek['basamak_fiyati'];?></td>
			<td><?=$mcek['basamak_fiyati']*$mcek['basamak_metraji'];?></td>
		  </tr>
		  <tr>
			<td colspan="3" class="dssdsd" style="font-weight: bold">HAKEDİŞİ TOPLAMI</td>
			<td style="font-weight: bold"><?=$mcek['hakedis_toplami'];?></td>
		  </tr>
		  <tr>
			<td colspan="3" class="dssdsd" style="font-weight: bold">BAKİYE</td>
			<td style="font-weight: bold"><?php if($toplamodeme2['odenmistl']==NULL)echo $mcek['hakedis_toplami']; else echo $mcek['hakedis_toplami']-$toplamodeme2['odenmistl'];?></td>
		  </tr>
		  <?php	} ?>
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