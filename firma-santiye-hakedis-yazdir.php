<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
session_start(); 
if(!isset($_SESSION["login"])){
?>
<meta http-equiv="refresh" content="0;URL=giris.php">
<?php
} else
{
?>
<style type="text/css">
.xcxcv {
	font-weight: bold;
	font-size: 14px;
}
.fsdfgsfdsf {	text-align: left;
}
.bnmbnmbn {	text-align: left;
}
</style>
<style>
.asdasdasdsada {
	text-align: center;
}
.asdsadasda {
	text-align: center;
}
.xcxcv {
	text-align: left;
}
.sfvgbnv {
	font-size: 9px;
}
.ortala {
	text-align: center;
}
</style>



<!-- GİRİŞ KONTROL -->
<?php //include("kafa.php") ?>
<?php //include("menu.php") ?>
<?php include("kontrol/veritabani.php") ?>


<script>
function cleard(id)
{
	document.getElementById(id).value="";
}
function hesaplag(){
var kuru1=1,kuru2=1,kuru3=1,kuru4=1,kuru5=1,kuru6=1,kuru7=1,kuru8=1,kuru9=1,kuru10=1,kuru11=1,kuru12=1,kuru13=1,kuru14=1,kuru15=1,kuru16=1,kuru17=1,kuru18=1,kuru19=1,kuru20=1;

	if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi1").value==2)
		{
			kuru1=parseFloat(document.getElementById("kur").value);
		}
		else kuru1=1;
		if(document.getElementById("birimi2").value==2)
		{
			kuru2=parseFloat(document.getElementById("kur").value);
		}
		else kuru2=1;
		if(document.getElementById("birimi3").value==2)
		{
			kuru3=parseFloat(document.getElementById("kur").value);
		}
		else kuru3=1;
		if(document.getElementById("birimi4").value==2)
		{
			kuru4=parseFloat(document.getElementById("kur").value);
		}
		else kuru4=1;
		if(document.getElementById("birimi5").value==2)
		{
			kuru5=parseFloat(document.getElementById("kur").value);
		}
		else kuru5=1;
		if(document.getElementById("birimi6").value==2)
		{
			kuru6=parseFloat(document.getElementById("kur").value);
		}
		else kuru6=1;
		if(document.getElementById("birimi7").value==2)
		{
			kuru7=parseFloat(document.getElementById("kur").value);
		}
		else kuru7=1;
		if(document.getElementById("birimi8").value==2)
		{
			kuru8=parseFloat(document.getElementById("kur").value);
		}
		else kuru8=1;
		if(document.getElementById("birimi9").value==2)
		{
			kuru9=parseFloat(document.getElementById("kur").value);
		}
		else kuru9=1;
		if(document.getElementById("birimi10").value==2)
		{
			kuru10=parseFloat(document.getElementById("kur").value);
		}
		else kuru10=1;
		if(document.getElementById("birimi11").value==2)
		{
			kuru11=parseFloat(document.getElementById("kur").value);
		}
		else kuru11=1;
		if(document.getElementById("birimi12").value==2)
		{
			kuru12=parseFloat(document.getElementById("kur").value);
		}
		else kuru12=1;
		if(document.getElementById("birimi13").value==2)
		{
			kuru13=parseFloat(document.getElementById("kur").value);
		}
		else kuru13=1;
		if(document.getElementById("birimi14").value==2)
		{
			kuru14=parseFloat(document.getElementById("kur").value);
		}
		else kuru14=1;
		if(document.getElementById("birimi15").value==2)
		{
			kuru15=parseFloat(document.getElementById("kur").value);
		}
		else kuru15=1;
		if(document.getElementById("birimi16").value==2)
		{
			kuru16=parseFloat(document.getElementById("kur").value);
		}
		else kuru16=1;
		if(document.getElementById("birimi17").value==2)
		{
			kuru17=parseFloat(document.getElementById("kur").value);
		}
		else kuru17=1;
		if(document.getElementById("birimi18").value==2)
		{
			kuru18=parseFloat(document.getElementById("kur").value);
		}
		else kuru18=1;
		if(document.getElementById("birimi19").value==2)
		{
			kuru19=parseFloat(document.getElementById("kur").value);
		}
		else kuru19=1;
		if(document.getElementById("birimi20").value==2)
		{
			kuru20=parseFloat(document.getElementById("kur").value);
		}
		else kuru20=1;
	}

var toplami  =  (document.getElementById("birimfiyatix1").value * kuru1 * document.getElementById("sirax1").value+ document.getElementById("birimfiyatix2").value * kuru2 * document.getElementById("sirax2").value + document.getElementById("birimfiyatix3").value * kuru3 * document.getElementById("sirax3").value + document.getElementById("birimfiyatix4").value * kuru4 * document.getElementById("sirax4").value + document.getElementById("birimfiyatix5").value * kuru5 * document.getElementById("sirax5").value + document.getElementById("birimfiyatix6").value * kuru6 * document.getElementById("sirax6").value + document.getElementById("birimfiyatix7").value * kuru7 * document.getElementById("sirax7").value + document.getElementById("birimfiyatix8").value * kuru8 * document.getElementById("sirax8").value + document.getElementById("birimfiyatix9").value * kuru9 * document.getElementById("sirax9").value + document.getElementById("birimfiyatix10").value * kuru10 * document.getElementById("sirax10").value + document.getElementById("birimfiyatix11").value * kuru11 * document.getElementById("sirax11").value + document.getElementById("birimfiyatix12").value * kuru12 * document.getElementById("sirax12").value + document.getElementById("birimfiyatix13").value * kuru13 * document.getElementById("sirax13").value + document.getElementById("birimfiyatix14").value * kuru14 * document.getElementById("sirax14").value + document.getElementById("birimfiyatix15").value * kuru15 * document.getElementById("sirax15").value + document.getElementById("birimfiyatix16").value * kuru16 * document.getElementById("sirax16").value + document.getElementById("birimfiyatix17").value * kuru17 * document.getElementById("sirax17").value + document.getElementById("birimfiyatix18").value * kuru18 * document.getElementById("sirax18").value + document.getElementById("birimfiyatix19").value * kuru19 * document.getElementById("sirax19").value + document.getElementById("birimfiyatix20").value * kuru20 * document.getElementById("sirax20").value);
document.getElementById("geneltoplam").value=toplami+(toplami*document.getElementById("kdv").value/100);

document.getElementById("toplam").value  = (document.getElementById("birimfiyatix1").value * kuru1 * document.getElementById("sirax1").value+ document.getElementById("birimfiyatix2").value * kuru2 * document.getElementById("sirax2").value + document.getElementById("birimfiyatix3").value * kuru3 * document.getElementById("sirax3").value + document.getElementById("birimfiyatix4").value * kuru4 * document.getElementById("sirax4").value + document.getElementById("birimfiyatix5").value * kuru5 * document.getElementById("sirax5").value + document.getElementById("birimfiyatix6").value * kuru6 * document.getElementById("sirax6").value + document.getElementById("birimfiyatix7").value * kuru7 * document.getElementById("sirax7").value + document.getElementById("birimfiyatix8").value * kuru8 * document.getElementById("sirax8").value + document.getElementById("birimfiyatix9").value * kuru9 * document.getElementById("sirax9").value + document.getElementById("birimfiyatix10").value * kuru10 * document.getElementById("sirax10").value + document.getElementById("birimfiyatix11").value * kuru11 * document.getElementById("sirax11").value + document.getElementById("birimfiyatix12").value * kuru12 * document.getElementById("sirax12").value + document.getElementById("birimfiyatix13").value * kuru13 * document.getElementById("sirax13").value + document.getElementById("birimfiyatix14").value * kuru14 * document.getElementById("sirax14").value + document.getElementById("birimfiyatix15").value * kuru15 * document.getElementById("sirax15").value + document.getElementById("birimfiyatix16").value * kuru16 * document.getElementById("sirax16").value + document.getElementById("birimfiyatix17").value * kuru17 * document.getElementById("sirax17").value + document.getElementById("birimfiyatix18").value * kuru18 * document.getElementById("sirax18").value + document.getElementById("birimfiyatix19").value * kuru19 * document.getElementById("sirax19").value + document.getElementById("birimfiyatix20").value * kuru20 * document.getElementById("sirax20").value);

document.getElementById("kdvtoplam").value=document.getElementById("toplam").value*document.getElementById("kdv").value/100;
}

