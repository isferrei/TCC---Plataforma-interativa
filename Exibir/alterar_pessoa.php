<meta charset="utf-8">

<link href="../css/estilo3.css" rel="stylesheet" type="text/css">

<title>Alterar Admin</title>

</head>
<body>

<div id="barravoltar">
<a href="exibir_pessoa.php"><div class="back"></div></a>
</div>
<div id="texto">
<?php
	include'conexao.config';
	
	$cpf  		= $_POST['cpf'];
	$nome 		= $_POST['nome'];
	$senha      = $_POST['senha'];
	$email      = $_POST['email'];
	
	mysql_query("UPDATE pessoa SET cpf='$cpf', nome='$nome', senha='$senha', email='$email' WHERE cpf='$cpf'") or die (mysql_error());
	
	if(mysql_affected_rows() == 1){
		echo "<script>
					alert('Usuario alterado com sucesso!');
					location.href='exibir_pessoa.php';	
				</script>";
	}else{
		echo "<script>
					alert('Não foi possível realizar a alteração');
					location.href='exibir_pessoa.php';	
				</script>";
	}	
	mysql_close();
	?>