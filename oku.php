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
                <li class="current"><a href="destek.php">Destek Listesi</a></li>
              </ul>
            </nav>


<section id="content">
<h2>Şikayet Ayrıntısı</h2>


<div>
<table class="datatable">
    <thead>
      <tr>
        <th>Şikayet</th>
      </tr>
    </thead>

    <tbody>
    
    
    
    
   
    
      <tr>
        <td>
		
		<?php
		
		
		$sikayet=$_POST['sikayet'];
		echo $sikayet;
		
		
		?>
       <br> <nav align="center" id="primary">
 <ul>
 <li  class="current">
                <span class="icon gerigit">
                <a href="destek.php"> 
                    
                    </a></span>
 </li>
 </ul>
</nav>
        </td>
        
       
       
      </tr>


    </tbody>
  </table>

</div>



</section>
</div>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>	
