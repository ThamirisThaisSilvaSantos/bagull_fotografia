<html>
	<head>
	 <title>Bagull - Fotography</title>
	  <meta name="description" content="website description" />
	  <meta name="keywords" content="website keywords, website keywords" />
	  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	  <!-- stylesheets -->
	  <link href="css/cadastro.css" rel="stylesheet" type="text/css" />
	  <link href="css/colour.css" rel="stylesheet" type="text/css" />
	  <link href="css/login.css" rel="stylesheet" type="text/css" />
	  
	  <!-- modernizr enables HTML5 elements and feature detects -->
	  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
	</head>
	
	<body>
		<div class = "cad-card">
			<form action="processa_cad.php" method="post">
			<h1>Cadastrar</h1><br>
			
				<p> <input type="text" name="nome" id="nome" placeholder = "* Nome" required autofocus></p>
				
				<p> <input type="email" name="email" id="email" placeholder = "* E-mail" required></p>
				
				<p> <input type="password" name="senha" id="senha" placeholder = "* Senha" required></p>
				
				<p> <input type="text" name="endereco" id="endereco" placeholder = "* Endereco" required></p>
				
				<p><input type="submit" name="botao" class="cadastro" value="Cadastrar"></p>
				
				<div class="voltar">
					<input type="submit" value="Voltar" class ="voltar" onclick="location.href='index.php' ">				
				</div>
			
			<p> <input type="hidden" value="2016-10-10" name="modified" id="modified" placeholder = "modified"></p>
			<p> <input type="hidden" value="3" name="niveis_acesso_id" id="niveis_acesso_id"></p>
			<p> <input type="hidden" name="data" id="data"></p>
			
			</form>
				
		<div>	
	</body>
<html>