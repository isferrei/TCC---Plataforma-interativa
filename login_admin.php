<meta charset="utf-8">
<body bgcolor="dfdfdf">


<?php 
	session_start();

	$cpf = $_POST['cpf'];
	$senha = $_POST['senha'];
	
	$conn = mysql_connect('localhost', 'root', '') or die ("Sem conexão com o servidor");
	$select = mysql_select_db("sistema");
	
	$result = mysql_query("SELECT * FROM admin WHERE cpf= '$cpf' AND senha = '$senha'") or die (mysql_error());
	if(mysql_num_rows($result) > 0){
		session_start();
		$linha=mysql_fetch_assoc($result);
		$_SESSION['cpf'] = $linha['cpf'];
		header('location:index1.php');
	}else{
		echo"
			<script>
				alert('Admin ou senha não encontrados!');
				history.back();
			</script>
		";	
			
	}
?>


