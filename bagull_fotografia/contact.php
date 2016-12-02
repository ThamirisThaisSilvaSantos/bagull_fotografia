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
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">

    <!-- begin header -->
    <header>
      <header>
      <div id="logo"><a href="index.php"><h1>Bagull - Photography</h1></a></div>
	
	<div id="link">
		<a href="logar.php" > Logar </a> • <a href="cadastro.php">Cadastrar</a>
	</div>	
	
	 <nav class="imglogin">	  
	 </nav>
		
      <nav class="menu_">
        <ul class="sf-menu" id="nav">
          <li><a href="index.php">home</a></li>
          <li><a href="#">Portfolio</a>
            <ul>
              <li><a href="aniversarios.php">Aniversários</a></li>
              <li><a href="ensaios.php">Ensaios Fotográficos</a></li>
			  <li><a href="casamentos.php">Casamentos</a></li><!--Cópia da pág "aniversarios"-->
            </ul>
          </li>
          <li class="selected"><a href="contact.php">contato</a></li>
        </ul>
      </nav>
    </header>
    <!-- end header -->

    <!-- begin content -->
    <div id="site_content">
      <div id="left_content">
        <h1>Contato</h1>
        <!--<p>Say hello, using this contact form.</p>-->
        
        <form id="contact" action="contact2.php" method="post">
          <div class="form_settings">
            <p><span>Nome</span><input class="contact" type="text" name="nome" required autofocus/></p>
            <p><span>Email</span><input class="contact" type="text" name="email"required/></p>
			<p><span>Assunto</span><input class="contact" type="text" name="assunto"required/></p>
            <p><span>Mensagem</span><textarea class="contact textarea" rows="5" cols="50" name="mensagem" required></textarea></p>
            <!--<p style="line-height: 1.7em;">To help prevent spam, please enter the answer to this question:</p>-->
      
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Enviar" /></p>
          </div>
        </form>
      </div>
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
  <!-- initialise sooperfish menu -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
