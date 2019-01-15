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
$id=$_POST['id'];
$sirax1=$_POST['sirax1'];
$sirax2=$_POST['sirax2'];
$sirax3=$_POST['sirax3'];
$sirax4=$_POST['sirax4'];
$sirax5=$_POST['sirax5'];
$sirax6=$_POST['sirax6'];
$sirax7=$_POST['sirax7'];
$sirax8=$_POST['sirax8'];
$sirax9=$_POST['sirax9'];
$sirax10=$_POST['sirax10'];
$sirax11=$_POST['sirax11'];
$sirax12=$_POST['sirax12'];
$sirax13=$_POST['sirax13'];
$sirax14=$_POST['sirax14'];
$sirax15=$_POST['sirax15'];
$sirax16=$_POST['sirax16'];
$sirax17=$_POST['sirax17'];
$sirax18=$_POST['sirax18'];
$sirax19=$_POST['sirax19'];
$sirax20=$_POST['sirax20'];
$aciklamax1=$_POST['aciklamax1'];
$aciklamax2=$_POST['aciklamax2'];
$aciklamax3=$_POST['aciklamax3'];
$aciklamax4=$_POST['aciklamax4'];
$aciklamax5=$_POST['aciklamax5'];
$aciklamax6=$_POST['aciklamax6'];
$aciklamax7=$_POST['aciklamax7'];
$aciklamax8=$_POST['aciklamax8'];
$aciklamax9=$_POST['aciklamax9'];
$aciklamax10=$_POST['aciklamax10'];
$aciklamax11=$_POST['aciklamax11'];
$aciklamax12=$_POST['aciklamax12'];
$aciklamax13=$_POST['aciklamax13'];
$aciklamax14=$_POST['aciklamax14'];
$aciklamax15=$_POST['aciklamax15'];
$aciklamax16=$_POST['aciklamax16'];
$aciklamax17=$_POST['aciklamax17'];
$aciklamax18=$_POST['aciklamax18'];
$aciklamax19=$_POST['aciklamax19'];
$aciklamax20=$_POST['aciklamax20'];
$birimfiyatix1=$_POST['birimfiyatix1'];
$birimfiyatix2=$_POST['birimfiyatix2'];
$birimfiyatix3=$_POST['birimfiyatix3'];
$birimfiyatix4=$_POST['birimfiyatix4'];
$birimfiyatix5=$_POST['birimfiyatix5'];
$birimfiyatix6=$_POST['birimfiyatix6'];
$birimfiyatix7=$_POST['birimfiyatix7'];
$birimfiyatix8=$_POST['birimfiyatix8'];
$birimfiyatix9=$_POST['birimfiyatix9'];
$birimfiyatix10=$_POST['birimfiyatix10'];
$birimfiyatix11=$_POST['birimfiyatix11'];
$birimfiyatix12=$_POST['birimfiyatix12'];
$birimfiyatix13=$_POST['birimfiyatix13'];
$birimfiyatix14=$_POST['birimfiyatix14'];
$birimfiyatix15=$_POST['birimfiyatix15'];
$birimfiyatix16=$_POST['birimfiyatix16'];
$birimfiyatix17=$_POST['birimfiyatix17'];
$birimfiyatix18=$_POST['birimfiyatix18'];
$birimfiyatix19=$_POST['birimfiyatix19'];
$birimfiyatix20=$_POST['birimfiyatix20'];
$tur1=$_POST['tur1'];
$tur2=$_POST['tur2'];
$tur3=$_POST['tur3'];
$tur4=$_POST['tur4'];
$tur5=$_POST['tur5'];
$tur6=$_POST['tur6'];
$tur7=$_POST['tur7'];
$tur8=$_POST['tur8'];
$tur9=$_POST['tur9'];
$tur10=$_POST['tur10'];
$tur11=$_POST['tur11'];
$tur12=$_POST['tur12'];
$tur13=$_POST['tur13'];
$tur14=$_POST['tur14'];
$tur15=$_POST['tur15'];
$tur16=$_POST['tur16'];
$tur17=$_POST['tur17'];
$tur18=$_POST['tur18'];
$tur19=$_POST['tur19'];
$tur20=$_POST['tur20'];
$birimi1=$_POST['birimi1'];
$birimi2=$_POST['birimi2'];
$birimi3=$_POST['birimi3'];
$birimi4=$_POST['birimi4'];
$birimi5=$_POST['birimi5'];
$birimi6=$_POST['birimi6'];
$birimi7=$_POST['birimi7'];
$birimi8=$_POST['birimi8'];
$birimi9=$_POST['birimi9'];
$birimi10=$_POST['birimi10'];
$birimi11=$_POST['birimi11'];
$birimi12=$_POST['birimi12'];
$birimi13=$_POST['birimi13'];
$birimi14=$_POST['birimi14'];
$birimi15=$_POST['birimi15'];
$birimi16=$_POST['birimi16'];
$birimi17=$_POST['birimi17'];
$birimi18=$_POST['birimi18'];
$birimi19=$_POST['birimi19'];
$birimi20=$_POST['birimi20'];
$toplam=$_POST['toplam'];
$duzenlemetarihi=$_POST['duzenlemetarihi'];
$duzenlemesaati=$_POST['duzenlemesaati'];
$fiilisevktarihi=$_POST['fiilisevktarihi'];
$vergidairesi=$_POST['vergidairesi'];
$vergino=$_POST['vergino'];
$kdv=$_POST['kdv'];
$geneltoplam=$_POST['geneltoplam'];
$yalniz=$_POST['yalniz'];
$sayin=$_POST['sayin'];
$kur=$_POST['kur'];


