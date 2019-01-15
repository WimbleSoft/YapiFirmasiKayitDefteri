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

 <?php
 $id=$_GET['id'];
 include 'kontrol/veritabani.php';
	$vericek=$connection->query("select * from fatura where id='$id' ")->fetchAll(PDO::FETCH_ASSOC);
	foreach ($vericek as $vcek)
	{
	?>
            
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
.fsdfgsfdsf {text-align: left;
}
</style>

  <section id="content">
  <div>
  <table width="848" border="0">
  <tr>
    <td height="188" colspan="8"><img src="img/logo.png" width="482" height="234" /></td>
  </tr>
  <tr>
    <td width="106">Sayın,</td>
    <td colspan="3" rowspan="5"><label for="sayin"></label>
    <textarea name="sayin" cols="38" rows="8" readonly="readonly" id="sayin" style="resize: none;"><?=$vcek['sayin']; ?></textarea></td>
    <td width="63">&nbsp;</td>
    <td width="146"><span class="xcxcv"><u>İRSALİYELİ FATURA</u></span></td>
    <td width="49">&nbsp;</td>
    <td width="163">&nbsp;</td>
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
    <td colspan="2"><input readonly="readonly" name="duzenlemetarihi" type="text" id="duzenlemetarihi" value="<?=$vcek['duzenlemetarihi']; ?>" /></td>
  </tr>
  <tr>
    <td>Vergi Dairesi</td>
    <td colspan="3"><input readonly="readonly" name="vergidairesi" type="text" id="vergidairesi" value="<?=$vcek['vergidairesi']; ?>" /></td>
    <td>&nbsp;</td>
    <td>Düzenleme Saati</td>
    <td colspan="2"><input readonly="readonly" name="duzenlemesaati" type="text" id="duzenlemesaati" value="<?=$vcek['duzenlemesaati']; ?>" /></td>
  </tr>
  <tr>
    <td>Vergi No </td>
    <td colspan="3"><input readonly="readonly" name="vergino" type="text" id="vergino" value="<?=$vcek['vergino']; ?>" /></td>
    <td>&nbsp;</td>
    <td>Fiili Sevk Tarihi</td>
    <td colspan="2"><input readonly="readonly" name="fiilisevktarihi" type="text" id="fiilisevktarihi" value="<?=$vcek['fiilisevktarihi']; ?>" /></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">MALIN CİNSİ</div></td>
    <td width="63"><div align="center">MİKTAR</div></td>
    <td><div align="center">TÜR</div></td>
    <td><div align="center">BİRİM FİYATI</div></td>
    <td>BİRİMİ</td>
    <td><div align="center">TUTARI</div></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax1" type="text" id="aciklamax1" value="<?=$vcek['aciklamax1']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax1"  type="text" id="sirax1" onkeyup="hesaplax(),hesapla(),hesaplag(),cevir()" value="<?=$vcek['sirax1']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur1" type="text" id="tur1" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur1']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix1"  type="text" id="birimfiyatix1"  onkeyup="hesaplax(),hesapla(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix1']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi1" type="text" id="birimi1" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi1']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix1']=$vcek['birimfiyatix1']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total1"  type="text" id="total1" value="<?=$bf1=($vcek['birimfiyatix1']*($vcek['sirax1'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax2" type="text" id="aciklamax2" value="<?=$vcek['aciklamax2']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax2"  type="text" id="sirax2" onkeyup="hesaplax(),hesapla2(),hesaplag(),cevir()" value="<?=$vcek['sirax2']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur2" type="text" id="tur2" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur2']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix2"  type="text" id="birimfiyatix2"  onkeyup="hesaplax(),hesapla2(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix2']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi2" type="text" id="birimi2" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi2']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix2']=$vcek['birimfiyatix2']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total2"  type="text" id="total2" value="<?=$bf2=($vcek['birimfiyatix2']*($vcek['sirax2'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax3" type="text" id="aciklamax3" value="<?=$vcek['aciklamax3']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax3"  type="text" id="sirax3" onkeyup="hesaplax(),hesapla3(),hesaplag(),cevir()" value="<?=$vcek['sirax3']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur3" type="text" id="tur3" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur3']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix3"  type="text" id="birimfiyatix3"  onkeyup="hesaplax(),hesapla3(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix3']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi3" type="text" id="birimi3" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi3']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix3']=$vcek['birimfiyatix3']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total3"  type="text" id="total3" value="<?=$bf3=($vcek['birimfiyatix3']*($vcek['sirax3'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax4" type="text" id="aciklamax4" value="<?=$vcek['aciklamax4']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax4"  type="text" id="sirax4" onkeyup="hesaplax(),hesapla4(),hesaplag(),cevir()" value="<?=$vcek['sirax4']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur4" type="text" id="tur4" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur4']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix4"  type="text" id="birimfiyatix4"  onkeyup="hesaplax(),hesapla4(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix4']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi4" type="text" id="birimi4" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi4']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix4']=$vcek['birimfiyatix4']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total4"  type="text" id="total4" value="<?=$bf4=($vcek['birimfiyatix4']*($vcek['sirax4'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax5" type="text" id="aciklamax5" value="<?=$vcek['aciklamax5']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax5"  type="text" id="sirax5" onkeyup="hesaplax(),hesapla5(),hesaplag(),cevir()" value="<?=$vcek['sirax5']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur5" type="text" id="tur5" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur5']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix5"  type="text" id="birimfiyatix5"  onkeyup="hesaplax(),hesapla5(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix5']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi5" type="text" id="birimi5" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi5']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix5']=$vcek['birimfiyatix5']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total5"  type="text" id="total5" value="<?=$bf5=($vcek['birimfiyatix5']*($vcek['sirax5']));?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax6" type="text" id="aciklamax6" value="<?=$vcek['aciklamax6']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax6"  type="text" id="sirax6" onkeyup="hesaplax(),hesapla6(),hesaplag(),cevir()" value="<?=$vcek['sirax6']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur6" type="text" id="tur6" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur6']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix6"  type="text" id="birimfiyatix6"  onkeyup="hesaplax(),hesapla6(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix6']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi6" type="text" id="birimi6" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi6']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix6']=$vcek['birimfiyatix6']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total6"  type="text" id="total6" value=" <?=$bf6=($vcek['birimfiyatix6']*($vcek['sirax6'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax7" type="text" id="aciklamax7" value="<?=$vcek['aciklamax7']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax7"  type="text" id="sirax7" onkeyup="hesaplax(),hesapla7(),hesaplag(),cevir()" value="<?=$vcek['sirax7']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur7" type="text" id="tur7" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur7']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix7"  type="text" id="birimfiyatix7"  onkeyup="hesaplax(),hesapla7(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix7']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi7" type="text" id="birimi7" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi7']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix7']=$vcek['birimfiyatix7']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total7"  type="text" id="total7" value="<?=$bf7=($vcek['birimfiyatix7']*($vcek['sirax7'])) ;?>"/></td>
  </tr>
  <tr>

    <td colspan="3"><input readonly="readonly" name="aciklamax8" type="text" id="aciklamax8" value="<?=$vcek['aciklamax8']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax8"  type="text" id="sirax8" onkeyup="hesaplax(),hesapla8(),hesaplag(),cevir()" value="<?=$vcek['sirax8']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur8" type="text" id="tur8" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur8']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix8"  type="text" id="birimfiyatix8"  onkeyup="hesaplax(),hesapla8(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix8']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi8" type="text" id="birimi8" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi8']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix8']=$vcek['birimfiyatix8']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total8"  type="text" id="total8" value="<?=$bf8=($vcek['birimfiyatix8']*($vcek['sirax8'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax9" type="text" id="aciklamax9" value="<?=$vcek['aciklamax9']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax9"  type="text" id="sirax9" onkeyup="hesaplax(),hesapla9(),hesaplag(),cevir()" value="<?=$vcek['sirax9']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur9" type="text" id="tur9" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur9']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix9"  type="text" id="birimfiyatix9"  onkeyup="hesaplax(),hesapla9(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix9']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi9" type="text" id="birimi9" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi9']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix9']=$vcek['birimfiyatix9']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total9"  type="text" id="total9" value="<?=$bf9=($vcek['birimfiyatix9']*($vcek['sirax9'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax10" type="text" id="aciklamax10" value="<?=$vcek['aciklamax10']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax10"  type="text" id="sirax10" onkeyup="hesaplax(),hesapla10(),hesaplag(),cevir()" value="<?=$vcek['sirax10']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur10" type="text" id="tur10" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur10']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix10"  type="text" id="birimfiyatix10"  onkeyup="hesaplax(),hesapla10(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix10']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi10" type="text" id="birimi10" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi10']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix10']=$vcek['birimfiyatix10']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total10"  type="text" id="total10" value="<?=$bf10=($vcek['birimfiyatix10']*($vcek['sirax10'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax11" type="text" id="aciklamax11" value="<?=$vcek['aciklamax11']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax11"  type="text" id="sirax11" onkeyup="hesaplax(),hesapla11(),hesaplag(),cevir()" value="<?=$vcek['sirax11']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur11" type="text" id="tur11" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur11']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix11"  type="text" id="birimfiyatix11"  onkeyup="hesaplax(),hesapla11(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix11']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi11" type="text" id="birimi11" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi11']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix11']=$vcek['birimfiyatix11']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total11"  type="text" id="total11" value="<?=$bf11=($vcek['birimfiyatix11']*($vcek['sirax11'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax12" type="text" id="aciklamax12" value="<?=$vcek['aciklamax12']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax12"  type="text" id="sirax12" onkeyup="hesaplax(),hesapla12(),hesaplag(),cevir()" value="<?=$vcek['sirax12']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur12" type="text" id="tur12" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur12']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix12"  type="text" id="birimfiyatix12"  onkeyup="hesaplax(),hesapla12(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix12']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi12" type="text" id="birimi12" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi12']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix12']=$vcek['birimfiyatix12']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total12"  type="text" id="total12" value="<?=$bf12=($vcek['birimfiyatix12']*($vcek['sirax12'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax13" type="text" id="aciklamax13" value="<?=$vcek['aciklamax13']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax13"  type="text" id="sirax13" onkeyup="hesaplax(),hesapla13(),hesaplag(),cevir()" value="<?=$vcek['sirax13']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur13" type="text" id="tur13" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur13']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix13"  type="text" id="birimfiyatix13"  onkeyup="hesaplax(),hesapla13(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix13']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi13" type="text" id="birimi13" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi13']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix13']=$vcek['birimfiyatix13']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total13"  type="text" id="total13" value="<?=$bf13=($vcek['birimfiyatix13']*($vcek['sirax13'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax14" type="text" id="aciklamax14" value="<?=$vcek['aciklamax14']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax14"  type="text" id="sirax14" onkeyup="hesaplax(),hesapla14(),hesaplag(),cevir()" value="<?=$vcek['sirax14']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur14" type="text" id="tur14" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur14']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix14"  type="text" id="birimfiyatix14"  onkeyup="hesaplax(),hesapla14(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix14']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi14" type="text" id="birimi14" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi14']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix14']=$vcek['birimfiyatix14']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total14"  type="text" id="total14" value="<?=$bf14=($vcek['birimfiyatix14']*($vcek['sirax14'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax15" type="text" id="aciklamax15" value="<?=$vcek['aciklamax15']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax15"  type="text" id="sirax15" onkeyup="hesaplax(),hesapla15(),hesaplag(),cevir()" value="<?=$vcek['sirax15']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur15" type="text" id="tur15" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur15']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix15"  type="text" id="birimfiyatix15"  onkeyup="hesaplax(),hesapla15(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix15']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi15" type="text" id="birimi15" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi15']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix15']=$vcek['birimfiyatix15']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total15"  type="text" id="total15" value="<?=$bf15=($vcek['birimfiyatix15']*($vcek['sirax15'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax16" type="text" id="aciklamax16" value="<?=$vcek['aciklamax16']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax16"  type="text" id="sirax16" onkeyup="hesaplax(),hesapla16(),hesaplag(),cevir()" value="<?=$vcek['sirax16']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur16" type="text" id="tur16" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur16']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix16"  type="text" id="birimfiyatix16"  onkeyup="hesaplax(),hesapla16(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix16']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi16" type="text" id="birimi16" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi16']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix16']=$vcek['birimfiyatix16']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total16"  type="text" id="total16" value="<?=$bf16=($vcek['birimfiyatix16']*($vcek['sirax16'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax17" type="text" id="aciklamax17" value="<?=$vcek['aciklamax17']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax17"  type="text" id="sirax17" onkeyup="hesaplax(),hesapla17(),hesaplag(),cevir()" value="<?=$vcek['sirax17']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur17" type="text" id="tur17" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur17']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix17"  type="text" id="birimfiyatix17"  onkeyup="hesaplax(),hesapla17(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix17']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi17" type="text" id="birimi17" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi17']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix17']=$vcek['birimfiyatix17']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total17"  type="text" id="total17" value="<?=$bf17=($vcek['birimfiyatix17']*($vcek['sirax17'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax18" type="text" id="aciklamax18" value="<?=$vcek['aciklamax18']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax18"  type="text" id="sirax18" onkeyup="hesaplax(),hesapla18(),hesaplag(),cevir()" value="<?=$vcek['sirax18']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur18" type="text" id="tur18" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur18']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix18"  type="text" id="birimfiyatix18"  onkeyup="hesaplax(),hesapla18(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix18']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi18" type="text" id="birimi18" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi18']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix18']=$vcek['birimfiyatix18']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total18"  type="text" id="total18" value="<?=$bf18=($vcek['birimfiyatix18']*($vcek['sirax18'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax19" type="text" id="aciklamax19" value="<?=$vcek['aciklamax19']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax19"  type="text" id="sirax19" onkeyup="hesaplax(),hesapla19(),hesaplag(),cevir()" value="<?=$vcek['sirax19']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur19" type="text" id="tur19" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur19']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix19"  type="text" id="birimfiyatix19"  onkeyup="hesaplax(),hesapla19(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix19']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi19" type="text" id="birimi19" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi19']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix19']=$vcek['birimfiyatix19']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total19"  type="text" id="total19" value="<?=$bf19=($vcek['birimfiyatix19']*($vcek['sirax19'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><input readonly="readonly" name="aciklamax20" type="text" id="aciklamax20" value="<?=$vcek['aciklamax20']; ?>" size="56" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="sirax20"  type="text" id="sirax20" onkeyup="hesaplax(),hesapla20(),hesaplag(),cevir()" value="<?=$vcek['sirax20']; ?>" size="10" />
    </span></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="tur20" type="text" id="tur20" onkeyup="hesaplag(),cevir()" value="<?php $turdegeri=$vcek['tur20']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>" size="10" />
    </span></td>
    <td><input readonly="readonly" name="birimfiyatix20"  type="text" id="birimfiyatix20"  onkeyup="hesaplax(),hesapla20(),hesaplag(),cevir()" value="<?=$vcek['birimfiyatix20']; ?>" /></td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="birimi20" type="text" id="birimi20" onkeyup="hesaplag(),cevir()" value="<?php $birimdegeri=$vcek['birimi20']; if($birimdegeri==1)echo 'TL';else if($birimdegeri==2){echo '$';$vcek['birimfiyatix20']=$vcek['birimfiyatix20']*$vcek['kur'];}?>" size="8" />
    </span></td>
    <td><input readonly="readonly" name="total20"  type="text" id="total20" value="<?=$bf20=($vcek['birimfiyatix20']*($vcek['sirax20'])) ;?>"/></td>
  </tr>
  <tr>
    <td colspan="3">Yalnız,
    <label for="yalniz"></label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td> $ KURU</td>
    <td>&nbsp;</td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="kur" type="text" id="kur"  value="<?=$vcek['kur']; ?>" size="8" />
    </span></td>
  </tr>
  <tr>
    <td colspan="5"><input readonly="readonly" name="yalniz" type="text" id="yalniz" size="56" value="<?=$vcek['yalniz']; ?>"/></td>
    <td><label for="aciklamax3">TOPLAM</label></td>
    <td>&nbsp;</td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="toplam" type="text" id="toplam" value="<?=$vcek['toplam']; ?>"/>
    </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="154">&nbsp;</td>
    <td width="70">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label for="aciklamax3">K.D.V. </label></td>
    <td>&nbsp;</td>
    <td><span class="fsdfgsfdsf">
      <input readonly="readonly" name="kdv" type="text" hidden="hidden" id="kdv" onkeyup="hesaplag(),cevir()" value="<?=$vcek['kdv']; ?>" size="8" />
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
      <input readonly="readonly" name="geneltoplam" type="text" id="geneltoplam" value="<?=$vcek['geneltoplam']; ?>" />
    </span></td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><input type="submit" name="yazdir" id="yazdir"  onclick="window.open('fatura_yazdir.php?id=<?=$id;?>','_blank')" value="Fatura Yazdır" class="button primary submit"/>
    				<input  type="button" name="duzenle" onclick="window.open('fatura_duzenle.php?id=<?=$id;?>','_self')"  id="duzenle" value="Düzenle"  class="button primary submit"/>
                    <input type="submit" name="kapat" id="kapat" value="Kapat" onclick="window.close(this)" class="button primary submit"/>
	</td>
    </tr>
</table>
</div>
</section>


<?php } ?>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>