function hesaplax(){
return 0;
}

function hesapla(){
var kuru1=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi1").value==2)
		{
			kuru1=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total1").value=kuru1 * document.getElementById("birimfiyatix1").value * document.getElementById("sirax1").value;}

function hesapla2(){
var kuru2=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi2").value==2)
		{
			kuru2=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total2").value=kuru2 * document.getElementById("birimfiyatix2").value * document.getElementById("sirax2").value;}

function hesapla3(){
var kuru3=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi3").value==2)
		{
			kuru3=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total3").value=kuru3 * document.getElementById("birimfiyatix3").value * document.getElementById("sirax3").value;}

function hesapla4(){
	var kuru4=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi4").value==2)
		{
			kuru4=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total4").value=kuru4 * document.getElementById("birimfiyatix4").value * document.getElementById("sirax4").value;}

function hesapla5(){
	var kuru5=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi5").value==2)
		{
			kuru5=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total5").value=kuru5 * document.getElementById("birimfiyatix5").value * document.getElementById("sirax5").value;}

function hesapla6(){
	var kuru6=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi6").value==2)
		{
			kuru6=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total6").value=kuru6 * document.getElementById("birimfiyatix6").value * document.getElementById("sirax6").value;}

function hesapla7(){
	var kuru7=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi7").value==2)
		{
			kuru7=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total7").value=kuru7 * document.getElementById("birimfiyatix7").value * document.getElementById("sirax7").value;}

function hesapla8(){
	var kuru8=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi8").value==2)
		{
			kuru8=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total8").value=kuru8 * document.getElementById("birimfiyatix8").value * document.getElementById("sirax8").value;}



function hesapla9(){
	var kuru9=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi9").value==2)
		{
			kuru9=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total9").value=kuru9 * document.getElementById("birimfiyatix9").value * document.getElementById("sirax9").value;}

function hesapla10(){
	var kuru10=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi10").value==2)
		{
			kuru10=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total10").value=kuru10 * document.getElementById("birimfiyatix10").value * document.getElementById("sirax10").value;}

function hesapla11(){
	var kuru11=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi11").value==2)
		{
			kuru11=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total11").value=kuru11 * document.getElementById("birimfiyatix11").value * document.getElementById("sirax11").value;}

function hesapla12(){
var kuru12=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi12").value==2)
		{
			kuru12=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total12").value=kuru12 * document.getElementById("birimfiyatix12").value * document.getElementById("sirax12").value;}

function hesapla13(){
var kuru13=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi13").value==2)
		{
			kuru13=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total13").value=kuru13 * document.getElementById("birimfiyatix13").value * document.getElementById("sirax13").value;}

function hesapla14(){
	var kuru14=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi14").value==2)
		{
			kuru14=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total14").value=kuru14 * document.getElementById("birimfiyatix14").value * document.getElementById("sirax14").value;}

function hesapla15(){
	var kuru15=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi15").value==2)
		{
			kuru15=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total15").value=kuru15 * document.getElementById("birimfiyatix15").value * document.getElementById("sirax15").value;}

function hesapla16(){
	var kuru16=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi16").value==2)
		{
			kuru16=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total16").value=kuru16 * document.getElementById("birimfiyatix16").value * document.getElementById("sirax16").value;}

function hesapla17(){
	var kuru17=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi17").value==2)
		{
			kuru17=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total17").value=kuru17 * document.getElementById("birimfiyatix17").value * document.getElementById("sirax17").value;}

function hesapla18(){
var kuru18=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi18").value==2)
		{
			kuru18=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total18").value=kuru18 * document.getElementById("birimfiyatix18").value * document.getElementById("sirax18").value;}

function hesapla19(){
var kuru19=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi19").value==2)
		{
			kuru19=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total19").value=kuru19 * document.getElementById("birimfiyatix19").value * document.getElementById("sirax19").value;}

function hesapla20(){
var kuru20=1;
if(parseFloat(document.getElementById("kur").value))
	{
		if(document.getElementById("birimi20").value==2)
		{
			kuru20=parseFloat(document.getElementById("kur").value);
		}
	}
document.getElementById("total20").value=kuru20 * document.getElementById("birimfiyatix20").value * document.getElementById("sirax20").value;}


</script>

<script>
function cevir(){
var yazilacaksayi = document.getElementById("geneltoplam").value;
document.getElementById("yalniz").value = sayiyiYaziyaCevir(yazilacaksayi,2,"TL","KR","#",null,null,null);
}
function sayiyiYaziyaCevir(sayi,kurusbasamak,parabirimi, parakurus,diyez, bb1, bb2, bb3) {
var b1 = ["", "bir", "iki", "üç", "dört", "beş", "altı", "yedi", "sekiz", "dokuz"];
var b2 = ["", "on", "yirmi", "otuz", "kırk", "elli", "altmış", "yetmiş", "seksen", "doksan"];
var b3 = ["", "yüz", "bin", "milyon", "milyar", "trilyon", "katrilyon"];
if (bb1 != null) {
b1 = bb1;
}
if (bb2 != null) {
b2 = bb2;
}
if (bb3 != null) {
b3 = bb3;
}
var say1, say2 = "";
var sonuc = "";
sayi = sayi.replace(",", ".");
if (sayi.indexOf(".") > 0) {
say1 = sayi.substring(0, sayi.indexOf("."));
say2 = sayi.substring(sayi.indexOf("."), sayi.length);
} else {
say1 = sayi;
}
rk = say1.split("");
var son;
var w = 1;
var sonaekle = 0;
var kac = rk.length;
var sonint;
var uclubasamak = 0;
var artan = 0;
var gecici;

if (kac > 0) {
var i;
for (i = 0; i < kac; i++) {
son = rk[kac - 1 - i];
sonint = parseInt(son);
if (w == 1) {
sonuc = b1[sonint] + sonuc;
} else if (w == 2) {
sonuc = b2[sonint] + sonuc;
} else if (w == 3) {
if (sonint == 1) {
sonuc = b3[1] + sonuc;
} else if (sonint > 1) {
sonuc = b1[sonint] + b3[1] + sonuc;
}
uclubasamak++;
}
if (w > 3) {
if (uclubasamak == 1) {
if (sonint > 0) {
sonuc = b1[sonint] + b3[2 + artan] + sonuc;
if (artan == 0) {
 if(kac-1==i){
  sonuc = sonuc.replace(b1[1] + b3[2], b3[2]);
 }
}
sonaekle = 1;
} else {
sonaekle = 0;
}
uclubasamak++;
} else if (uclubasamak == 2) {
if (sonint > 0) {
if (sonaekle > 0) {
sonuc = b2[sonint] + sonuc;
sonaekle++;
} else {
sonuc = b2[sonint] + b3[2 + artan] + sonuc;
sonaekle++;
}
}
uclubasamak++;
} else if (uclubasamak == 3) {
if (sonint > 0) {
if (sonint == 1) {
gecici = b3[1];
} else {
gecici = b1[sonint] + b3[1];
}
if (sonaekle == 0) {
gecici = gecici + b3[2 + artan];
}
sonuc = gecici + sonuc;
}
uclubasamak = 1;
artan++;
}
}
w++;
}
}
if (sonuc=="") {
parabirimi = "";
}
say2 = say2.replace(".", "");
var kurus = "";
if (say2!="") {
if (kurusbasamak > 3) {
kurusbasamak = 3;
}
var kacc = say2.length;
if (kacc == 1) {
say2 = say2 + "0";
kurusbasamak = 2;
}

if (say2.length > kurusbasamak) {
say2 = say2.substring(0, kurusbasamak);
}
kurusrk = say2.split("");
kac = kurusrk.length;
w = 1;

for (i = 0; i < kac; i++) {
son = kurusrk[kac - 1 - i];
sonint = parseInt(son);
if (w == 1) {
if (kurusbasamak > 0) {
kurus = b1[sonint] + kurus;
}
} else if (w == 2) {
if (kurusbasamak > 1) {
kurus = b2[sonint] + kurus;
}
} else if (w == 3) {
if (kurusbasamak > 2) {
if (sonint == 1) {
kurus = b3[1] + kurus;
} else if (sonint > 1) {
kurus = b1[sonint] + b3[1] + kurus;
}
}
}
w++;
}
if (kurus=="") {
parakurus = "";
} else {
kurus = kurus + " ";
}
kurus = kurus + parakurus;
}
sonuc = diyez + sonuc + " " + parabirimi + " " + kurus + diyez;
return sonuc;
}
</script>



<?php
$id=$_GET['id'];
$firmaid=$_GET['firmaid'];
$santiyecek=$connection->query("select * from firma_santiyeler where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($santiyecek as $scek)
		{

?>

	<?php } ?>
<section id="content">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div>
  <form action="" method="post" enctype="multipart/form-data">
  <input name="firmaid" hidden="hidden" type="text" id="firmaid" value="<?=$scek['firmaid'];?>" />
  <input name="santiyeid" hidden="hidden" type="text" id="santiyeid" value="<?=$scek['id'];?>" />
  <table width="846" border="0">
  <?php 
	$vericek=$connection->query("select * from santiyeler_hakedis where santiyeid='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{
	?>
  <tr>
    <td width="81" height="24">KONU :</td>
    <td colspan="3"><input   name="konu" type="text" id="konu"size="49" value="<?=$vcek['konu']; ?>" /></td>
    <td width="62">&nbsp;</td>
    <td width="144">Düzenleme Tarihi</td>
    <td colspan="2"><input   name="tarih" type="text" id="tarih" value="<?=$vcek['tarih'];?>" /></td>
  </tr>
  <tr>
    <td>FİRMA:</td>
    <?php 
	$firmacek=$connection->query("select * from firma where id='$firmaid'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($firmacek as $fcek)
		{
	?>
    <td colspan="3"><input readonly  name="konu2" type="text" id="konu2"size="49" value="<?=$fcek['firmaadi'];?>" />
    </td>
	<?php } ?>
    <td>&nbsp;</td>
    <td>Şantiye Adı</td>
    <td colspan="2"><input readonly="readonly"  name="konu3" type="text" id="konu3" value="<?=$scek['santiyeadi'];?>" /></td>
  </tr>
  <tr>
    <td>İLGİLİ :</td>
    <td colspan="3"><input readonly  name="ilgili" type="text" id="ilgili"size="49" value="<?=$scek['ad'];?> <?=$scek['soyad'];?>" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">İŞİN ADI</div></td>
    <td width="66"><div align="center">KEŞİF MİKTARI</div></td>
    <td><div align="center">BİRİM</div></td>
    <td><div align="center">BİRİM FİYATI</div></td>
    <td width="62">BİRİMİ</td>
    <td width="149"><div align="center">TUTARI</div></td>
  </tr>
  <tr>
    <td height="24" colspan="3"><input   name="aciklamax1" type="text" id="aciklamax1" value="<?=$vcek['aciklamax1']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax1"  type="text" id="sirax1" onKeyUp="hesaplax(),hesapla(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax1']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select style="width:60px;" name="tur1" id="tur1">
        <?php
        $turdegeri=$vcek['tur1']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix1"  type="text" id="birimfiyatix1"  onkeyup="hesaplax(),hesapla(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix1']; ?>" /></td>
    <td class="asdasdasd"><span class="fsdfgsfdsf"> <span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi1" id="birimi1" onChange="hesaplax(),hesapla(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi1']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix1']=$vcek['birimfiyatix1']*$vcek['kur'];}
		?>
        </select>
    </span></span></td>
    <td><input   name="total1"  type="text" id="total1" value="<?=$bf1=($vcek['birimfiyatix1']*($vcek['sirax1'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax2" type="text" id="aciklamax2" value="<?=$vcek['aciklamax2']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax2"  type="text" id="sirax2" onKeyUp="hesaplax(),hesapla2(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax2']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur2" id="tur2">
        <?php
        $turdegeri=$vcek['tur2']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix2"  type="text" id="birimfiyatix2"  onkeyup="hesaplax(),hesapla2(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix2']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi2" id="birimi2" onChange="hesaplax(),hesapla2(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi2']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix2']=$vcek['birimfiyatix2']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total2"  type="text" id="total2" value="<?=$bf2=($vcek['birimfiyatix2']*($vcek['sirax2'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax3" type="text" id="aciklamax3" value="<?=$vcek['aciklamax3']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax3"  type="text" id="sirax3" onKeyUp="hesaplax(),hesapla3(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax3']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur3" id="tur3">
        <?php
        $turdegeri=$vcek['tur3']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix3"  type="text" id="birimfiyatix3"  onkeyup="hesaplax(),hesapla3(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix3']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi3" id="birimi3" onChange="hesaplax(),hesapla3(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi3']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix3']=$vcek['birimfiyatix3']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total3"  type="text" id="total3" value="<?=$bf3=($vcek['birimfiyatix3']*($vcek['sirax3'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax4" type="text" id="aciklamax4" value="<?=$vcek['aciklamax4']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax4"  type="text" id="sirax4" onKeyUp="hesaplax(),hesapla4(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax4']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur4" id="tur4">
        <?php
        $turdegeri=$vcek['tur4']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix4"  type="text" id="birimfiyatix4"  onkeyup="hesaplax(),hesapla4(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix4']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi4" id="birimi4" onChange="hesaplax(),hesapla4(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi4']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix4']=$vcek['birimfiyatix4']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total4"  type="text" id="total4" value="<?=$bf4=($vcek['birimfiyatix4']*($vcek['sirax4'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax5" type="text" id="aciklamax5" value="<?=$vcek['aciklamax5']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax5"  type="text" id="sirax5" onKeyUp="hesaplax(),hesapla5(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax5']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur5" id="tur5">
        <?php
        $turdegeri=$vcek['tur5']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix5"  type="text" id="birimfiyatix5"  onkeyup="hesaplax(),hesapla5(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix5']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi5" id="birimi5" onChange="hesaplax(),hesapla5(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi5']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix5']=$vcek['birimfiyatix5']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total5"  type="text" id="total5" value="<?=$bf5=($vcek['birimfiyatix5']*($vcek['sirax5'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax6" type="text" id="aciklamax6" value="<?=$vcek['aciklamax6']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax6"  type="text" id="sirax6" onKeyUp="hesaplax(),hesapla6(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax6']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur6" id="tur6">
        <?php
        $turdegeri=$vcek['tur6']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix6"  type="text" id="birimfiyatix6"  onkeyup="hesaplax(),hesapla6(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix6']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi6" id="birimi6" onChange="hesaplax(),hesapla6(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi6']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix6']=$vcek['birimfiyatix6']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total6"  type="text" id="total6" value="<?=$bf6=($vcek['birimfiyatix6']*($vcek['sirax6'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax7" type="text" id="aciklamax7" value="<?=$vcek['aciklamax7']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax7"  type="text" id="sirax7" onKeyUp="hesaplax(),hesapla7(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax7']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur7" id="tur7">
        <?php
        $turdegeri=$vcek['tur7']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix7"  type="text" id="birimfiyatix7"  onkeyup="hesaplax(),hesapla7(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix7']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi7" id="birimi7" onChange="hesaplax(),hesapla7(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi7']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix7']=$vcek['birimfiyatix7']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total7"  type="text" id="total7" value="<?=$bf7=($vcek['birimfiyatix7']*($vcek['sirax7'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax8" type="text" id="aciklamax8" value="<?=$vcek['aciklamax8']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax8"  type="text" id="sirax8" onKeyUp="hesaplax(),hesapla8(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax8']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur8" id="tur8">
        <?php
        $turdegeri=$vcek['tur8']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix8"  type="text" id="birimfiyatix8"  onkeyup="hesaplax(),hesapla8(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix8']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi8" id="birimi8" onChange="hesaplax(),hesapla8(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi8']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix8']=$vcek['birimfiyatix8']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total8"  type="text" id="total8" value="<?=$bf8=($vcek['birimfiyatix8']*($vcek['sirax8'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax9" type="text" id="aciklamax9" value="<?=$vcek['aciklamax9']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax9"  type="text" id="sirax9" onKeyUp="hesaplax(),hesapla9(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax9']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur9" id="tur9">
        <?php
        $turdegeri=$vcek['tur9']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix9"  type="text" id="birimfiyatix9"  onkeyup="hesaplax(),hesapla9(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix9']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi9" id="birimi9" onChange="hesaplax(),hesapla9(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi9']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix9']=$vcek['birimfiyatix9']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total9"  type="text" id="total9" value="<?=$bf9=($vcek['birimfiyatix9']*($vcek['sirax9'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax10" type="text" id="aciklamax10" value="<?=$vcek['aciklamax10']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax10"  type="text" id="sirax10" onKeyUp="hesaplax(),hesapla10(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax10']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur10" id="tur10">
        <?php
        $turdegeri=$vcek['tur10']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix10"  type="text" id="birimfiyatix10"  onkeyup="hesaplax(),hesapla10(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix10']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi10" id="birimi10" onChange="hesaplax(),hesapla10(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi10']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix10']=$vcek['birimfiyatix10']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total10"  type="text" id="total10" value="<?=$bf10=($vcek['birimfiyatix10']*($vcek['sirax10'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax11" type="text" id="aciklamax11" value="<?=$vcek['aciklamax11']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax11"  type="text" id="sirax11" onKeyUp="hesaplax(),hesapla11(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax11']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur11" id="tur11">
        <?php
        $turdegeri=$vcek['tur11']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix11"  type="text" id="birimfiyatix11"  onkeyup="hesaplax(),hesapla11(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix11']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi11" id="birimi11" onChange="hesaplax(),hesapla11(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi11']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix11']=$vcek['birimfiyatix11']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total11"  type="text" id="total11" value="<?=$bf11=($vcek['birimfiyatix11']*($vcek['sirax11'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax12" type="text" id="aciklamax12" value="<?=$vcek['aciklamax12']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax12"  type="text" id="sirax12" onKeyUp="hesaplax(),hesapla12(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax12']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur12" id="tur12">
        <?php
        $turdegeri=$vcek['tur12']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix12"  type="text" id="birimfiyatix12"  onkeyup="hesaplax(),hesapla12(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix12']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi12" id="birimi12" onChange="hesaplax(),hesapla12(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi12']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix12']=$vcek['birimfiyatix12']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total12"  type="text" id="total12" value="<?=$bf12=($vcek['birimfiyatix12']*($vcek['sirax12'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax13" type="text" id="aciklamax13" value="<?=$vcek['aciklamax13']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax13"  type="text" id="sirax13" onKeyUp="hesaplax(),hesapla13(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax13']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur13" id="tur13">
        <?php
        $turdegeri=$vcek['tur13']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix13"  type="text" id="birimfiyatix13"  onkeyup="hesaplax(),hesapla13(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix13']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi13" id="birimi13" onChange="hesaplax(),hesapla13(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi13']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix13']=$vcek['birimfiyatix13']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total13"  type="text" id="total13" value="<?=$bf13=($vcek['birimfiyatix13']*($vcek['sirax13'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax14" type="text" id="aciklamax14" value="<?=$vcek['aciklamax14']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax14"  type="text" id="sirax14" onKeyUp="hesaplax(),hesapla14(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax14']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur14" id="tur14">
        <?php
        $turdegeri=$vcek['tur14']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix14"  type="text" id="birimfiyatix14"  onkeyup="hesaplax(),hesapla14(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix14']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi14" id="birimi14" onChange="hesaplax(),hesapla14(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi14']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix14']=$vcek['birimfiyatix14']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total14"  type="text" id="total14" value="<?=$bf14=($vcek['birimfiyatix14']*($vcek['sirax14'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax15" type="text" id="aciklamax15" value="<?=$vcek['aciklamax15']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax15"  type="text" id="sirax15" onKeyUp="hesaplax(),hesapla15(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax15']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur15" id="tur15">
        <?php
        $turdegeri=$vcek['tur15']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix15"  type="text" id="birimfiyatix15"  onkeyup="hesaplax(),hesapla15(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix15']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi15" id="birimi15" onChange="hesaplax(),hesapla15(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi15']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix15']=$vcek['birimfiyatix15']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total15"  type="text" id="total15" value="<?=$bf15=($vcek['birimfiyatix15']*($vcek['sirax15'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax16" type="text" id="aciklamax16" value="<?=$vcek['aciklamax16']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax16"  type="text" id="sirax16" onKeyUp="hesaplax(),hesapla16(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax16']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur16" id="tur16">
        <?php
        $turdegeri=$vcek['tur16']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix16"  type="text" id="birimfiyatix16"  onkeyup="hesaplax(),hesapla16(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix16']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi16" id="birimi16" onChange="hesaplax(),hesapla16(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi16']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix16']=$vcek['birimfiyatix16']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total16"  type="text" id="total16" value="<?=$bf16=($vcek['birimfiyatix16']*($vcek['sirax16'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax17" type="text" id="aciklamax17" value="<?=$vcek['aciklamax17']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax17"  type="text" id="sirax17" onKeyUp="hesaplax(),hesapla17(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax17']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur17" id="tur17">
        <?php
        $turdegeri=$vcek['tur17']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix17"  type="text" id="birimfiyatix17"  onkeyup="hesaplax(),hesapla17(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix17']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi17" id="birimi17" onChange="hesaplax(),hesapla17(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi17']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix17']=$vcek['birimfiyatix17']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total17"  type="text" id="total17" value="<?=$bf17=($vcek['birimfiyatix17']*($vcek['sirax17'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax18" type="text" id="aciklamax18" value="<?=$vcek['aciklamax18']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax18"  type="text" id="sirax18" onKeyUp="hesaplax(),hesapla18(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax18']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur18" id="tur18">
        <?php
        $turdegeri=$vcek['tur18']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix18"  type="text" id="birimfiyatix18"  onkeyup="hesaplax(),hesapla18(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix18']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi18" id="birimi18" onChange="hesaplax(),hesapla18(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi18']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix18']=$vcek['birimfiyatix18']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total18"  type="text" id="total18" value="<?=$bf18=($vcek['birimfiyatix18']*($vcek['sirax18'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax19" type="text" id="aciklamax19" value="<?=$vcek['aciklamax19']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax19"  type="text" id="sirax19" onKeyUp="hesaplax(),hesapla19(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax19']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur19" id="tur19">
        <?php
        $turdegeri=$vcek['tur19']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix19"  type="text" id="birimfiyatix19"  onkeyup="hesaplax(),hesapla19(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix19']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi19" id="birimi19" onChange="hesaplax(),hesapla19(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi19']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix19']=$vcek['birimfiyatix19']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total19"  type="text" id="total19" value="<?=$bf19=($vcek['birimfiyatix19']*($vcek['sirax19'])) ;?>"/></td>
    </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax20" type="text" id="aciklamax20" value="<?=$vcek['aciklamax20']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax20"  type="text" id="sirax20" onKeyUp="hesaplax(),hesapla20(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['sirax20']; ?>" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select  style="width:60px;" name="tur20" id="tur20">
        <?php
        $turdegeri=$vcek['tur20']; 
		if($turdegeri==1) echo'<option selected="selected" value="1">Adet</option>';
		else			  echo'<option value="1">Adet</option>';
        if($turdegeri==2) echo'<option selected="selected" value="2">m²</option>';
		else 			  echo '<option value="2">m²</option>';
        if($turdegeri==3) echo'<option selected="selected" value="3">m</option>';
		else 			  echo '<option value="3">m</option>';
		?>
        </select>
    </span></td>
    <td><input   name="birimfiyatix20"  type="text" id="birimfiyatix20"  onkeyup="hesaplax(),hesapla20(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['birimfiyatix20']; ?>" /></td>
    <td class="asdasdasd"><span class="bnmbnmbn">
      <select  style="width:60px;" name="birimi20" id="birimi20" onChange="hesaplax(),hesapla20(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()">
        <?php
        $birimdegeri=$vcek['birimi20']; 
		if($birimdegeri==1) echo'<option selected="selected" value="1">TL</option>';
		else			  echo'<option value="1">TL</option>';
        if($birimdegeri==2) echo'<option selected="selected" value="2">$</option>';
		else 			  echo '<option value="2">$</option>';
		if($birimdegeri==2){$vcek['birimfiyatix20']=$vcek['birimfiyatix20']*$vcek['kur'];}
		?>
        </select>
    </span></td>
    <td><input   name="total20"  type="text" id="total20" value="<?=$bf20=($vcek['birimfiyatix20']*($vcek['sirax20'])) ;?>"/></td>
    </tr>
  <tr>
    <td height="24" colspan="3">Yalnız,
    <label for="yalniz"></label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>$ Kuru</td>
    <td>&nbsp;</td>
    <td><span class="fsdfgsfdsf">
      <input name="kur" type="text" id="kur" onKeyUp="hesaplax(),hesapla(),hesapla2(),hesapla3(),hesapla4(),hesapla5(),hesapla6(),hesapla7(),hesapla8(),hesapla9(),hesapla10(),hesapla11(),hesapla12(),hesapla13(),hesapla14(),hesapla15(),hesapla16(),hesapla17(),hesapla18(),hesapla19(),hesapla20(),hesaplag(),cevir()" onclick="cleard(this.id),hesaplag()" value="<?=$vcek['kur'];?>" size="7" />
    </span></td>
    </tr>
  <tr>
    <td colspan="5"><input   name="yalniz" type="text" id="yalniz" size="56" value="<?=$vcek['yalniz']; ?>"/></td>
    <td><label for="aciklamax3">TOPLAM</label></td>
    <td></td>
    <td><span class="fsdfgsfdsf">
      <input   name="toplam" type="text" id="toplam" value="<?=$vcek['toplam']; ?>"/>
    </span></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="246">&nbsp;</td>
    <td width="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label for="aciklamax3">K.D.V. </label></td>
    <td>&nbsp;</td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" hidden="hidden" name="kdv" type="text" id="kdv" onKeyUp="hesaplag(),cevir()" value=18 size="8" />
      <input  readonly="readonly" name="kdvtoplam" type="text" id="kdvtoplam" onkeyup="hesaplag(),cevir()" value="<?=$vcek['toplam']*$vcek['kdv']/100; ?>" size="8" />
    </span></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label for="aciklamax4"></label>
G. TOPLAM</td>
    <td>&nbsp;</td>
    <td><span class="fsdfgsfdsf">
      <input   name="geneltoplam" type="text" id="geneltoplam" value="<?=$vcek['geneltoplam']; ?>" />
    </span></td>
    </tr>
</table>
<?php } ?>
</form>

</div>
<script language="Javascript1.2">
window.print();
setTimeout(function(){ window.close(); }, 3000);
 </script>


</section>
<!-- GİRİŞ KONTROL -->          
<?php	} ?>