//$ayarguncelle=$connection->query("UPDATE fatura SET (kur,tur1, tur2, tur3, tur4, tur5, tur6, tur7, tur8, tur9, tur10, tur11, tur12, tur13, tur14, tur15, tur16, tur17, tur18, tur19, tur20,birimi1, birimi2, birimi3, birimi4, birimi5, birimi6, birimi7, birimi8, birimi9, birimi10, birimi11, birimi12, birimi13, birimi14, birimi15, birimi16, birimi17, birimi18, birimi19, birimi20,sirax1, sirax2, sirax3, sirax4, sirax5, sirax6, sirax7, sirax8, sirax9, sirax10, sirax11, sirax12, sirax13, sirax14, sirax15, sirax16, sirax17, sirax18, sirax19, sirax20, aciklamax1, aciklamax2, aciklamax3, aciklamax4, aciklamax5, aciklamax6, aciklamax7, aciklamax8, aciklamax9, aciklamax10, aciklamax11, aciklamax12, aciklamax13, aciklamax14, aciklamax15, aciklamax16, aciklamax17, aciklamax18, aciklamax19, aciklamax20, birimfiyatix1, birimfiyatix2, birimfiyatix3, birimfiyatix4, birimfiyatix5, birimfiyatix6, birimfiyatix7, birimfiyatix8, birimfiyatix9, birimfiyatix10, birimfiyatix11, birimfiyatix12, birimfiyatix13, birimfiyatix14, birimfiyatix15, birimfiyatix16, birimfiyatix17, birimfiyatix18, birimfiyatix19, birimfiyatix20, toplam, duzenlemetarihi, duzenlemesaati, fiilisevktarihi, vergidairesi, vergino, kdv, geneltoplam, yalniz,sayin) VALUES ('$tur1','$tur2','$tur3','$tur4','$tur5','$tur6','$tur7','$tur8','$tur9','$tur10','$tur11','$tur12','$tur13','$tur14','$tur15','$tur16','$tur17','$tur18','$tur19','$tur20','$birimi1','$birimi2','$birimi3','$birimi4','$birimi5','$birimi6','$birimi7','$birimi8','$birimi9','$birimi10','$birimi11','$birimi12','$birimi13','$birimi14','$birimi15','$birimi16','$birimi17','$birimi18','$birimi19','$birimi20','$sirax1','$sirax2','$sirax3','$sirax4','$sirax5','$sirax6','$sirax7','$sirax8','$sirax9','$sirax10','$sirax11','$sirax12','$sirax13','$sirax14','$sirax15','$sirax16','$sirax17','$sirax18','$sirax19','$sirax20','$aciklamax1','$aciklamax2','$aciklamax3','$aciklamax4','$aciklamax5','$aciklamax6','$aciklamax7','$aciklamax8','$aciklamax9','$aciklamax10','$aciklamax11','$aciklamax12','$aciklamax13','$aciklamax14','$aciklamax15','$aciklamax16','$aciklamax17','$aciklamax18','$aciklamax19','$aciklamax20','$birimfiyatix1','$birimfiyatix2','$birimfiyatix3','$birimfiyatix4','$birimfiyatix5','$birimfiyatix6','$birimfiyatix7','$birimfiyatix8','$birimfiyatix9','$birimfiyatix10','$birimfiyatix11','$birimfiyatix12','$birimfiyatix13','$birimfiyatix14','$birimfiyatix15','$birimfiyatix16','$birimfiyatix17','$birimfiyatix18','$birimfiyatix19','$birimfiyatix20','$duzenlemetarihi','$duzenlemesaati','$fiilisevktarihi','$vergidairesi','$vergino','$kdv','$geneltoplam','$yalniz','$sayin')") or die (mysql_error());

