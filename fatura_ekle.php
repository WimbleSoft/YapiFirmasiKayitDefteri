<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FATURA PROGRAMI</title>

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
<?php //include("kafa.php") ?>
<?php //include("menu.php") ?>
<?php include("kontrol/veritabani.php") ?>



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


<script>
function cleard(id)
{
	document.getElementById(id).value="";
}
function hesaplag(){
var kuru1=1,kuru2=1,kuru3=1,kuru4=1,kuru5=1,kuru6=1,kuru7=1,kuru8=1,kuru9=1,kuru10=1,kuru11=1,kuru12=1,kuru13=1,kuru14=1,kuru15=1,kuru16=1,kuru17=1,kuru18=1,kuru19=1,kuru20=1;

	if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi1").value==2)
		{
			kuru1=document.getElementById("kur").value;
		}
		else kuru1=1;
		if(document.getElementById("birimi2").value==2)
		{
			kuru2=document.getElementById("kur").value;
		}
		else kuru2=1;
		if(document.getElementById("birimi3").value==2)
		{
			kuru3=document.getElementById("kur").value;
		}
		else kuru3=1;
		if(document.getElementById("birimi4").value==2)
		{
			kuru4=document.getElementById("kur").value;
		}
		else kuru4=1;
		if(document.getElementById("birimi5").value==2)
		{
			kuru5=document.getElementById("kur").value;
		}
		else kuru5=1;
		if(document.getElementById("birimi6").value==2)
		{
			kuru6=document.getElementById("kur").value;
		}
		else kuru6=1;
		if(document.getElementById("birimi7").value==2)
		{
			kuru7=document.getElementById("kur").value;
		}
		else kuru7=1;
		if(document.getElementById("birimi8").value==2)
		{
			kuru8=document.getElementById("kur").value;
		}
		else kuru8=1;
		if(document.getElementById("birimi9").value==2)
		{
			kuru9=document.getElementById("kur").value;
		}
		else kuru9=1;
		if(document.getElementById("birimi10").value==2)
		{
			kuru10=document.getElementById("kur").value;
		}
		else kuru10=1;
		if(document.getElementById("birimi11").value==2)
		{
			kuru11=document.getElementById("kur").value;
		}
		else kuru11=1;
		if(document.getElementById("birimi12").value==2)
		{
			kuru12=document.getElementById("kur").value;
		}
		else kuru12=1;
		if(document.getElementById("birimi13").value==2)
		{
			kuru13=document.getElementById("kur").value;
		}
		else kuru13=1;
		if(document.getElementById("birimi14").value==2)
		{
			kuru14=document.getElementById("kur").value;
		}
		else kuru14=1;
		if(document.getElementById("birimi15").value==2)
		{
			kuru15=document.getElementById("kur").value;
		}
		else kuru15=1;
		if(document.getElementById("birimi16").value==2)
		{
			kuru16=document.getElementById("kur").value;
		}
		else kuru16=1;
		if(document.getElementById("birimi17").value==2)
		{
			kuru17=document.getElementById("kur").value;
		}
		else kuru17=1;
		if(document.getElementById("birimi18").value==2)
		{
			kuru18=document.getElementById("kur").value;
		}
		else kuru18=1;
		if(document.getElementById("birimi19").value==2)
		{
			kuru19=document.getElementById("kur").value;
		}
		else kuru19=1;
		if(document.getElementById("birimi20").value==2)
		{
			kuru20=document.getElementById("kur").value;
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
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi1").value==2)
		{
			kuru1=document.getElementById("kur").value;
		}
	}
document.getElementById("total1").value=kuru1 * document.getElementById("birimfiyatix1").value * document.getElementById("sirax1").value;}

function hesapla2(){
var kuru2=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi2").value==2)
		{
			kuru2=document.getElementById("kur").value;
		}
	}
document.getElementById("total2").value=kuru2 * document.getElementById("birimfiyatix2").value * document.getElementById("sirax2").value;}

function hesapla3(){
var kuru3=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi3").value==2)
		{
			kuru3=document.getElementById("kur").value;
		}
	}
document.getElementById("total3").value=kuru3 * document.getElementById("birimfiyatix3").value * document.getElementById("sirax3").value;}

