<!DOCTYPE HTML>
<?php 
	if (!isset ($_SESSION['usuarioNiveisAcessoId'])) session_start();

	if (!isset($_SESSION['usuarioEmail']) OR ($_SESSION['usuarioNiveisAcessoId'] < 1)){
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
<body></body>

<?php


//CONECTA AO MYSQL                                               
include('conexao.php');
$email2 = $_GET['email2'];

//EXECUTA A QUERY                                                
$sql = mysqli_query($conn, "SELECT * FROM fotos WHERE email = '".$email2."'");
?>

<div id = "welcome">
	<h1>Fotos do usuario : <?php  echo $email2 ?> !</h1>
</div>
<?php


while ($row = mysqli_fetch_row($sql)) {      
   $id    = $row[0];                         
   $bytes = $row[1];                         
   $tipo  = $row[2];                         
   /*<a href=”endereço”><img src=”endereço da imagem”/></a>*/
   /*echo "<img src='gera.php?id=".$id."' width='100' height='100' border='1'>";*/
   echo "<a href = 'gera.php?id=".$id."'><img src='gera.php?id=".$id."'width='150' height='170' border='1'></a>";
   echo "<br>";
}

$_SESSION['email2'] = $email2;
?>

<html/>