$ayarguncelle=$connection->query("UPDATE fatura set kur='$kur',sayin='$sayin',yalniz='$yalniz',geneltoplam='$geneltoplam',kdv='$kdv',vergino='$vergino',vergidairesi='$vergidairesi',fiilisevktarihi='$fiilisevktarihi',duzenlemesaati='$duzenlemesaati',duzenlemetarihi='$duzenlemetarihi',toplam='$toplam',aciklamax1='$aciklamax1',aciklamax2='$aciklamax2',aciklamax3='$aciklamax3',aciklamax4='$aciklamax4',aciklamax5='$aciklamax5',aciklamax6='$aciklamax6',aciklamax7='$aciklamax7',aciklamax8='$aciklamax8',aciklamax9='$aciklamax9',aciklamax10='$aciklamax10',aciklamax11='$aciklamax11',aciklamax12='$aciklamax12',aciklamax13='$aciklamax13',aciklamax14='$aciklamax14',aciklamax15='$aciklamax15',aciklamax16='$aciklamax16',aciklamax17='$aciklamax17',aciklamax18='$aciklamax18',aciklamax19='$aciklamax19',aciklamax20='$aciklamax20',birimfiyatix1='$birimfiyatix1',birimfiyatix2='$birimfiyatix2',birimfiyatix3='$birimfiyatix3',birimfiyatix4='$birimfiyatix4',birimfiyatix5='$birimfiyatix5',birimfiyatix6='$birimfiyatix6',birimfiyatix7='$birimfiyatix7',birimfiyatix8='$birimfiyatix8',birimfiyatix9='$birimfiyatix9',birimfiyatix10='$birimfiyatix10',birimfiyatix11='$birimfiyatix11',birimfiyatix12='$birimfiyatix12',birimfiyatix13='$birimfiyatix13',birimfiyatix14='$birimfiyatix14',birimfiyatix15='$birimfiyatix15',birimfiyatix16='$birimfiyatix16',birimfiyatix17='$birimfiyatix17',birimfiyatix18='$birimfiyatix18',birimfiyatix19='$birimfiyatix19',birimfiyatix20='$birimfiyatix20',tur1='$tur1',tur2='$tur2',tur3='$tur3',tur4='$tur4',tur5='$tur5',tur6='$tur6',tur7='$tur7',tur8='$tur8',tur9='$tur9',tur10='$tur10',tur11='$tur11',tur12='$tur12',tur13='$tur13',tur14='$tur14',tur15='$tur15',tur16='$tur16',tur17='$tur17',tur18='$tur18',tur19='$tur19',tur20='$tur20',sirax1='$sirax1',sirax2='$sirax2',sirax3='$sirax3',sirax4='$sirax4',sirax5='$sirax5',sirax6='$sirax6',sirax7='$sirax7',sirax8='$sirax8',sirax9='$sirax9',sirax10='$sirax10',sirax11='$sirax11',sirax12='$sirax12',sirax13='$sirax13',sirax14='$sirax14',sirax15='$sirax15',sirax16='$sirax16',sirax17='$sirax17',sirax18='$sirax18',sirax19='$sirax19',sirax20='$sirax20',birimi1='$birimi1',birimi2='$birimi2',birimi3='$birimi3',birimi4='$birimi4',birimi5='$birimi5',birimi6='$birimi6',birimi7='$birimi7',birimi8='$birimi8',birimi9='$birimi9',birimi10='$birimi10',birimi11='$birimi11',birimi12='$birimi12',birimi13='$birimi13',birimi14='$birimi14',birimi15='$birimi15',birimi16='$birimi16',birimi17='$birimi17',birimi18='$birimi18',birimi19='$birimi19',birimi20='$birimi20' where id='$id'") or die ("Bir Hata Oluştu");







if($ayarguncelle){
	$durum="<h2>İşlem Başarılı</h2>";
}else{
	$durum="<h2>Bir hata oluştu2</h2>";
	}
echo"$durum";
echo" <meta http-equiv=\"refresh\" content=\"0;url=fatura_detay.php?id=$id\"> ";
?>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php } ?>