<meta charset="utf-8">

<link href="../css/estilo3.css" rel="stylesheet" type="text/css">

<title>Alterar Script</title>

</head>
<body>

<div id="barravoltar">
<a href="exibir_script.php"><div class="back"></div></a>
</div>
<div id="texto">
<?php
	include'conexao.config';
	
	$cod  		= $_POST['cod'];
	$titulo 	= $_POST['titulo'];
	$categoria 	= $_POST['categoria'];
	$modelo 	= $_POST['modelo'];
	$script     = $_POST['script'];
	$versao     = $_POST['versao'];
	
	mysql_query("UPDATE script SET cod='$cod', titulo='$titulo', categoria='$categoria', modelo='$modelo', script='$script', versao='$versao' WHERE cod='$cod'") or die (mysql_error());
	
	if(mysql_affected_rows() == 1){
		echo "<script>
					alert('Script alterado com sucesso!');
					location.href='exibir_script.php';	
				</script>";
	}else{
		echo "<script>
					alert('Não foi possível realizar a alteração');
					location.href='exibir_script.php';	
				</script>";
	}	
	mysql_close();
	?>