<?php
session_start();
?>

<!DOCTYPE html>

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
  
   <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

</head>
<div class="body">
<body>
	<section>
		<div class="login-card">

		  <form method="POST" action="valida.php">
			<h1>Logar</h1><br>
			
			<input type="text" name="email" id="inputEmail" placeholder="* E-mail" required autofocus><br>
			
			<input type="password" name="senha" id="inputPassword" placeholder="* Senha" required>
			
			<input type="submit" name ="entrar" class = "login" value="Entrar" />
			
			<div class="voltar2">
				<input type="submit" value="Voltar" class ="voltar2" onclick="location.href='index.php' ">				
			</div>
			
		  </form>
		  <p class="text-center text-danger">
				<?php if(isset($_SESSION['loginErro'])){
					echo $_SESSION['loginErro'];
					unset($_SESSION['loginErro']);
				}?>
			</p>
			<p class="text-center text-success">
				<?php 
				if(isset($_SESSION['logindeslogado'])){
					echo $_SESSION['logindeslogado'];
					unset($_SESSION['logindeslogado']);
				}
				?>
			</p>
		</div>
	</section>	
</body>
</div>

<html>