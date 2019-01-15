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
                <li class="current"><a href="kasa.php">Kasa</a></li>
				<li><a href="insaat-kasa.php">İnşaat Kasa</a></li>
               </ul>
            </nav>
			 <!--style="background-color:</?=rand_color();?>"-->
	<?php
	function rand_color() {
    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
	}
	?>
<section id="content">
<h2>KASA</h2>
		<?php	
		$toplamgunlukcek=$connection->query("select SUM(gelir_nakit) AS toplamgelir_nakit,SUM(gelir_cek) AS toplamgelir_cek,SUM(gider_nakit) AS toplamgider_nakit,SUM(gider_cek) AS toplamgider_cek from gunluk")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamgunlukcek as $toplamgunluk)
		{
		$toplamgunluk['toplamgelir_nakit'];
		$toplamgunluk['toplamgelir_cek'];
		$toplamgunluk['toplamgider_nakit'];
		$toplamgunluk['toplamgider_cek'];
		}
		?>
		<?php	
		$toplamfaturacek=$connection->query("select SUM(odenen_tl) AS toplamdenen_tl,SUM(odenen_cek) AS toplamdenen_cek from tedarikciler_faturalari_odemeleri")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamfaturacek as $toplamfatura)
		{
		$toplamfatura['toplamdenen_tl'];
		$toplamfatura['toplamdenen_cek'];
		}
		?>
		<?php
		$toplampersonelavansicek=$connection->query("select SUM(avanslar) AS toplampavans from personel_avanslar")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplampersonelavansicek as $toplampersonelavans)
		{
		$toplampersonelavans['toplampavans'];
		}
		?>
		<?php
		$toplammontajciavansicek=$connection->query("select SUM(miktari) AS toplammavans from santiyeler_montajcilar_avanslar")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplammontajciavansicek as $toplammontajciavans)
		{
		$toplammontajciavans['toplammavans'];
		}
		?>
		<?php
		$toplamsantiyecaricek=$connection->query("select SUM(alinannakit_tl)+SUM(alinannakit_usd) AS toplamnakit,SUM(alinan_cek) AS toplamcek from santiyeler_cari")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamsantiyecaricek as $toplamsantiyecari)
		{
		$toplamsantiyecari['toplamnakit'];
		$toplamsantiyecari['toplamcek'];
		}
		?>
<table style="background-image:url(img/bos.png); background-repeat:repeat" >
	<thead>
      <tr>
        <th>Gelir Nakit</th>
		<th>Gelir Çek</th>
        <th>Gider Nakit</th>
        <th>Gider Çek</th>
		<th>Bakiye Nakit</th>
        <th>Bakiye Çek</th>
      </tr>
    </thead>

	<tbody>
	<tr style="border-top-width: 10px; border-color:black;">
        <td><?=number_format($gelirnakit=$toplamsantiyecari['toplamnakit']+$toplamgunluk['toplamgelir_nakit'],2);?></td>
        <td><?=number_format($gelircek=$toplamsantiyecari['toplamcek']+$toplamgunluk['toplamgelir_cek'],2);?></td>
		<td><?=number_format($gidernakit=$toplamfatura['toplamdenen_tl']+$toplampersonelavans['toplampavans']+$toplammontajciavans['toplammavans']+$toplamgunluk['toplamgider_nakit'],2);?></td>
		<td><?=number_format($gidercek=$toplamfatura['toplamdenen_cek']+$toplamgunluk['toplamgider_cek'],2);?></td>
		<td><?=number_format($gelirnakit-$gidernakit,2);?></td>
        <td><?=number_format($gelircek-$gidercek,2);?></td>
      </tr>
	</tbody>
</table>

