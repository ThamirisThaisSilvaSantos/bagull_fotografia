<!DOCTYPE html >
<?php
include('conexao.php');
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
  <title>Editar registros</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <!-- stylesheets -->
  <link href="css/style2.css" rel="stylesheet" type="text/css" />
  <link href="http://localhost/Sites/bagull_fotografia/css/colour.css" rel="stylesheet" type="text/css" />
  
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>

<?php
$id = $_GET['id']; // Recebendo o valor vindo do link
	$result = "SELECT * FROM usuarios WHERE id = '".$id."'";
	$query = mysqli_query($conn,$result);
	
	while($consulta = mysqli_fetch_array($query)){
?>
	<form method="post" action="alterar2.php">
		<div class = "alterar_adm">
		<h1>Alterar dados</h1><br>
		<input type="hidden" name="id" value="<?php echo $consulta['id']; ?>" /> <!-- passando o valor da id em um campo oculto-->
			NOME: <input type="text" name="nome" value="<?php echo $consulta['nome']; ?>" /> <br> <!-- mostrando dentro do form o valor do campo nome -->
			E-MAIL: <input type="text" name="email" value="<?php echo $consulta['email']; ?>" /> <br>  <!-- mostrando dentro do form o valor do campo email -->
			SENHA: <input type="text" name="senha" value="<?php echo $consulta['senha']; ?>" /> <br>
			<input type="hidden" name="modified" value="<?php echo $consulta['modified']; ?>" /> <!-- passando o valor da modified em um campo oculto-->
			
			<div class="editar_adm">
				<p><input type="submit" name="editar" value="Editar"/></p>
			</div>
			<div class="voltar_adm">
				<p><input type="submit" value="Cancelar" onclick="location 'clientes.php' "></p>		
			</div>
		</div>
		
		
	</form>
<?php
}
?>

</body>
</html>