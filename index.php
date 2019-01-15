<?php

session_start(); 
if(!isset($_SESSION["login"])){
?>
<meta http-equiv="refresh" content="0;URL=giris.php">
<?php
} else
{
?>
<?php include("kafa.php") ?>
<?php include("menu.php") ?>
<?php include("kontrol/veritabani.php") ?>
<section id="content" >
<br>
<?php
echo "<h2>Hoşgeldiniz " . $_SESSION['girenkisi'] . "</h2>";
?>
<br>
<div class="left">
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


</div>

<div class="clear"></div>


<?php include("ayak.php"); ?>

</section>


<?php	} ?>