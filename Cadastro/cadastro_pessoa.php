<html>
<head>
</head>
<body>
<link href="../css/estilo3.css" rel="stylesheet" type="text/css">
<div id="barravoltar">
<a href="../index1.php"><div class="home"></div></a>
</div>
<div id="texto">


<meta charset="utf-8">
<body bgcolor="dfdfdf">


<?php 
	session_start();
	
	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	
	$conn = mysql_connect('localhost', 'root', '') or die ("Sem conexao com o servidor");
	$db = mysql_select_db("sistema");
	$query_select = "SELECT cpf FROM pessoa WHERE cpf = '$cpf'";
	$select = mysql_query($query_select,$conn);
	$array = mysql_fetch_array($select);
	$logarray = $array['cpf'];
 
	
	
	
 if($cpf == "" || $cpf == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo cpf deve ser preenchido');window.location.href='form_cadastro_pessoa.html';</script>";
 
    }else{
      if($logarray == $cpf){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse cpf ja existe');window.location.href='form_cadastro_pessoa.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO pessoa (cpf,nome,senha,email) VALUES ('$cpf','$nome','$senha','$email')";
        $insert = mysql_query($query,$conn);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='../Exibir/exibir_pessoa.php';</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Nao foi possivel cadastrar esse usuario');window.location.href='form_cadastro_pessoa.html';</script>";
        }
      }
    }
?>
	

	
	</div></body></html>