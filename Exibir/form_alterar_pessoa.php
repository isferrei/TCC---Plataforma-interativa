<html>
<head>
<link href="../css/estilo3.css" rel="stylesheet" type="text/css">
<style>
	img{width: 50px; height: 50px;}
</style>
</head>
<body>

<div id="barravoltar2">
<a href="exibir_pessoa.php"><div class="home"></div></a>
</div>

<div id="texto-conteudo">
<div id="texto">
<center>

<?php
include 'conexao.config';
$cpf = $_GET['txtcodigo'];	
$resposta= mysql_query("SELECT * FROM pessoa WHERE cpf='$cpf'");
while($linha=mysql_fetch_array($resposta)){
$cpf=$linha['cpf'];
$nome=$linha['nome'];
$senha=$linha['senha'];
$email=$linha['email'];
}
mysql_close()
?>


<title>Alterar Usuario</title>

<form method='post' action='alterar_pessoa.php'>

<table width="500">
  <tr><th colspan="2"><div id="title" align="center">Alterar Usuario</div></th></tr>
			
			<tr>
			<td>CPF:</td>
			<td><input type="text" name="cpf" placeholder="Digite o CPF:" class="inputtxt" size="15" value="<?php echo $cpf; ?>" ></td>
			</tr>
	
			<tr>
			<td>Nome:</td>
			<td><input type="text" name="nome" placeholder="Digite o nome" size="60" class="inputtxt" value="<?php echo $nome; ?>" ></td>
			</tr>
			
			<tr>
			<td>Senha:</td>
			<td><input type="text" name="senha" placeholder="Digite a senha" size="60" class="inputtxt" value="<?php echo $senha; ?>" >
  			</td></tr>

  			<tr>
			<td>Email:</td>
			<td><input type="text" name="email" placeholder="Digite o email" size="60" class="inputtxt" value="<?php echo $email; ?>" ></td>
			</tr>

<tr><td>
<input type="submit" value="alterar"></td><td>
<input type="button" onclick="javascript:history.back()" value="cancelar">
<input type="hidden" name="txtcodigo" value="<?php echo $cpf;?>">
</td>
</tr>
</form>

</div>
</html>