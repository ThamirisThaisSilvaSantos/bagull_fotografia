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
	<h1>Bem vindo(a), <?php  echo $_SESSION['usuarioNome']?> !</h1>
	
	<div id="main">
    <!-- begin header -->
    <header>
	
	<div id="link_usu">
		<a href="../sair.php" > DesLogar </a>
	</div>	
	
	 <nav class="imglogin_usu">	  
	 </nav>
		
      <nav class="menu_">
        <ul class="sf-menu" id="nav">
			<li><a href="#">Orçamento</a>
				<ul>
				  <li><a href="aniversarios.php">Aniversários</a></li>
				  <li><a href="ensaios.php">Ensaios Fotográficos</a></li>
				  <li><a href="casamentos.php">Casamentos</a></li><!--Cópia da pág "aniversarios"-->
				</ul>
			</li>
			<li><a href="upload.php">Upload de fotos</a></li>
			<li><a href="exibir.php">Ver minhas imagens</a></li>
			<!--<li><a href="andamento_pedido.php">Andamento do pedido</a></li>-->
		</ul>
      </nav>
    </header>
    <!-- end header -->

</body>
</html>