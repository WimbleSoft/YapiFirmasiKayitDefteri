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
                <li class="current"><a href="firma.php">Müşteriler</a></li>
                <li ><a href="firma-ekle.php">Müşteri Ekle</a></li>
				
               </ul>
            </nav>
<script>
function cleard(id)
{
	document.getElementById(id).value="";
}
function toplamalimhesapla()
{
	if(document.getElementById("alinan_cek").value=="")
	{
	document.getElementById("alinan_cek").value=0;
	document.getElementById("alinan_cek").hidden;
	}
	if(document.getElementById("alinannakit_tl").value=="")
	{
	document.getElementById("alinannakit_tl").value=0;
	}
	if(document.getElementById("alinannakit_usd").value=="")
	{
	document.getElementById("alinannakit_usd").value=0;
	}

document.getElementById("bakiye_tl").value=parseFloat(document.getElementById("alinannakit_tl").value)+parseFloat(document.getElementById("alinan_cek").value)+(parseFloat(document.getElementById("alinannakit_usd").value)*parseFloat(document.getElementById("kur").value))+parseFloat(document.getElementById("bakiye").value);
}
</script>
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
        <li class="current"><a href="firma-santiye-detay.php?id=<?=$scek['id'];?>&firmaid=<?=$scek['firmaid'];?>">Cari İşlemler</a></li>
        <li><a href="firma-santiye-hakedis.php?id=<?=$scek['id'];?>&firmaid=<?=$scek['firmaid'];?>">Hakediş</a></li>
		<li><a href="firma-santiye-teklif.php?id=<?=$scek['id'];?>&firmaid=<?=$scek['firmaid'];?>">Teklif</a></li>
		<li><a href="firma-santiye-montajcilar.php?id=<?=$scek['id'];?>&firmaid=<?=$scek['firmaid'];?>">Montajcılar</a></li>		
      </ul>
    </nav>
<section id="content2">
<br>
<div>
<table  style="background-image:url(img/bos.png); background-repeat:repeat" class="datatable">
    <thead>
		<tr>
			<th>TARİH</th>
			<th>ALINAN ÇEK</th>
			<th>ALINAN NAKİT-TL</th>
			<th>ALINAN NAKİT-USD</th>
			<th>KURU</th>
			<th>HAKEDİŞ TUTARI-TL</th>
			<th>BAKİYE-TL</th>
			<th>İŞLEMLER</th>
		</tr>
    </thead>
    <tbody>
	<?php
			$toplamalimcek4=$connection->query("select SUM(alinan_cek) AS alinmisCEK2 from santiyeler_cari where santiyeid='$id'")->fetchAll(PDO::FETCH_ASSOC);
			foreach ($toplamalimcek4 as $toplamalim4)
			{
			$alinmiscek=$toplamalim4['alinmisCEK2'];
			}
			$toplamalimcek5=$connection->query("select SUM(alinannakit_tl) AS alinmisTL2 from santiyeler_cari where santiyeid='$id'")->fetchAll(PDO::FETCH_ASSOC);
			foreach ($toplamalimcek5 as $toplamalim5)
			{
			$alinmistl=$toplamalim5['alinmisTL2'];
			}
			$toplamalimcek6=$connection->query("select SUM(alinannakit_usd) AS alinmisUSD2 from santiyeler_cari where santiyeid='$id'")->fetchAll(PDO::FETCH_ASSOC);
			foreach ($toplamalimcek6 as $toplamalim6)
			{
			$alinmisusd=$toplamalim6['alinmisUSD2'];
			}
			$sancek=$connection->query("select * from santiyeler_hakedis where santiyeid='$id'")->fetchAll(PDO::FETCH_ASSOC);
			foreach ($sancek as $skcek)
			{
			$geneltop=$skcek['geneltoplam'];
			}
		?>
	<tr>
		<form class="wymupdate" action="firma-santiye-cari-ekle-kontrol.php" enctype="multipart/form-data" method="post" > 
			<td><input size="10"id="tarih" name="tarih" type="text" value="<?=$tarih = date("Y-m-d");?>"   /></td>
			<input id="firmaid" name="firmaid" type="hidden" value="<?=$firmaid;?>"/>
			<input id="santiyeid" name="santiyeid" type="hidden" value="<?=$id;?>"/>
			<input id="bakiye" name="bakiye" type="hidden" value="<?=$alinmiscek+$alinmistl+$alinmisusd-$geneltop;?>"/>
			<td><input size="10"id="alinan_cek" name="alinan_cek" type="text" onkeyup="toplamalimhesapla()"/></td>
			<td><input size="10"id="alinannakit_tl" name="alinannakit_tl" type="text" onkeyup="toplamalimhesapla()"/></td>
			<td><input size="10"id="alinannakit_usd" name="alinannakit_usd" onkeyup="toplamalimhesapla()"type="text"/>
			<td><input size="10"id="kur" name="kur" type="text"onkeyup="toplamalimhesapla()" value="1"/></td>
			<td><input size="10"readonly="readonly" id="hakedistutari_tl" 	name="hakedistutari_tl" type="text" value="<?=$geneltop;?>"/></td>
			<td><input size="10"readonly="readonly" id="bakiye_tl" 			name="bakiye_tl"		type="text" value="<?=$alinmiscek+$alinmistl+$alinmisusd-$geneltop;?>"/></td>
			<td><input type="submit" class="button primary submit" value="Ödeme Ekle" /></td> 
		</form>
	</tr>
    <?php
		$santiyecarilericek=$connection->query("select * from santiyeler_cari where santiyeid='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($santiyecarilericek as $sccek)
		{
	?>
      <tr>
		
        <td><?=$sccek['tarih'];?></td>
		<td><?=number_format($sccek['alinan_cek'],2);?></td>             
		<td><?=number_format($sccek['alinannakit_tl'],2);?></td>
		<td><?=number_format($sccek['alinannakit_usd']/$sccek['kur'],2);?></td>        
		<td><?=number_format($sccek['kur'],2);?></td>  		
		<td><?=number_format($geneltop,2);?></td>

		<td><?=number_format($alinmiscek+$alinmistl+$alinmisusd-$geneltop,2);?></td>
		<td>    
          <span class="button-group">
            <a href="firma-santiye-cari-duzenle.php?id=<?=$sccek['id'];?>&santiyeid=<?=$sccek['santiyeid'];?>" class="button icon search">Düzenle</a>
            <a href="firma-santiye-cari-sil.php?id=<?=$sccek['id'];?>&santiyeid=<?=$sccek['santiyeid'];?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Sil</a>
          </span>
        </td>
      </tr>
	<?php } ?>   
	
    </tbody>
    
  </table>


</div>
<?php } ?>

</section>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>