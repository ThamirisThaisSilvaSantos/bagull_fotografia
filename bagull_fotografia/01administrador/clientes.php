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

<html lang = "pt-br">
<head>
  <title>Bagull - Fotography</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <!-- stylesheets -->
 <link href="css/style2.css" rel="stylesheet" type="text/css" />
  <link href="http://localhost/Sites/bagull_fotografia/css/colour.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  
	<script language="Javascript">/*Script para confirmar exclusão do registro selecionado*/
		function confirmacao(id){
			var resposta = confirm("Deseja realmente remover este registro?");
			if (resposta == true){
			  window.location.href = "excluir.php?id="+id;
			}
		}
	</script>
</head>

<body>
	<form method = "POST" action = "excluir.php">
		<?php
			include('conexao.php');
			echo'<table id = "alter">';
				echo'<tr class = "cabecalho">';
					echo'<th><b>ID</b></th>';
					echo'<th><b>NOME</b</th>';
					echo'<th><b>E-MAIL</b</th>';
					echo'<th><b>SENHA</b</th>';
					echo'<th><b>ENDERECO</b</th>';
					echo'<th><b>NIVEIS ACESSO</b</th>';
					echo'<th><b>CRIADO EM</b</th>';
					echo'<th><b>MODIFICADO EM</b</th>';
					echo'<th colspan = "2"><b>GERENCIAR</b</th>';
				echo'</tr>';
				//Armazena os dados da consulta em um array associativo
				$result = "SELECT * FROM usuarios ";
				$query = mysqli_query($conn,$result);
				
				while($registro = mysqli_fetch_array($query))
				{
				echo'<tr class = "celulas">';
					echo'<td>' . $registro['id'] . '</td>';
					echo'<td>' . $registro['nome'] . '</td>';
					echo'<td>' . $registro['email'] . '</td>';
					echo'<td>' . $registro['senha'] . '</td>';
					echo'<td>' . $registro['endereco'] . '</td>';
					echo'<td>' . $registro['niveis_acesso_id'] . '</td>';
					echo'<td>' . $registro['created'] . '</td>';
					echo'<td>' . $registro['modified'] . '</td>';
					echo '<td><a href=\'alterar.php?id='.$registro['id'].'\'>Alterar &nbsp &nbsp &nbsp </a></td>';
					echo '<td><a href="javascript:func()" onclick="confirmacao('.$registro['id'].')">Remover</a></td>';
				echo'</tr>';		
				}

			echo"</table>";
			mysqli_close($conn);
		?>
		
	</form>


</body>
</html>