<?php
//RECEBE PARÂMETRO  
$id = $_GET["id"];  

//CONECTA AO MYSQL                                               
include('conexao.php');

//EXIBE IMAGEM                                                                        
$sql = mysqli_query($conn, "SELECT foto,tipo FROM fotos WHERE id = ".$id."");

$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);    
   $tipo   = $row["tipo"];                        
   $bytes  = $row["foto"];                        
   //EXIBE IMAGEM                                 
   header("Content-type: ".$tipo."");             
   echo $bytes;                                   
?>