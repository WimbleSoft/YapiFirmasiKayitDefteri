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
                <li class="current" ><a href="faturalar.php">Fatura Listesi</a></li>
                
              </ul>
            </nav>


<section id="content">
<h2>Faturalar</h2>
<a target="_blank" href="fatura_ekle.php" class="button icon add">Fatura Oluştur</a>

<div>
<table  style="background-image:url(img/bos.png); background-repeat:repeat" class="datatable">
    <thead>
      <tr>
        <th>Sayın</th>
        <th>Düzenleme Tarihi</th>
		<th>Vergi Dairesi</th>
		<th>Genel Toplam</th>
		<th>İşlem</th>
      </tr>
    </thead>

    <tbody>
    
    	<?php
		$vericek=$connection->query("select * from fatura order by id ASC")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{
		?>
    
    
    
  
    
      <tr>
        <td><?=$vcek['sayin'];?></td>
        <td><?=$vcek['duzenlemetarihi'];?></td>
        <td><?=$vcek['vergidairesi'];?></td>
        <td><?=$vcek['geneltoplam']; ?></td>
        
       <td>    
          <span class="button-group">
            <a target="_blank" href="fatura_detay.php?id=<?=$vcek['id'];?>" class="button icon search">Fatura Görüntüle</a>
            <a href="fatura_sil.php?id=<?=$vcek['id'];?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Sil</a>
          </span>
        </td>
       
      </tr>

    
 <?php } ?>   
    
    
    
    
    
      

    </tbody>
  </table>


</div>



</section>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>