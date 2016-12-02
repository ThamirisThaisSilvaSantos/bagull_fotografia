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
<body></body>

<?php


//CONECTA AO MYSQL                                               
include('conexao.php');

//EXECUTA A QUERY                                                
$sql = mysqli_query($conn, "SELECT * FROM fotos WHERE email = '".$email."'");

echo "<h1>Suas imagens cadastradas</h1>";

while ($row = mysqli_fetch_row($sql)) {      
   $id    = $row[0];                         
   $bytes = $row[1];                         
   $tipo  = $row[2];                         
   
   /*echo "<img src='gera.php?id=".$id."' width='100' height='100' border='1'>";*/
   echo "<a href = 'gera.php?id=".$id."'><img src='gera.php?id=".$id."'width='150' height='170' border='1'></a>";
   echo "<br><br>";
}
?>

<html/>


