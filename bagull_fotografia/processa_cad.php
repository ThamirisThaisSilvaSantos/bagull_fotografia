<?php
include('conexao.php');
/*INCLUINDO OS DADOS DE "CADASTR0.PHP"*/

$id=0;
$nome=$_POST['nome'];
$senha=$_POST['senha'];
$email=$_POST['email'];
$endereco=$_POST['endereco'];
$niveis_acesso_id=$_POST['niveis_acesso_id'];
$modified=$_POST['modified'];
$data=$_POST['data'];

	/*VERIFICANDO EMAILS REPETIDOS*/
	$dupesql = "SELECT email FROM usuarios	where email = '$email'";
	$duperaw = mysqli_query($conn,$dupesql);
	
	
	if (mysqli_affected_rows($conn) > 0) {
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Sites/bagull_fotografia/cadastro.php'>
					<script type=\"text/javascript\">
						alert(\"[ERRO:]Este E-mail já está cadastrado.\");
					</script>";
}else{	
	/*INSERINDO OS DADOS NO BANCO*/
	$result_usuario = "INSERT INTO usuarios(nome, email, senha, niveis_acesso_id, endereco, created) VALUES ('$nome','$email','$senha', '$niveis_acesso_id','$endereco', NOW())" /*or die ("E-mail ja cadastrado!!")*/;
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	
	/*SE ALGUMA LINHA NO BANCO FOR MODIFICADA*/
	if(mysqli_affected_rows($conn) != 0){
				echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Sites/bagull_fotografia/logar.php'>
					<script type=\"text/javascript\">
						alert(\"Usuario cadastrado com Sucesso.\");
					</script>";	
			}else{
				echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Sites/bagull_fotografia/cadastro.php'>
					<script type=\"text/javascript\">
						alert(\"[ERRO:] Não foi possível cadastrar o usuario]\");
					</script>";	
			}

			/* echo "$nome - $email - $senha"; */
			}
?>