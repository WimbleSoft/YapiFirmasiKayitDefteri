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
<?php
$id=$_GET['id'];
$ad=$_GET['ad'];


$tedarikcicek=$connection->query("select * from tedarikciler where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
foreach ($tedarikcicek as $tdcek)
{
?>

            <nav id="secondary">
              <ul>
                <li class="current"><a href="tedarikciler-detay.php?id=<?=$tdcek['id'];?>&ad=<?=$ad;?>"><?=$ad;?></a></li>
               </ul>
            </nav>

<?php } ?>
<script>
function toplamodemehesapla()
{
var odenentl,odenencek;
	if(document.getElementById("odenen_tl").value=="")
	{
	odenentl=0;
	}
	else odenentl=parseFloat(document.getElementById("odenen_tl").value);
	if(document.getElementById("odenen_cek").value=="")
	{
	odenencek=0;
	}
	else odenencek=parseFloat(document.getElementById("odenen_cek").value);
	
	
	document.getElementById("toplamodenen").value=parseFloat(odenentl)+parseFloat(odenencek)+parseFloat(document.getElementById("odenmis").value);

}
function cleard(id)
{
	document.getElementById(id).value="";
}
</script>
<?php
$faturadetayicek=$connection->query("select * from tedarikciler where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
foreach ($faturadetayicek as $faturacek)
{
?>

<section id="content">
	<h2><?=$ad;?> adlı tedarikçinin detayları</h2>
	<form action="tedarikciler-faturalari-odeme-ekle-kontrol.php" class="wymupdate" enctype="multipart/form-data" method="post" >


		<div class="column left">
		<section>
		  <label for="label">Tedarikçi</label>
		  <div>
			<?=$ad;?>
		  </div>
		</section>
		
		<section>
		  <label for="label">Faturalar Toplamı</label>
		  <div>
		<?php	
		$toplamfaturacek=$connection->query("select SUM(tutar_tl) AS toplamfat from tedarikciler_faturalari where tedarikciid='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamfaturacek as $toplamfatura)
		{
		$toplamfatura['toplamfat'];
		}
		?>
			<?=number_format($toplamfatura['toplamfat'],2);?>
		  </div>
		</section>
		
		<section>
		  <label for="label">Kalan Ödeme</label>
		  <div>
		
		<?php
		$toplamodemecek2=$connection->query("select SUM(odenen_tl) AS odenmistl from tedarikciler_faturalari_odemeleri where tedarikciid='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamodemecek2 as $toplamodeme2)
		{
		$toplamodeme2['odenmistl'];
		}
		$toplamodemcek4=$connection->query("select SUM(odenen_cek) AS odenmiscek from tedarikciler_faturalari_odemeleri where tedarikciid='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamodemcek4 as $toplamodeme4)
		{
		$toplamodeme4['odenmiscek'];
		}
		?>
		<?=number_format($toplamfatura['toplamfat']-$toplamodeme2['odenmistl']-$toplamodeme4['odenmiscek'],2);?>
	
		</div>
		</section>
	  </div>

	<div class="column right">
		
		<section>
		  <label for="label">Toplam Ödenen</label>
		  <div>
		<?=number_format($toplamodeme2['odenmistl']+$toplamodeme4['odenmiscek'],2);?>
	
		</div>
		</section>
		<section>
		  <label for="label">Toplam Ödenen-TL</label>
		  <div>
		<?=number_format($toplamodeme2['odenmistl']+0,2);?>
	
		</div>
		</section>
		
		<section>
		  <label for="label">Toplam Ödenen-ÇEK</label>
		  <div>
		<?=number_format($toplamodeme4['odenmiscek']+0,2);?>
	
		</div>
		</section>
	</div>


	<div class="clear">
	<br><br><br>
	
<h3><?=$ad?> adlı tedarikçinin ödemeleri</h3>

<div>
<table style="background-image:url(img/bos.png); background-repeat:repeat" >
	<thead>
      <tr>
        <th>ÖDEME TARİHi</th>
		<th>ÖDEME TUTARI-TL</th>
        <th>ÖDEME TUTARI-ÇEK</th>
        <th>TOPLAM ÖDENEN</th>
        <th>İŞLEMLER</th>
      </tr>
    </thead>

	<tbody>
	<tr>
        <td><input id="tarih" name="tarih" type="text" value="<?=$tarih = date("Y-m-d");?>"   /></td>
		<input id="odenmis" name="odenmis" type="hidden" value="<?php if($toplamodeme2['odenmistl']==NULL&&$toplamodeme4['odenmiscek']==NULL)echo 0; else echo $toplamodeme2['odenmistl']+$toplamodeme4['odenmiscek'];?>"   />
		<input id="tedarikciid" name="tedarikciid" type="hidden" value="<?=$id;?>"/>
		<input id="ad" name="ad" type="hidden" value="<?=$ad;?>"/>
        <td><input class="required" id="odenen_tl" name="odenen_tl" type="text" onkeyup="toplamodemehesapla()" onclick="cleard(this.id),toplamodemehesapla()" /></td>
		<td><input class="required" id="odenen_cek" name="odenen_cek" type="text" onkeyup="toplamodemehesapla()" onclick="cleard(this.id),toplamodemehesapla()" /></td>
        <td><input id="toplamodenen" readonly="readonly" name="toplamodenen" value="<?php if($toplamodeme2['odenmistl']==NULL&&$toplamodeme4['odenmiscek']==NULL)echo 0; else echo $toplamodeme2['odenmistl']+$toplamodeme4['odenmiscek'];?>" type="text" /></td>
		<td><input type="submit" class="button primary submit" onclick="return maasartisikontrol()" value="Ödeme Ekle" /></td> 
	</tr>
	</tbody>
</table>
<br><br><br>
<table  style="background-image:url(img/bos.png); background-repeat:repeat" class="datatable ">
    
	
	<thead>
      <tr>
        <th>ÖDEME TARİHi</th>
		<th>ÖDEME TUTARI-TL</th>
        <th>ÖDEME TUTARI-ÇEK</th>
        <th>TOPLAM ÖDENEN</th>
        <th>İŞLEMLER</th>
      </tr>
    </thead>

    <tbody>

	
	
    <?php
		$faturaodemelericek=$connection->query("select * from tedarikciler_faturalari_odemeleri where tedarikciid='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($faturaodemelericek as $odeme)
		{
	?>
      <tr>
        <td><?=$odeme['tarih'];?></td>
        <td><?=number_format($odeme['odenen_tl'],2);?></td>
        <td><?=number_format($odeme['odenen_cek'],2);?></td>
		<td><?php if($toplamodeme2['odenmistl']==NULL&&$toplamodeme4['odenmiscek']==NULL)echo number_format(0,2); else echo number_format($toplamodeme2['odenmistl']+$toplamodeme4['odenmiscek'],2);?></td>
		<td>    
          <span class="button-group">
            <a href="tedarikciler-faturalari-odeme-duzenle.php?id=<?=$odeme['id'];?>&tedarikciid=<?=$faturacek['id'];?>&ad=<?=$ad;?>" class="button icon edit">Ödemeyi Düzenle</a>
            <a href="tedarikciler-faturalari-odeme-sil.php?id=<?=$odeme['id'];?>&tedarikciid=<?=$faturacek['id'];?>&ad=<?=$ad;?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Ödemeyi Sil</a>
            </span>
        </td>
      </tr>
 <?php } ?>   
    
    
    
    
    
      

    </tbody>
  </table>


</div>

	
	
	</div>

	
	</form>

	<?php } ?>

</section>
</div>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>