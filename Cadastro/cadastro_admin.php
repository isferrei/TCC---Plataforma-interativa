<html>
<head>
</head>
<body>
<link href="../css/estilo3.css" rel="stylesheet" type="text/css">
<div id="barravoltar">
<a href="../index1.html"><div class="home"></div></a>
</div>
<div id="texto">


<meta charset="utf-8">
<body bgcolor="dfdfdf">


<?php 
	session_start();
	
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	
	$conn = mysql_connect('localhost', 'root', '') or die ("Sem conexao com o servidor");
	$db = mysql_select_db("sistema");
	$query_select = "SELECT cpf FROM admin WHERE cpf = '$cpf'";
	$select = mysql_query($query_select,$conn);
	$array = mysql_fetch_array($select);
	$logarray = $array['cpf'];
 
	
	
	
 if($cpf == "" || $cpf == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo cpf deve ser preenchido');window.location.href='form_cadastro_admin.html';</script>";
 
    }else{
      if($logarray == $cpf){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse cpf ja existe');window.location.href='form_cadastro_admin.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO admin (senha,nome,cpf,email) VALUES ('$senha','$nome','$cpf','$email')";
        $insert = mysql_query($query,$conn);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Admin cadastrado com sucesso!');window.location.href='../Exibir/exibir_admin.php';</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Nao foi possivel cadastrar esse admin');window.location.href='form_cadastro_admin.html';</script>";
        }
      }
    }
?>
	

	
	</div></body></html>