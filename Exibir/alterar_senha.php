<meta charset="utf-8">

<link href="../css/estilo3.css" rel="stylesheet" type="text/css">

<title>Alterar Senha</title>

</head>
<body>

<div id="texto">
<?php
	include'conexao.config';
	
	$cpf  		= $_POST['cpf'];
	$senha      = $_POST['senha'];
	
	mysql_query("UPDATE pessoa SET cpf='$cpf', senha='$senha' WHERE cpf='$cpf'") or die (mysql_error());
	
	if(mysql_affected_rows() == 1){
		echo "<script>
					alert('Senha alterada com sucesso!');
					location.href='../script.php';	
				</script>";
	}else{
		echo "<script>
					alert('Não foi possível realizar a alteração');
					location.href='form_alterar_senha.php';	
				</script>";
	}	
	mysql_close();
	?>