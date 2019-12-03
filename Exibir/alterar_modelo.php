<meta charset="utf-8">

<link href="../css/estilo3.css" rel="stylesheet" type="text/css">

<title>Alterar Modelo</title>

</head>
<body>

<div id="barravoltar2">
<a href="exibir_modelo.php"><div class="home"></div></a>
</div>
<div id="texto">
<?php
	include'conexao.config';
	
	$cod  		= $_POST['cod'];
	$modelo 	= $_POST['modelo'];
	$marca 		= $_POST['marca'];

	mysql_query("UPDATE equipamento SET cod='$cod', modelo='$modelo', marca='$marca' WHERE cod='$cod'") or die (mysql_error());
	
	if(mysql_affected_rows() == 1){
		echo "<script>
					alert('Equipamento alterado com sucesso!');
					location.href='exibir_modelo.php';	
				</script>";
	}else{
		echo "<script>
					alert('Não foi possível realizar a alteração');
					location.href='exibir_modelo.php';	
				</script>";
	}	
	mysql_close();
	?>