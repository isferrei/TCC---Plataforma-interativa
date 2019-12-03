<html>
<head>
</head>
<body>
<link href="../css/estilo3.css" rel="stylesheet" type="text/css">
<div id="barravoltar">
<a href="form_cadastro_categoria.html"><div class="home"></div></a>
</div>
<div id="texto">


<meta charset="utf-8">
<body bgcolor="dfdfdf">


<?php 
	session_start();
	
	$nome = $_POST['nome'];
	
	$conn = mysql_connect('localhost', 'root', '') or die ("Sem conexao com o servidor");
	$db = mysql_select_db("sistema");
	$query_select = "SELECT nome FROM categoria WHERE nome = '$nome'";
	$select = mysql_query($query_select,$conn);
	$array = mysql_fetch_array($select);
	$logarray = $array['nome'];
 
	
	
	
 if($nome == "" || $nome == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo nome deve ser preenchido');window.location.href='form_cadastro_categoria.html';</script>";
 
    }else{
      if($logarray == $nome){
 
        echo"<script language='javascript' type='text/javascript'>alert('Essa nome ja existe');window.location.href='form_cadastro_categoria.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO categoria (nome) VALUES ('$nome')";
        $insert = mysql_query($query,$conn);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Categoria cadastrada com sucesso!');window.location.href='../Exibir/exibir_categoria.php';</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Nao foi possivel cadastrar essa categoria! Tente Novamente');window.location.href='form_cadastro_categoria.html';</script>";
        }
      }
    }
?>
	

	
	</div></body></html>