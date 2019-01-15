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
                <li class="current"><a href="tedarikciler.php">Tedarikçiler</a></li>
                <li ><a href="tedarikciler-ekle.php">Tedarikler Ekle</a></li>
               </ul>
            </nav>

<?php
$id=$_GET['id'];
$tedarikciid=$_GET['tedarikciid'];
$tedarikcicek=$connection->query("select * from tedarikciler where id='$tedarikciid'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($tedarikcicek as $tcek)
		{

?>


<section id="content">
<h2><?=$tcek['ad'];?> adlı tedarikçiye ait fatura bilgisi düzenleniyor.</h2>
<form class="wymupdate" action="tedarikciler-faturalari-duzenle-kontrol.php" enctype="multipart/form-data" method="post" > 
<?php
		$vericek=$connection->query("select * from tedarikciler_faturalari where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{

?>




<div>
<table  style="background-image:url(img/bos.png); background-repeat:repeat" class="datatable">
    <thead>
      <tr>
        <th>FATURA TARİHİ</th>
        <th>FATURA TUTARI-TL</th>
        <th>İŞLEMLER</th>
      </tr>
    </thead>

    <tbody>
    
    
   
    
      <tr>
        <td><input type="hidden" id="tedarikciid" name="tedarikciid" value="<?=$tcek['id'];?>"/>
		<input type="hidden" id="id" name="id" value="<?=$vcek['id'];?>"/>
        <input id="tarih" name="tarih" type="text" value="<?=$vcek['tarih'];?>"/></td>
        <td><input id="tutar_tl" name="tutar_tl" type="text" value="<?=$vcek['tutar_tl'];?>"/></td>
		<td>    
       <p><input type="submit" class="button primary submit" value="Faturayı Düzenle" /></p>
        </td>
       
      </tr>

    
    </tbody>
  </table>


</div>








<div class="clear">


</div>

<h2>&nbsp;</h2>
<br />
</form>

<?php }} ?>

</section>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>