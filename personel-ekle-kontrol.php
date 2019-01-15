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


<section id="content">
<?php
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$tcno=$_POST['tcno'];
$maas=$_POST['maas'];
$baslamatarihi=$_POST['baslamatarihi'];
$adres=$_POST['adres'];



$ayarguncelle=$connection->query("insert into personel (ad,soyad,tcno,maas,adres,baslamatarihi) values ('$ad','$soyad','$tcno','$maas','$adres','$baslamatarihi')") or die ("bir hata olustu...");



if($ayarguncelle){
	$durum="<h2>İşlem Başarılı</h2>";
}else{
	$durum="<h2>Bir hata oluştu</h2>";
	}
echo"$durum";

		$vericek=$connection->query("select * from personel where tcno='$tcno'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{
		$personelid=$vcek['id'];
		echo" <meta http-equiv=\"refresh\" content=\"0;url=personel-detay.php?id=$personelid\"> ";
		
		}


?>

</section>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>