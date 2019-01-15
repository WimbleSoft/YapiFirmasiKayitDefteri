<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
.displaynone {
	display: none;
}
.asdasdfdsfsdfsdfsdf {
	font-family: "Courier New", Courier, monospace;
}
.cbc {
	text-align: left;
}
</style>

  <section id="content">
  <div>
  <table width="798" height="1113" border="0">
  <tr>
    <td height="161" colspan="8"></td>
  </tr>
  <tr>
    <td width="90">Sayın,</td>
    <td colspan="3" rowspan="5" class="cbc"><label for="sayin"></label>
    <?=nl2br($vcek['sayin']); ?></td>
    <td width="70">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><span class="xcxcv"><u>İRSALİYELİ FATURA</u></span></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="55">&nbsp;</td>
    <td><span class="xcxcv">Seri No:
        <label for="seri2"></label>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="xcxcv">Sıra No: </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="140">&nbsp;</td>
    <td width="79">&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Düzenleme Tarihi</td>
    <td><?=$vcek['duzenlemetarihi']; ?></td>
  </tr>
  <tr>
    <td>Vergi Dairesi</td>
    <td colspan="3"><?=$vcek['vergidairesi']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Düzenleme Saati</td>
    <td><?=$vcek['duzenlemesaati']; ?></td>
  </tr>
  <tr>
    <td height="21">Vergi No </td>
    <td colspan="3"><?=$vcek['vergino']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Fiili Sevk Tarihi</td>
    <td><?=$vcek['fiilisevktarihi']; ?></td>
  </tr>
  <tr>
    <td colspan="8">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="3"><div align="left">MALIN CİNSİ</div></td>
    <td width="82"><div align="left">MİKTAR</div></td>
    <td><div align="right">TÜR</div></td>
    <td class="displaynone"><div align="left"></div></td>
    <td><div align="left">BİRİM FİYATI</div></td>
    <td><div align="left">TUTARI</div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax1'];?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax1']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur1']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi1']; if($birimdegeri==2){$vcek['birimfiyatix1']=$vcek['birimfiyatix1']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix1']; ?></td>
    <td><div align="left">
      <?=$bf1=($vcek['birimfiyatix1']*($vcek['sirax1'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax2']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax2']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur2']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi2']; if($birimdegeri==2){$vcek['birimfiyatix2']=$vcek['birimfiyatix2']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix2']; ?></td>
    <td><div align="left">
      <?=$bf2=($vcek['birimfiyatix2']*($vcek['sirax2'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax3']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax3']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur3']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi3']; if($birimdegeri==2){$vcek['birimfiyatix3']=$vcek['birimfiyatix3']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix3']; ?></td>
    <td><div align="left">
      <?=$bf3=($vcek['birimfiyatix3']*($vcek['sirax3'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax4']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax4']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur4']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi4']; if($birimdegeri==2){$vcek['birimfiyatix4']=$vcek['birimfiyatix4']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix4']; ?></td>
    <td><div align="left">
      <?=$bf4=($vcek['birimfiyatix4']*($vcek['sirax4'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax5']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax5']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur5']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi5']; if($birimdegeri==2){$vcek['birimfiyatix5']=$vcek['birimfiyatix5']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix5']; ?></td>
    <td><div align="left">
      <?=$bf5=($vcek['birimfiyatix5']*($vcek['sirax5'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax6']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax6']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur6']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi6']; if($birimdegeri==2){$vcek['birimfiyatix6']=$vcek['birimfiyatix6']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix6']; ?></td>
    <td><div align="left">
      <?=$bf6=($vcek['birimfiyatix6']*($vcek['sirax6'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax7']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax7']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur7']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi7']; if($birimdegeri==2){$vcek['birimfiyatix7']=$vcek['birimfiyatix7']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix7']; ?></td>
    <td><div align="left">
      <?=$bf7=($vcek['birimfiyatix7']*($vcek['sirax7'])) ;?>
    </div></td>
  </tr>
  <tr>

    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax8']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax8']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur8']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi8']; if($birimdegeri==2){$vcek['birimfiyatix8']=$vcek['birimfiyatix8']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix8']; ?></td>
    <td><div align="left">
      <?=$bf8=($vcek['birimfiyatix8']*($vcek['sirax8'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax9']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax9']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur9']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi9']; if($birimdegeri==2){$vcek['birimfiyatix9']=$vcek['birimfiyatix9']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix9']; ?></td>
    <td><div align="left">
      <?=$bf9=($vcek['birimfiyatix9']*($vcek['sirax9'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax10']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax10']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur10']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi10']; if($birimdegeri==2){$vcek['birimfiyatix10']=$vcek['birimfiyatix10']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix10']; ?></td>
    <td><div align="left">
      <?=$bf10=($vcek['birimfiyatix10']*($vcek['sirax10'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax11']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax11']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur11']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi11']; if($birimdegeri==2){$vcek['birimfiyatix11']=$vcek['birimfiyatix11']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix11']; ?></td>
    <td><div align="left">
      <?=$bf11=($vcek['birimfiyatix11']*($vcek['sirax11'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax12']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax12']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur12']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi12']; if($birimdegeri==2){$vcek['birimfiyatix12']=$vcek['birimfiyatix12']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix12']; ?></td>
    <td><div align="left">
      <?=$bf12=($vcek['birimfiyatix12']*($vcek['sirax12'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax13']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax13']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur13']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi13']; if($birimdegeri==2){$vcek['birimfiyatix13']=$vcek['birimfiyatix13']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix13']; ?></td>
    <td><div align="left">
      <?=$bf13=($vcek['birimfiyatix13']*($vcek['sirax13'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax14']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax14']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur14']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi14']; if($birimdegeri==2){$vcek['birimfiyatix14']=$vcek['birimfiyatix14']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix14']; ?></td>
    <td><div align="left">
      <?=$bf14=($vcek['birimfiyatix14']*($vcek['sirax14'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax15']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax15']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur15']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi15']; if($birimdegeri==2){$vcek['birimfiyatix15']=$vcek['birimfiyatix15']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix15']; ?></td>
    <td><div align="left">
      <?=$bf15=($vcek['birimfiyatix15']*($vcek['sirax15'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax16']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax16']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur16']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi16']; if($birimdegeri==2){$vcek['birimfiyatix16']=$vcek['birimfiyatix16']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix16']; ?></td>
    <td><div align="left">
      <?=$bf16=($vcek['birimfiyatix16']*($vcek['sirax16'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax17']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax17']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur17']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi17']; if($birimdegeri==2){$vcek['birimfiyatix17']=$vcek['birimfiyatix17']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix17']; ?></td>
    <td><div align="left">
      <?=$bf17=($vcek['birimfiyatix17']*($vcek['sirax17'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax18']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax18']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur18']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi18']; if($birimdegeri==2){$vcek['birimfiyatix18']=$vcek['birimfiyatix18']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix18']; ?></td>
    <td><div align="left">
      <?=$bf18=($vcek['birimfiyatix18']*($vcek['sirax18'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax19']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax19']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur19']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi19'];if($birimdegeri==2){$vcek['birimfiyatix19']=$vcek['birimfiyatix19']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix19']; ?></td>
    <td><div align="left">
      <?=$bf19=($vcek['birimfiyatix19']*($vcek['sirax19'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
      <?=$vcek['aciklamax20']; ?>
    </div></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['sirax20']; ?>
    </span></div></td>
    <td><div align="right"><span class="fsdfgsfdsf">
      <?php $turdegeri=$vcek['tur20']; if($turdegeri==1)echo 'Adet';else if($turdegeri==2)echo 'm²'; else if($turdegeri==3) echo 'm';?>
    </span></div></td>
    <td class="displaynone"><div align="left"><span class="fsdfgsfdsf">
      <?php $birimdegeri=$vcek['birimi20'];if($birimdegeri==2){$vcek['birimfiyatix20']=$vcek['birimfiyatix20']*$vcek['kur'];}?>
    </span></div></td>
    <td><?=$vcek['birimfiyatix20']; ?></td>
    <td><div align="left">
      <?=$bf20=($vcek['birimfiyatix20']*($vcek['sirax20'])) ;?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">Yalnız,
    <label for="yalniz"></label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="left"></div></td>
  </tr>
  <tr>
    <td colspan="5"><?=$vcek['yalniz']; ?></td>
    <td>&nbsp;</td>
    <td><label for="aciklamax2">TOPLAM</label></td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['toplam']; ?>
    </span></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="210">&nbsp;</td>
    <td width="38">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label for="aciklamax6">K.D.V.</label></td>
    <td><div align="left"><span class="fsdfgsfdsf">
	<?=$vcek['toplam']*$vcek['kdv']/100; ?>
    </span></div></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label for="aciklamax5"></label>
G. TOPLAM</td>
    <td><div align="left"><span class="fsdfgsfdsf">
      <?=$vcek['geneltoplam']; ?>
    </span></div></td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">
	</td>
    </tr>
</table>
</div>
</section>
<script language="Javascript1.2">
window.print();
setTimeout(function(){ window.close(); }, 3000);
 </script>

<?php } ?>
<!-- GİRİŞ KONTROL -->        
<?php	} ?>