function hesapla4(){
	var kuru4=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi4").value==2)
		{
			kuru4=document.getElementById("kur").value;
		}
	}
document.getElementById("total4").value=kuru4 * document.getElementById("birimfiyatix4").value * document.getElementById("sirax4").value;}

function hesapla5(){
	var kuru5=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi5").value==2)
		{
			kuru5=document.getElementById("kur").value;
		}
	}
document.getElementById("total5").value=kuru5 * document.getElementById("birimfiyatix5").value * document.getElementById("sirax5").value;}

function hesapla6(){
	var kuru6=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi6").value==2)
		{
			kuru6=document.getElementById("kur").value;
		}
	}
document.getElementById("total6").value=kuru6 * document.getElementById("birimfiyatix6").value * document.getElementById("sirax6").value;}

function hesapla7(){
	var kuru7=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi7").value==2)
		{
			kuru7=document.getElementById("kur").value;
		}
	}
document.getElementById("total7").value=kuru7 * document.getElementById("birimfiyatix7").value * document.getElementById("sirax7").value;}

function hesapla8(){
	var kuru8=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi8").value==2)
		{
			kuru8=document.getElementById("kur").value;
		}
	}
document.getElementById("total8").value=kuru8 * document.getElementById("birimfiyatix8").value * document.getElementById("sirax8").value;}



function hesapla9(){
	var kuru9=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi9").value==2)
		{
			kuru9=document.getElementById("kur").value;
		}
	}
document.getElementById("total9").value=kuru9 * document.getElementById("birimfiyatix9").value * document.getElementById("sirax9").value;}

function hesapla10(){
	var kuru10=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi10").value==2)
		{
			kuru10=document.getElementById("kur").value;
		}
	}
document.getElementById("total10").value=kuru10 * document.getElementById("birimfiyatix10").value * document.getElementById("sirax10").value;}

function hesapla11(){
	var kuru11=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi11").value==2)
		{
			kuru11=document.getElementById("kur").value;
		}
	}
document.getElementById("total11").value=kuru11 * document.getElementById("birimfiyatix11").value * document.getElementById("sirax11").value;}

function hesapla12(){
var kuru12=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi12").value==2)
		{
			kuru12=document.getElementById("kur").value;
		}
	}
document.getElementById("total12").value=kuru12 * document.getElementById("birimfiyatix12").value * document.getElementById("sirax12").value;}

function hesapla13(){
var kuru13=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi13").value==2)
		{
			kuru13=document.getElementById("kur").value;
		}
	}
document.getElementById("total13").value=kuru13 * document.getElementById("birimfiyatix13").value * document.getElementById("sirax13").value;}

function hesapla14(){
	var kuru14=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi14").value==2)
		{
			kuru14=document.getElementById("kur").value;
		}
	}
document.getElementById("total14").value=kuru14 * document.getElementById("birimfiyatix14").value * document.getElementById("sirax14").value;}

function hesapla15(){
	var kuru15=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi15").value==2)
		{
			kuru15=document.getElementById("kur").value;
		}
	}
document.getElementById("total15").value=kuru15 * document.getElementById("birimfiyatix15").value * document.getElementById("sirax15").value;}

function hesapla16(){
	var kuru16=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi16").value==2)
		{
			kuru16=document.getElementById("kur").value;
		}
	}
document.getElementById("total16").value=kuru16 * document.getElementById("birimfiyatix16").value * document.getElementById("sirax16").value;}

function hesapla17(){
	var kuru17=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi17").value==2)
		{
			kuru17=document.getElementById("kur").value;
		}
	}
document.getElementById("total17").value=kuru17 * document.getElementById("birimfiyatix17").value * document.getElementById("sirax17").value;}

function hesapla18(){
var kuru18=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi18").value==2)
		{
			kuru18=document.getElementById("kur").value;
		}
	}
document.getElementById("total18").value=kuru18 * document.getElementById("birimfiyatix18").value * document.getElementById("sirax18").value;}

function hesapla19(){
var kuru19=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi19").value==2)
		{
			kuru19=document.getElementById("kur").value;
		}
	}
document.getElementById("total19").value=kuru19 * document.getElementById("birimfiyatix19").value * document.getElementById("sirax19").value;}

