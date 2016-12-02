<!DOCTYPE HTML>
<html>

<head>
  <title>Bagull - Fotography</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <!-- stylesheets -->
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/colour.css" rel="stylesheet" type="text/css" />
  <link href="css/login.css" rel="stylesheet" type="text/css" />
  
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">

    <!-- begin header --><!--<div id="chave">
				<img src="C:\xampp\htdocs\Sites\bagull_fotografia\images\key.png">
	</div>-->
    <header>
      <div id="logo"><a href="index.php"><h1>Bagull - Photography</h1></a></div>
	
	<div id="link">
		<a href="logar.php" > Logar </a> • <a href="cadastro.php">Cadastrar</a>
	</div>	
	
	 <nav class="imglogin">	  
	 </nav>
		
      <nav class="menu_"><!--INSERIR A CLASSE MENU_ NAS OUTRAS PAGS-->
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.php">home</a></li>
          <li><a href="#">Portfolio</a>
            <ul>
              <li><a href="aniversarios.php">Aniversários</a></li>
              <li><a href="ensaios.php">Ensaios Fotográficos</a></li>
			  <li><a href="casamentos.php">Casamentos</a></li><!--Cópia da pág "aniversarios"-->
            </ul>
          </li>
          <li><a href="contact.php">contato</a></li>
        </ul>
      </nav>
    </header>
    <!-- end header -->

    <!-- begin content -->
    <div id="site_content">
      <ul class="slideshow">
        <li class="show"><img width="950" height="450" src="images/home_1.jpg" alt="&quot; Bougainvillea, mais conhecida como Privamera .&quot;" /></li>
        <li><img width="950" height="450" src="images/home_2.jpg" alt="&quot; Vela acesa.&quot;" /></li>
        <li><img width="950" height="450" src="images/home_3.jpg" alt="&quot; Cartão postal da cidade de Angra dos Reis - RJ.&quot;" /></li>
      </ul>
    </div>
    <!-- end content -->

    <!-- begin footer -->
    <footer>
      <p>&copy; Bagull - Photography - All Rights Reserved.</p>
      <!--<p><img src="images/twitter.png" alt="twitter" />&nbsp;<img src="images/facebook.png" alt="facebook" />&nbsp;<img src="images/rss.png" alt="rss" /></p>-->
    </footer>
    <!-- end footer -->

  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <!-- initialise sooperfish menu -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
