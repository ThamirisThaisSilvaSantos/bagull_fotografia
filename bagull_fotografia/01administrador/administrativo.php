<!DOCTYPE HTML>

<?php 
	if (!isset ($_SESSION['usuarioNiveisAcessoId'])) session_start();
	$nivel_necessario =1;

	if (!isset($_SESSION['usuarioEmail']) OR ($_SESSION['usuarioNiveisAcessoId'] <> $nivel_necessario)){
		/*echo "SEM PERMISSAO";*/
		session_destroy();
		header("location: http://localhost/Sites/bagull_fotografia/logar.php");
		exit;
	}
	$email= $_SESSION['usuarioEmail'];
?>

<html>

<head>
  <title>Administrador</title>
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
<div id = "welcome"><h1>Bem vinda, <?php  echo $_SESSION['usuarioNome']?> !</h1></div>

<div id="main">
    <!-- begin header -->
    <header>
	
	<div id="link_adm">
		<a href="../sair.php" > Deslogar </a>
	</div>	
	
	 <nav class="imglogin_adm"></nav>
      <nav class="menu_">
        <ul class="sf-menu" id="nav">
			<li><a href="clientes.php">Clientes cadastrados</a></li>
			<li><a href="imagens_cadastradas.php">Imagens cadastradas</a></li>
			<!--<li><a href="01administrador/andamento_pedido.php">Andamento do pedido</a></li>-->
		</ul>
      </nav>
    </header>
    <!-- end header -->
</div>
</body>
</html>	