function hesapla20(){
var kuru20=1;
if(document.getElementById("kur").value)
	{
		if(document.getElementById("birimi20").value==2)
		{
			kuru20=document.getElementById("kur").value;
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

</head>

<body> 

            
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

  <section id="content">
  <div>
  <form action="fatura_ekle_kontrol.php" method="post" enctype="multipart/form-data">
  <table width="835" border="0">
  <tr>
    <td height="188" colspan="8"><img src="img/logo.png" width="482" height="234" /></td>
  </tr>
  <tr>
    <td width="106">Sayın,</td>
    <td colspan="3" rowspan="5"><label for="sayin"></label>
    <textarea name="sayin" cols="38" rows="8"   id="sayin" style="resize: none;"></textarea></td>
    <td width="66">&nbsp;</td>
    <td width="145"><span class="xcxcv"><u>İRSALİYELİ FATURA</u></span></td>
    <td width="54">&nbsp;</td>
    <td width="145">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="xcxcv">Seri No:
        <label for="seri2"></label>
    </span></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="xcxcv">Sıra No: </span></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td>&nbsp;</td>
    <td>Düzenleme Tarihi</td>
    <td colspan="2"><input   name="duzenlemetarihi" type="text" id="duzenlemetarihi" value="<?=$tarih = date("Y-m-d");?>" /></td>
  </tr>
  <tr>
    <td>Vergi Dairesi</td>
    <td colspan="3"><input   name="vergidairesi" type="text" id="vergidairesi" /></td>
    <td>&nbsp;</td>
    <td>Düzenleme Saati</td>
    <td colspan="2"><input   name="duzenlemesaati" type="text" id="duzenlemesaati"  value="<?=$tarih = date("H:i");?>"/></td>
  </tr>
  <tr>
    <td>Vergi No </td>
    <td colspan="3"><input   name="vergino" type="text" id="vergino" /></td>
    <td>&nbsp;</td>
    <td>Fiili Sevk Tarihi</td>
    <td colspan="2"><input   name="fiilisevktarihi" type="text" id="fiilisevktarihi" value="<?=$tarih = date("Y-m-d");?>" /></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">MALIN CİNSİ</div></td>
    <td width="62"><div align="center">MİKTAR</div></td>
    <td><div align="center">TÜR</div></td>
    <td><div align="center">BİRİM FİYATI</div></td>
    <td>BİRİMİ</td>
    <td><div align="center">TUTARI</div></td>
  </tr>
  <tr>
    <td height="24" colspan="3"><input   name="aciklamax1" type="text" id="aciklamax1"size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax1"  type="text" id="sirax1" onKeyUp="hesaplax(),hesapla(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur1" id="tur1">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix1"  type="text" id="birimfiyatix1"  onkeyup="hesaplax(),hesapla(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi1" id="birimi1" onChange="hesaplax(),hesapla(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total1"  type="text" id="total1" /></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax2" type="text" id="aciklamax2"  size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax2"  type="text" id="sirax2" onKeyUp="hesaplax(),hesapla2(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur2" id="tur2">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix2"  type="text" id="birimfiyatix2"  onkeyup="hesaplax(),hesapla2(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()" /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi2" id="birimi2" onChange="hesaplax(),hesapla2(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total2"  type="text" id="total2" /></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax3" type="text" id="aciklamax3"  size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax3"  type="text" id="sirax3" onKeyUp="hesaplax(),hesapla3(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur3" id="tur3">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix3"  type="text" id="birimfiyatix3"  onkeyup="hesaplax(),hesapla3(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi3" id="birimi3" onChange="hesaplax(),hesapla3(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total3"  type="text" id="total3" /></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax4" type="text" id="aciklamax4"  size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax4"  type="text" id="sirax4" onKeyUp="hesaplax(),hesapla4(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur4" id="tur4">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix4"  type="text" id="birimfiyatix4"  onkeyup="hesaplax(),hesapla4(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()" /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi4" id="birimi4" onChange="hesaplax(),hesapla4(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total4"  type="text" id="total4" /></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax5" type="text" id="aciklamax5" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax5"  type="text" id="sirax5" onKeyUp="hesaplax(),hesapla5(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur5" id="tur5">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix5"  type="text" id="birimfiyatix5"  onkeyup="hesaplax(),hesapla5(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi5" id="birimi5" onChange="hesaplax(),hesapla5(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total5"  type="text" id="total5" /></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax6" type="text" id="aciklamax6"  size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax6"  type="text" id="sirax6" onKeyUp="hesaplax(),hesapla6(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur6" id="tur6">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix6"  type="text" id="birimfiyatix6"  onkeyup="hesaplax(),hesapla6(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi6" id="birimi6" onChange="hesaplax(),hesapla6(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total6"  type="text" id="total6" /></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax7" type="text" id="aciklamax7"  size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax7"  type="text" id="sirax7" onKeyUp="hesaplax(),hesapla7(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur7" id="tur7">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix7"  type="text" id="birimfiyatix7"  onkeyup="hesaplax(),hesapla7(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()" /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi7" id="birimi7" onChange="hesaplax(),hesapla7(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total7"  type="text" id="total7" /></td>
  </tr>
  <tr>

    <td colspan="3"><input   name="aciklamax8" type="text" id="aciklamax8"  size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax8"  type="text" id="sirax8" onKeyUp="hesaplax(),hesapla8(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur8" id="tur8">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix8"  type="text" id="birimfiyatix8"  onkeyup="hesaplax(),hesapla8(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi8" id="birimi8" onChange="hesaplax(),hesapla8(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total8"  type="text" id="total8" /></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax9" type="text" id="aciklamax9"  size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax9"  type="text" id="sirax9" onKeyUp="hesaplax(),hesapla9(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur9" id="tur9">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix9"  type="text" id="birimfiyatix9"  onkeyup="hesaplax(),hesapla9(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()" /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi9" id="birimi9" onChange="hesaplax(),hesapla9(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total9"  type="text" id="total9"/></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax10" type="text" id="aciklamax10" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax10"  type="text" id="sirax10" onKeyUp="hesaplax(),hesapla10(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur10" id="tur10">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix10"  type="text" id="birimfiyatix10"  onkeyup="hesaplax(),hesapla10(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi10" id="birimi10" onChange="hesaplax(),hesapla10(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total10"  type="text" id="total10" /></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax11" type="text" id="aciklamax11" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax11"  type="text" id="sirax11" onKeyUp="hesaplax(),hesapla11(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur11" id="tur11">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix11"  type="text" id="birimfiyatix11"  onkeyup="hesaplax(),hesapla11(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi11" id="birimi11" onChange="hesaplax(),hesapla11(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total11"  type="text" id="total11" /></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax12" type="text" id="aciklamax12"  size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax12"  type="text" id="sirax12" onKeyUp="hesaplax(),hesapla12(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur12" id="tur12">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix12"  type="text" id="birimfiyatix12"  onkeyup="hesaplax(),hesapla12(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()" /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi12" id="birimi12" onChange="hesaplax(),hesapla12(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total12"  type="text" id="total12" /></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax13" type="text" id="aciklamax13"  size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax13"  type="text" id="sirax13" onKeyUp="hesaplax(),hesapla13(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur13" id="tur13">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix13"  type="text" id="birimfiyatix13"  onkeyup="hesaplax(),hesapla13(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()" /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi13" id="birimi13" onChange="hesaplax(),hesapla13(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total13"  type="text" id="total13" /></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax14" type="text" id="aciklamax14"  size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax14"  type="text" id="sirax14" onKeyUp="hesaplax(),hesapla14(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()" size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur14" id="tur14">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix14"  type="text" id="birimfiyatix14"  onkeyup="hesaplax(),hesapla14(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()" /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi14" id="birimi14" onChange="hesaplax(),hesapla14(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total14"  type="text" id="total14" /></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax15" type="text" id="aciklamax15" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax15"  type="text" id="sirax15" onKeyUp="hesaplax(),hesapla15(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur15" id="tur15">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix15"  type="text" id="birimfiyatix15"  onkeyup="hesaplax(),hesapla15(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi15" id="birimi15" onChange="hesaplax(),hesapla15(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total15"  type="text" id="total15" /></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax16" type="text" id="aciklamax16"  size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax16"  type="text" id="sirax16" onKeyUp="hesaplax(),hesapla16(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur16" id="tur16">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix16"  type="text" id="birimfiyatix16"  onkeyup="hesaplax(),hesapla16(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi16" id="birimi16" onChange="hesaplax(),hesapla16(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total16"  type="text" id="total16" /></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax17" type="text" id="aciklamax17"  size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax17"  type="text" id="sirax17" onKeyUp="hesaplax(),hesapla17(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur17" id="tur17">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix17"  type="text" id="birimfiyatix17"  onkeyup="hesaplax(),hesapla17(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()" /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi17" id="birimi17" onChange="hesaplax(),hesapla17(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total17"  type="text" id="total17"/></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax18" type="text" id="aciklamax18"  size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax18"  type="text" id="sirax18" onKeyUp="hesaplax(),hesapla18(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur18" id="tur18">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix18"  type="text" id="birimfiyatix18"  onkeyup="hesaplax(),hesapla18(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi18" id="birimi18" onChange="hesaplax(),hesapla18(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total18"  type="text" id="total18" /></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax19" type="text" id="aciklamax19" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax19"  type="text" id="sirax19" onKeyUp="hesaplax(),hesapla19(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur19" id="tur19">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix19"  type="text" id="birimfiyatix19"  onkeyup="hesaplax(),hesapla19(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi19" id="birimi19" onChange="hesaplax(),hesapla19(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total19"  type="text" id="total19" /></td>
  </tr>
  <tr>
    <td colspan="3"><input   name="aciklamax20" type="text" id="aciklamax20"  size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input   name="sirax20"  type="text" id="sirax20" onKeyUp="hesaplax(),hesapla20(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  size="10" />
    </span></td>
    <td><span class="bnmbnmbn">
      <select name="tur20" id="tur20">
        <option value="1">Adet</option>
        <option value="2">m²</option>
        <option value="3">m</option>
      </select>
    </span></td>
    <td><input   name="birimfiyatix20"  type="text" id="birimfiyatix20"  onkeyup="hesaplax(),hesapla20(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()"  /></td>
    <td><span class="bnmbnmbn">
      <select name="birimi20" id="birimi20" onChange="hesaplax(),hesapla20(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()">
        <option value="1">TL</option>
        <option value="2">$</option>
      </select>
    </span></td>
    <td><input   name="total20"  type="text" id="total20" /></td>
  </tr>
  <tr>
    <td colspan="3">Yalnız,
    <label for="yalniz"></label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>$ Kuru</td>
    <td>&nbsp;</td>
    <td><span class="fsdfgsfdsf">
      <input name="kur" type="text" id="kur" onKeyUp="hesaplax(),hesapla(),hesapla2(),hesapla3(),hesapla4(),hesapla5(),hesapla6(),hesapla7(),hesapla8(),hesapla9(),hesapla10(),hesapla11(),hesapla12(),hesapla13(),hesapla14(),hesapla15(),hesapla16(),hesapla17(),hesapla18(),hesapla19(),hesapla20(),hesaplag(),cevir()" onclick="cleard(this.id),toplamodemehesapla()" size="7" />
    </span></td>
  </tr>
  <tr>
    <td colspan="5"><input  readonly="readonly" name="yalniz" type="text" id="yalniz" size="56" /></td>
    <td><label for="aciklamax3">TOPLAM</label></td>
    <td>&nbsp;</td>
    <td><span class="fsdfgsfdsf">
      <input   name="toplam" type="text" id="toplam" />
    </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="158">&nbsp;</td>
    <td width="65">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label for="aciklamax3">K.D.V.  </label></td>
    <td>&nbsp;</td>
    <td><span class="fsdfgsfdsf">
      <input readonly  name="kdv" type="text" id="kdv" hidden="hidden" onKeyUp="hesaplag(),cevir()"size="8" value=18 />
      <input  readonly="readonly" name="kdvtoplam" type="text" id="kdvtoplam" onKeyUp="hesaplag(),cevir()" size="8" />
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
      <input   name="geneltoplam" type="text" id="geneltoplam"  />
    </span></td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><input type="submit" name="kaydet" id="kaydet" value="Faturayı Oluştur" class="button primary submit"/></td>
    </tr>
</table>
</form>
</div>
</section>



<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>