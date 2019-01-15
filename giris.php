<!DOCTYPE html>
<html><head>
    <meta charset="utf-8" />

    <title>Yönetim Paneli Girişi</title>

    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/visualize.css" />
    <link rel="stylesheet" href="css/datatables.css" />
    <link rel="stylesheet" href="css/buttons.css" />
    <link rel="stylesheet" href="css/checkboxes.css" />
    <link rel="stylesheet" href="css/inputtags.css" />
    <link rel="stylesheet" href="css/main.css" />
    
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="css/ie.css" />
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>    
    <div id="gradient">
      <div id="stars">
        <div id="container" class="logincontainer">
        
          <header>
          
            <!-- Logo -->
            <h1 align="center"><img src="img/logo.png" height="105px;"  /></h1>
          
          </header>
        
          <!-- The application "window" -->
          <div id="application">
            
           <nav id="secondary">
              <ul>
                <li class="current"><a href="giris.php">Giriş</a></li>
              </ul>
            </nav>
          
            <!-- The content -->
              <section id="content">

              <br /><br />
              <form action="giris-kontrol.php" enctype="multipart/form-data" method="post">
                <section>
                  <label for="kadi">Kullanıcı Adınız</label>

                  <div>
                    <input type="text" id="kadi" name="kadi" placeholder="Kullanıcı Adınızı Giriniz" class="required" />
                  </div>
                </section>

                <section>
                  <label for="sifre">Şifreniz</label>

                  <div>
                    <input type="password" name="sifre" id="sifre" placeholder="Şifrenizi Giriniz" class="required" />
                   <section><input  class="primary button" width="160px" type="submit" value="      Giriş      "  /> 
                   </form>
                    <input  class="primary button" align="right" width="160px"     value="   Anasayfa  "   type="button" onclick="yonlendir()"/>                </section>
  <script>
	function yonlendir(){
		window.location='http://markamermer.com/index.php';
		}
</script> 
                  </div>
        
          <footer id="copyright"><a href="http://www.teknogenco.com/" target="_blank"><font color="#66781c">TeknoGenco</font></a></footer>
        </div>
      </div>
    </div>

    <!-- JavaScript -->
    <script src="js/excanvas.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.livesearch.js"></script>
    <script src="js/jquery.visualize.js"></script>
    <script src="js/jquery.datatables.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/jquery.selectskin.js"></script>
    <script src="js/jquery.checkboxes.js"></script>
    <script src="js/jquery.wymeditor.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/jquery.inputtags.js"></script>
    <script src="js/notifications.js"></script>
    <script src="js/application.js"></script>
  </body>
</html>