<html>
<head>
</head>
<body>
<link href="../css/estilo3.css" rel="stylesheet" type="text/css">
<div id="barravoltar2">
<a href="form_cadastro_modelo.html"><div class="home"></div></a>
</div>
<div id="texto">


<meta charset="utf-8">
<body bgcolor="dfdfdf">


<?php 
	session_start();
	
	$modelo = $_POST['modelo'];
	$marca = $_POST['marca'];
	
	$conn = mysql_connect('localhost', 'root', '') or die ("Sem conexao com o servidor");
	$db = mysql_select_db("sistema");
	$query_select = "SELECT modelo FROM equipamento WHERE modelo = '$modelo'";
	$select = mysql_query($query_select,$conn);
	$array = mysql_fetch_array($select);
	$logarray = $array['modelo'];
 
	
	
	
 if($modelo == "" || $modelo == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo modelo deve ser preenchido');window.location.href='form_cadastro_modelo.html';</script>";
 
    }else{
      if($logarray == $modelo){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse modelo ja existe');window.location.href='form_cadastro_modelo.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO equipamento (modelo,marca) VALUES ('$modelo','$marca')";
        $insert = mysql_query($query,$conn);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Modelo de roteador cadastrado com sucesso!');window.location.href='../Exibir/exibir_modelo.php';</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Nao foi possivel cadastrar esse modelo! Tente Novamente');window.location.href='form_cadastro_modelo.html';</script>";
        }
      }
    }
?>
	

	
	</div></body></html>