<div>
<br><br><br>
<table class="datatable">
    <thead>
      <tr>
		<th>Tarih</th>
        <th>Açıklama</th>
        <th>Gelir Nakit</th>
		<th>Gelir Çek</th>
        <th>Gider Nakit</th>
        <th>Gider Çek</th>
		<th>Bakiye Nakit</th>
        <th>Bakiye Çek</th>
        <th>İşlemler</th>
      </tr>
    </thead>

    <tbody>
	<!---GÜNLÜK--->  
	<?php
	$gunlukcek=$connection->query("select * from gunluk")->fetchAll(PDO::FETCH_ASSOC);
	foreach ($gunlukcek as $gcek)
	{
	?>
      <tr style="border-top-width: 10px; border-color:black;">
		<td><?=$gcek['tarih'];?></td>
		<td><?=$gcek['aciklama'];?></td>
        <td><?=number_format($gcek['gelir_nakit'],2);?></td>
        <td><?=number_format($gcek['gelir_cek'],2);?></td>
		<td><?=number_format($gcek['gider_nakit'],2);?></td>
        <td><?=number_format($gcek['gider_cek'],2);?></td>
		<td><?=number_format($gcek['gelir_nakit']-$gcek['gider_nakit'],2);?></td>
        <td><?=number_format($gcek['gelir_cek']-$gcek['gider_cek'],2);?></td>
        <td>
          <span class="button-group">
            <a href="gunluk.php" class="button icon edit">Günlüğe Git</a>
          </span>
        </td>
      </tr>
	  
    <?php } ?>
	  
	<!---PERSONEL--->  
	<?php
	$personelavansicek=$connection->query("select * from personel_avanslar")->fetchAll(PDO::FETCH_ASSOC);
	foreach ($personelavansicek as $pacek)
	{
		$personelid=$pacek['personelid'];
		$personelcek=$connection->query("select * from personel where id='$personelid'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($personelcek as $percek)
		{
	?>
	
      <tr style="border-top-width: 10px; border-color:black;">
		<td><?=$pacek['tarih'];?></td>
		<td><?=$percek['ad'];?> <?=$percek['soyad'];?> | Personel Avans</td>
        <td>---</td>
        <td>---</td>
		<td><?=number_format($pacek['avanslar'],2);?></td>
        <td>---</td>
		<td><?=number_format(-$pacek['avanslar'],2);?></td>
        <td>---</td>
        <td>
          <span class="button-group">
            <a href="personel-avans-detay.php?id=<?=$pacek['personelid'];?>&yil=<?=$pacek['yil'];?>&ay=<?=$pacek['ay'];?>&personelid=<?=$pacek['personelid'];?>" class="button icon edit">Avansa Ayına Git</a>
          </span>
        </td>
      </tr>
    <?php } }?>

	<!---MONTAJCILAR--->  
	<?php
	$montajciavansicek=$connection->query("select * from santiyeler_montajcilar_avanslar")->fetchAll(PDO::FETCH_ASSOC);
	foreach ($montajciavansicek as $macek)
	{	
		$montajciid=$macek['santiye_montajci_id'];
		$montajcicek=$connection->query("select * from santiyeler_montajcilar where id='$montajciid'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($montajcicek as $moncek)
		{
			$santiyeid=$moncek['santiyeid'];
			$santiyecek=$connection->query("select * from firma_santiyeler where id='$santiyeid'")->fetchAll(PDO::FETCH_ASSOC);
			foreach ($santiyecek as $sancek)
			{
				$firmaid=$sancek['firmaid'];
				
	?>
      <tr style="border-top-width: 10px; border-color:black;">
		<td><?=$macek['tarihi'];?></td>
		<td><?=$moncek['montajekibi'];?> | Montajcı Avans</td>
        <td>---</td>
        <td>---</td>
		<td><?=number_format($macek['miktari'],2);?></td>
        <td>---</td>
		<td><?=number_format(-$macek['miktari'],2);?></td>
        <td>---</td>
        <td>
          <span class="button-group">
            <a href="firma-santiye-montajci-detay.php?id=<?=$macek['santiye_montajci_id'];?>&firmaid=<?=$sancek['firmaid'];?>&santiyeid=<?=$moncek['santiyeid'];?>" class="button icon edit">Montajcıya Git</a>
          </span>
        </td>
      </tr>
    <?php }}} ?>
	
	<!---TEDARİKÇİLER--->  
	<?php
	$tedarikcifaturaodemesicek=$connection->query("select * from tedarikciler_faturalari_odemeleri")->fetchAll(PDO::FETCH_ASSOC);
	foreach ($tedarikcifaturaodemesicek as $tfocek)
	{	
		
		$tedarikciid=$tfocek['tedarikciid'];
		$tedarikcicek=$connection->query("select * from tedarikciler where id='$tedarikciid'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($tedarikcicek as $tcek)
		{
	?>
      <tr style="border-top-width: 10px; border-color:black;">
		<td><?=$tfocek['tarih'];?></td>
		<td><?=$tcek['ad'];?> Tedarikçisinin | Fatura Ödemesi</td>
        <td>---</td>
        <td>---</td>
		<td><?=number_format($tfocek['odenen_tl'],2);?></td>
        <td><?=number_format($tfocek['odenen_cek'],2);?></td>
		<td><?=number_format(-$tfocek['odenen_tl'],2);?></td>
        <td><?=number_format(-$tfocek['odenen_cek'],2);?></td>
        <td>
          <span class="button-group">
            <a href="tedarikciler-faturalari-detay.php?id=<?=$tfocek['tedarikciid'];?>&ad=<?=$tcek['ad'];?>" class="button icon edit">Tedarikçiye Git</a>
          </span>
        </td>
      </tr>
    <?php }} ?>
	
	<!---ŞANTİYE CARİ--->  
	<?php
	$santiyecaricek=$connection->query("select * from santiyeler_cari")->fetchAll(PDO::FETCH_ASSOC);
	foreach ($santiyecaricek as $sccek)
	{
		$santiyeid=$sccek['santiyeid'];
		$santiyecek=$connection->query("select * from firma_santiyeler where id='$santiyeid'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($santiyecek as $scek)
		{
	?>
      <tr style="border-top-width: 10px; border-color:black;">
		<td><?=$sccek['tarih'];?></td>
		<td><?=$scek['santiyeadi'];?> | Şantiyesi Cari</td>
        <td><?=number_format($alinan=$sccek['alinannakit_tl']+$sccek['alinannakit_usd'],2)?></td>
        <td><?=number_format($sccek['alinan_cek'],2);?></td>
		<td>---</td>
        <td>---</td>
		<td><?=number_format($alinan,2);?></td>
        <td><?=number_format($sccek['alinan_cek'],2);?></td>
        <td>
          <span class="button-group">
            <a href="firma-santiye-detay.php?id=<?=$scek['id'];?>&firmaid=<?=$scek['firmaid'];?>" class="button icon edit">Şantiyeye Git</a>
          </span>
        </td>
      </tr>
    <?php } }?>
		
    </tbody>
  </table>

</div>



</section>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>