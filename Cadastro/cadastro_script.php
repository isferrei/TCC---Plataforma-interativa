<link href="../css/estilo3.css" rel="stylesheet" type="text/css">

<title>Cadastro Script</title>
<meta charset="utf-8">

</head>
<body>

<div id="barravoltar">
<a href="Index_cadastros.php"><div class="back"></div></a>
</div>
<div id="texto">


<?php 
	session_start();
	
	$titulo = $_POST['titulo'];
	$categoria = $_POST['categoria'];
	$modelo = $_POST['modelo'];
	$script = $_POST['script'];
	$versao = $_POST['versao'];	

	$conn = mysql_connect('localhost', 'root', '') or die ("Sem conexao com o servidor");
	$db = mysql_select_db("sistema");
	$query_select = "SELECT titulo FROM script WHERE titulo = '$titulo'";
	$select = mysql_query($query_select,$conn);
	$array = mysql_fetch_array($select);
	$logarray = $array['titulo'];
 
	
	
	
 if($titulo == "" || $titulo == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo titulo deve ser preenchido');window.location.href='form_cadastro_script.php';</script>";
 
    }else{
      if($logarray == $titulo){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse titulo ja existe');window.location.href='form_cadastro_script.php';</script>";
        die();
 
      }else{
        $query = "INSERT INTO script (titulo,categoria,modelo,script,versao) VALUES ('$titulo','$categoria','$modelo','$script','$versao')";
        $insert = mysql_query($query,$conn);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Script cadastrado com sucesso!');window.location.href='../Exibir/exibir_script.php';</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Nao foi possivel cadastrar esse Script');window.location.href='form_cadastro_script.php';</script>";
        }
      }
    }
?>