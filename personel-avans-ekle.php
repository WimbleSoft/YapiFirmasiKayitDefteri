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
$ay=$_GET['ay'];
$yil=$_GET['yil'];

			if($ay==01)$ay_kelime="Ocak";
			elseif($ay==02)$ay_kelime="Şubat";
			elseif($ay==03)$ay_kelime="Mart";
			elseif($ay==04)$ay_kelime="Nisan";
			elseif($ay==05)$ay_kelime="Mayıs";
			elseif($ay==06)$ay_kelime="Haziran";
			elseif($ay==07)$ay_kelime="Temmuz";
			elseif($ay==08)$ay_kelime="Ağustos";
			elseif($ay==09)$ay_kelime="Eylül";
			elseif($ay==10)$ay_kelime="Ekim";
			elseif($ay==11)$ay_kelime="Kasım";
			elseif($ay==12)$ay_kelime="Aralık";
			
?>

	 
<?php
	$personelcek=$connection->query("select * from personel where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
	foreach ($personelcek as $pcek)
	{
?>
			 <nav id="secondary">
              <ul>
                <li class="current"><a href="personel-detay.php?id=<?=$id;?>&yil=<?=$yil;?>"><?=$pcek['ad'];?>&nbsp;<?=$pcek['soyad'];?></a></li>
               </ul>
            </nav>



<section id="content">
<h2><?=$pcek['ad'];?>&nbsp;<?=$pcek['soyad'];?> adlı personele <?=$yil;?> yılı <?=$ay_kelime;?> ayı için avans ekliyorsunuz.</h2>
<form action="personel-avans-ekle-kontrol.php" enctype="multipart/form-data" method="post" > 

<table  style="background-image:url(img/bos.png); background-repeat:repeat" class="datatable">
    <thead>
      <tr>
        <th>AVANS TARİHİ</th>
        <th>AVANS MİKTARI</th>
		<th>TOPLAM VERİLEN</th>
		<th>İŞLEMLER</th>
      </tr>
    </thead>


    <tbody>

  
					<tr>
						<input type="hidden" id="personelid" name="personelid" value="<?=$pcek['id'];?>"/><input type="hidden" id="yil" name="yil" type="text" value="<?=$yil;?>"/><input type="hidden" id="ay" name="ay" type="text" value="<?=$ay;?>"/>
						<td><input id="tarih" name="tarih" type="text" value="<?=$tarih = date("d/m/Y");?>"/></td>
						<td><input id="avanslar" name="avanslar" type="text" class="required"/></td>
						<td><input id="toplamverilen" name="toplamverilen" type="text" value=""/></td></td>
						<td><p><input type="submit" class="button primary submit" value="Avans Ekle" /></p></td>  						
					</tr>  


    </tbody>
    
  </table>

<div class="clear"></div>

<h2>&nbsp;</h2>
<br />

</form>


</section>
 <?php } ?>   
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>
