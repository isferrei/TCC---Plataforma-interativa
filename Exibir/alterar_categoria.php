<meta charset="utf-8">

<link href="../css/estilo3.css" rel="stylesheet" type="text/css">

<title>Alterar Categoria</title>

</head>
<body>

<div id="barravoltar2">
<a href="exibir_categoria.php"><div class="home"></div></a>
</div>
<div id="texto">
<?php
	include'conexao.config';
	
	$cod  		= $_POST['cod'];
	$nome 		= $_POST['nome'];
	
	mysql_query("UPDATE categoria SET cod='$cod', nome='$nome' WHERE cod='$cod'") or die (mysql_error());
	
	if(mysql_affected_rows() == 1){
		echo "<script>
					alert('Categoria alterada com sucesso!');
					location.href='exibir_categoria.php';	
				</script>";
	}else{
		echo "<script>
					alert('Não foi possível realizar a alteração');
					location.href='exibir_categoria.php';	
				</script>";
	}	
	mysql_close();
	?>