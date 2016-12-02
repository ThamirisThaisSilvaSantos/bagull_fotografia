<?php
	if (!isset ($_SESSION['usuarioNiveisAcessoId'])) session_start();

	if (!isset($_SESSION['usuarioEmail']) OR ($_SESSION['usuarioNiveisAcessoId'] < 1)){
		session_destroy();
		header("location: http://localhost/Sites/bagull_fotografia/logar.php");
		exit;
	}

	$email= $_SESSION['usuarioEmail'];

date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d H:i');

include('conexao.php');

$id = $_POST['id']; // Recebendo o valor id do formulário
$nome = $_POST['nome'];// Recebendo o valor nome do formulário
$email = $_POST['email'];// Recebendo o valor email do formulário
$senha = $_POST['senha'];//Recebendo o valor senha do formulário
$modified = $_POST['modified'];

$result = "UPDATE usuarios SET nome = '".$nome."', email = '".$email."', senha = '".$senha."', modified = '".$date."' WHERE id='".$id."' ";
$query = mysqli_query($conn,$result);

echo"	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Sites/bagull_fotografia/01administrador/clientes.php'>
		<script type=\"text/javascript\">
			alert(\"Dados alterados com sucesso!\");
		</script>";

mysqli_close($conn);
?>
