<!DOCTYPE HTML>
<?php 
if (!isset ($_SESSION['usuarioNiveisAcessoId'])) session_start();

$nivel_necessario =3;

if (!isset($_SESSION['usuarioEmail']) OR ($_SESSION['usuarioNiveisAcessoId'] <> $nivel_necessario)){
	session_destroy();
	header("location: http://localhost/Sites/bagull_fotografia/logar.php");
	exit;
}

$email= $_SESSION['usuarioEmail'];
?>
<html>

<head>
  <title>Bagull - Fotography</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <!-- stylesheets -->
 <link href="http://localhost/Sites/bagull_fotografia/css/style.css" rel="stylesheet" type="text/css" />
  <link href="http://localhost/Sites/bagull_fotografia/css/colour.css" rel="stylesheet" type="text/css" />
  
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
	
	<div id="main">
    <!-- begin header -->
    
		<div class = "orcamento">
		
		<img src = "img/01 aniversarios.jpg"/>
    </div>
    <!-- end header -->

</body>
</html>