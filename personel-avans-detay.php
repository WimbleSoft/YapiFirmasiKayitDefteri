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


<script>
function toplamodemehesapla()
{
if(document.getElementById("avanslar").value=="")
{
document.getElementById("avanslar").value=0;
}
document.getElementById("toplamodenen").value=parseFloat(document.getElementById("avanslar").value)+parseFloat(document.getElementById("odenmis").value);

document.getElementById("asankisim").value=parseFloat(document.getElementById("toplamodenen").value)-parseFloat(document.getElementById("maas").value);

if(parseFloat(document.getElementById("maas").value)<document.getElementById("toplamodenen").value)
return alert('Personelin avansları aylik maaşını geçtigi için, avansı eklemeniz durumunda, son eklenecek olan avansın toplam maaşı aşan kısmı bir sonraki aya eklenecek.');
}
</script>


<?php
$personelid=$_GET['personelid'];
$yil=$_GET['yil'];
$ay=$_GET['ay'];
		$percek=$connection->query("select * from personel where id='$personelid'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($percek as $pcek)
		{

?>
            <nav id="secondary">
              <ul>
                <li class="current"><a href="personel-detay.php?id=<?=$personelid;?>&yil=<?=$yil;?>"><?=$pcek['ad'];?>&nbsp;<?=$pcek['soyad'];?></a></li>
              </ul>
            </nav>




<section id="content">
	<h2><?=$pcek['ad'];?>&nbsp;<?=$pcek['soyad'];?> adlı personel detayları.</h2>
	<form class="wymupdate" enctype="multipart/form-data" method="post" > 
	 
	 
	   <div class="column left">
		<section>
		  <label for="label">
			Adı
		  </label>

		  <div>
			<?=$pcek['ad'];?>
			<input type="hidden" name="id" value="<?=$pcek['id'];?>"  />
		  </div>
		</section>

		
		 <section>
		  <label for="label">
			Soyadı
		  </label>

		  <div>
			<?=$pcek['soyad'];?>
		  </div>
		</section>

		<section>
		  <label for="username">
			TC Numarası
		  </label>

		  <div>
			<?=$pcek['tcno'];?>
		  </div>
		</section>
		
		
	  </div>

	<div class="column right">


	<section>
		  <label for="username">
			Maaşı
		  </label>
		<?php $maas2=$pcek['maas'];?>
		  <div>
			<?=number_format($pcek['maas'],2); echo 'TL';?>
		  </div>
		</section>
		
		<section>
		  <label for="username">
			Başlama Tarihi
		  </label>

		  <div>
			<?=$pcek['baslamatarihi'];?>
		  </div>
		</section>

		
		<section>
		<label for="not">Adres</label>
		<div>
		<?=$pcek['adres'];?>
		
		</section>
	 </form>
		

	
	</div>
	 

	<div class="clear">
    <?php
		$i=$ay;
		
				if($i==01)$ayi="Ocak";
				elseif($i==02)$ayi="Şubat";
				elseif($i==03)$ayi="Mart";
				elseif($i==04)$ayi="Nisan";
				elseif($i==05)$ayi="Mayıs";
				elseif($i==06)$ayi="Haziran";
				elseif($i==07)$ayi="Temmuz";
				elseif($i==08)$ayi="Ağustos";
				elseif($i==09)$ayi="Eylül";
				elseif($i==10)$ayi="Ekim";
				elseif($i==11)$ayi="Kasım";
				elseif($i==12)$ayi="Aralık";
	?>

<br><br><h2><?=$yil;?> yılı <?=$ayi;?> ayındaki ödemeleri görüntülüyorsunuz.</h2>
<table style="background-image:url(img/bos.png); background-repeat:repeat" class="datatable">
    <thead>
      <tr>
        <th>ÖDEME TARİHİ</th>
        <th>ÖDEME MİKTARI</th>
        <th>TOPLAM ÖDENEN</th>
        <th>İŞLEMLER</th>
      </tr>
    </thead>
    <tbody>
	<tr>
	 <form class="wymupdate" action="personel-avans-ekle-kontrol.php" enctype="multipart/form-data" method="post" > 
        <td><input id="tarih" name="tarih" type="text" value="<?=$tarih = date("Y-m-d");?>"   /></td>
		<?php
		$toplamodemecek2=$connection->query("select SUM(avanslar) AS odenmistl from personel_avanslar where personelid='$personelid' and ay='$ay' and yil='$yil'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamodemecek2 as $toplamodeme2)
		{
		?>
		<input id="odenmis" name="odenmis" type="hidden" value="<?php if($toplamodeme2['odenmistl']==NULL)echo 0; else echo $toplamodeme2['odenmistl'];?>"   />
		<?php } ?>
		<input id="maas" name="maas" type="hidden" value="<?=$maas2;?>"/>
		<input id="ay" name="ay" type="hidden" value="<?=$ay;?>"/>
		<input id="personelid" name="personelid" type="hidden" value="<?=$personelid;?>"/>
		<input id="yil" name="yil" type="hidden" value="<?=$yil;?>"/>
		<input id="asankisim" name="asankisim" type="hidden"/>
        <td><input class="required" id="avanslar" name="avanslar" type="text" onkeyup="toplamodemehesapla()" /></td>
        <td><input id="toplamodenen" name="toplamodenen" value="<?php if($toplamodeme2['odenmistl']==NULL)echo 0; else echo $toplamodeme2['odenmistl'];?>" type="text" /></td>
		<td><input type="submit" class="button primary submit" onclick="return maasartisikontrol()" value="Avans Ekle" /></td> 
    </form>
	</tr>
	
    <?php
		$vericek=$connection->query("select * from personel_avanslar where personelid='$personelid' and ay='$ay' and yil='$yil' ORDER BY id DESC ")->fetchAll(PDO::FETCH_ASSOC);
			foreach ($vericek as $vcek)
			{
	?>
    <tr>
        <td><input readonly="readonly" id="tarih" name="tarih" type="text" value="<?=$vcek['tarih'];?>"/></td>
        <td><input readonly="readonly" id="avanslar" name="avanslar" type="text" onkeyup="toplamodemehesapla2()" value="<?=$vcek['avanslar'];?>"/></td>
        <td><input readonly="readonly" id="toplamodenen" onload="bak()" name="toplamodenen" value="<?=$toplamodeme2['odenmistl'];?>" type="text" /></td>
		<td>
		<span class="button-group">
		<a href="personel-avans-duzenle.php?ay=<?=$i;?>&yil=<?=$yil;?>&personelid=<?=$personelid;?>&id=<?=$vcek['id'];?>" class="button icon edit">Avansı Düzenle</a>
		<a href="personel-avans-sil.php?ay=<?=$i;?>&yil=<?=$yil;?>&personelid=<?=$personelid;?>&id=<?=$vcek['id'];?>" class="button icon delete">Avansı Sil</a>
		</span>
		</td>
    </tr>
    <?php 	} ?>

	</tbody>
	</table>

	</div>

	<?php } ?>
	
</section>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>