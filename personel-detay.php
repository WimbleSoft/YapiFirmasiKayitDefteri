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
                <li class="current"><a href="personel.php">Personel</a></li>
                <li ><a href="personel-ekle.php">Personel Ekle</a></li>
				
               </ul>
            </nav>


<?php
$id=$_GET['id'];
$yil=$_GET['yil'];
$vericek=$connection->query("select * from personel where id='$id'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($vericek as $vcek)
		{

?>

<section id="content">
	<h2><?=$vcek['ad'];?>&nbsp;<?=$vcek['soyad'];?> adlı personel detayları.</h2>
	<form class="wymupdate" enctype="multipart/form-data" method="post" > 
	 
	 
	   <div class="column left">
		<section>
		  <label for="label">
			Adı
		  </label>

		  <div>
			<?=$vcek['ad'];?>
			<input type="hidden" name="id" value="<?=$vcek['id'];?>"  />
			
		  </div>
		</section>

		
		 <section>
		  <label for="label">
			Soyadı
		  </label>

		  <div>
			<?=$vcek['soyad'];?>
			
		  </div>
		</section>

		<section>
		  <label for="username">
			TC Numarası
		  </label>

		  <div>
			<?=$vcek['tcno'];?>
		  </div>
		</section>
		
		
	  </div>

	<div class="column right">


	<section>
		  <label for="username">
			Maaşı
		  </label>

		  <div>
			<?=number_format($vcek['maas'],2);?>
			
		  </div>
		</section>
		<?php $maas2=$vcek['maas'];?>
		<section>
		  <label for="username">
			Başlama Tarihi
		  </label>

		  <div>
			<?=$vcek['baslamatarihi'];?>
		  </div>
		</section>

		
		<section>
		<label for="not">Adres</label>
		<div>
		<?=$vcek['adres'];?>
		</section>

		

	</div>
	 
	 
	 
	<div class="clear">
	<a href="personel-duzenle.php?id=<?=$vcek['id'];?>" class="button icon edit">Personel Düzenle</a>
	<a href="personel-sil.php?id=<?=$vcek['id'];?>" onclick="return confirm('İçeriği silmek istediğinize emin misiniz? Bu işlem geri alınamaz');" class="button icon remove danger">Personel Sil</a>
	
	
<h2>Avanslar</h2>


	
	</div>

	
	</form>

	<?php } ?>

</section>


<nav id="secondary">
      <ul>
	<?php
			for($j=date("Y");$j>2013;$j--){
	?>
			<li <?php if(isset($yil))
						if($yil==$j) echo 'class="current"';
				?>
			><a href="personel-detay.php?yil=<?=$j;?>&id=<?=$id;?>"><?=$j;?></a></li>
	<?php 	} ?>
      </ul>
    </nav>
	
<section id="content2">

<br>
<div>
<table  style="background-image:url(img/bos.png); background-repeat:repeat" class="datatable">
    <thead>
      <tr>
        <th></th>
        <th>AY</th>
        <th>TOPLAM ÖDENEN</th>
		<th>KALAN</th>
		<th>İŞLEMLER</th>
      </tr>
    </thead>


    <tbody>
    	  <?php
			
					
			for($i=1;$i<=12;$i++)
			{
				if($i==1)$ay="Ocak";
				elseif($i==2)$ay="Şubat";
				elseif($i==3)$ay="Mart";
				elseif($i==4)$ay="Nisan";
				elseif($i==5)$ay="Mayıs";
				elseif($i==6)$ay="Haziran";
				elseif($i==7)$ay="Temmuz";
				elseif($i==8)$ay="Agustos";
				elseif($i==9)$ay="Eylül";
				elseif($i==10)$ay="Ekim";
				elseif($i==11)$ay="Kasım";
				elseif($i==12)$ay="Aralık";
	?>
    
  
					<tr>
						<td width="5px"><?=$i;?></td>
						<td><?=$ay;?></td><?php
		$toplamodemecek2=$connection->query("select SUM(avanslar) AS odenmistl from personel_avanslar where personelid='$id' and ay='$i' and yil='$yil'")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($toplamodemecek2 as $toplamodeme2)
		{
		?>
		<td><?php if($toplamodeme2['odenmistl']==NULL)echo number_format(0,2); else echo number_format($toplamodeme2['odenmistl'],2);?> TL</td>  
		<?php } ?>
						<td><?php if($toplamodeme2['odenmistl']==NULL)echo number_format($maas2,2); else echo number_format($maas2-$toplamodeme2['odenmistl'],2);?> TL</td>  
						<td>
						<span class="button-group">
							<a href="personel-avans-detay.php?ay=<?=$i;?>&yil=<?=$yil;?>&personelid=<?=$vcek['id'];?>" class="button icon search">Avansları Listele</a>
						</span>
						</td>  						
					</tr>  
	

    <?php
			}	
					
	?>
    
    
    
    
      

    </tbody>
    
  </table>






</div>


</section>



</div>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>