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
		
			<p class="up"><h1> Faca o pload de sua imagem</h1></p>
		
      
	  
	  <?php
	  //VERIFICA SE O FORM FOI ENVIADO
	  if($_POST) { 
	     
		 //CONECTA AO MYSQL                                               
		 include('conexao.php');                      
		 
		 //RECEBE DADOS DO FORMULÁRIO               
		 $pFoto = $_FILES["txtFoto"]["tmp_name"];   
		 $pTipo = $_FILES["txtFoto"]["type"];       
		 
		 //MOVE                                     
		 move_uploaded_file($pFoto, "c:\\temp\\latest.img");  
		 
		 //ABRE ARQUIVO                      
		 $pont = fopen("c:\\temp\\latest.img", "rb");   
         
		 //PERCORRE O ARQUIVO                                       
         $dados = addslashes(fread($pont, filesize("c:\\temp\\latest.img"))); 
		 
		 //INSERE NA BASE DE DADOS
		 $sql = mysqli_query($conn, "INSERT INTO fotos (foto, tipo, email, assunto) VALUES('".$dados."', '".$pTipo."', '".$email."', '".$assunto."') ");
		 
		 echo "<table border='0' cellpading='0' cellspacing='0' width='95%'>";
		 
		 //LINHAS AFETADAS                  
		 $row = mysqli_affected_rows($conn);
		 
		 //TOTAL DE LINHAS AFETADAS PELA INSERÇÃO      
		 if($row) {                                    
		    echo "<tr>";                               
			echo "<td>Imagem salva com Sucesso!"; 
			echo "</tr>";                              
		 }//FECHA IF ( num_rows )                      
		 else {
		    echo "<tr>";                               
			echo "<td>Erro no upload da foto!";      
			echo "</tr>";                              
		 }//FECHA ELSE                                 
		 echo "</table>";                              
	  }//FECHA IF ( post )                             
	  
	  //EXIBE O FORMULÁRIO 
	  else  {            ?>
		 <form name="frmFoto" method="post" enctype="multipart/form-data">
            <table border="2" cellpading="0" cellspacing="0" width="50%">
	        <tr>
	           <td height="50">Foto:</td>
			   <td><input type="file" name="txtFoto" size="35"></td>
			   <td> <p>Descreva brevemente</p>
					<input type="text" name="txtAssunto" size="35">
			   </td>
			   
	        </tr>
		    
			<tr>
	           <td colspan="2">
			   <input type="submit" name="Enviar"></td>
	        </tr>
	        </table>
	     </form>
   <?php
   }//FECHA ELSE ?>
   </body>
</html>