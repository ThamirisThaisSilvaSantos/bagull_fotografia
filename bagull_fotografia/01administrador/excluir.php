<!DOCTYPE html>

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
<head></head>

<body>


<?php
include('conexao.php');
$id = $_GET['id'];
/*$result2 = "INSERT INTO usuarios(modified) VALUES (NOW())" ;*/
/*DELETE FROM tabela WHERE tabela_id = 1;*/
$result = "DELETE FROM usuarios WHERE id='".$id."' ";
$query = mysqli_query($conn,$result);

echo"	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Sites/bagull_fotografia/01administrador/clientes.php'>
		<script type=\"text/javascript\">
			alert(\"Dados EXCLUIDOS com sucesso!\");
		</script>";
mysqli_close($conn);
?>
</body>
</html>