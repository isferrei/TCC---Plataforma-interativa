<html> 
<head>
<link href="../css/estilo3.css" rel="stylesheet" type="text/css">

<title>Athenas Library</title>

</head>
<body>

<div id="barravoltar">
<a href="Index_cadastros.php"><div class="back"></div></a>
</div>


<div id="texto">

<center>
<form method="Post" action="cadastro_funcionario.php">
		<table width="500">
			<tr class="title"><th colspan="2">Cadastro-Funcion�rio</th></tr>
			
			<tr>
			<td>RG:</td>
			<td><input type="text" name="txtrg" placeholder="Digite seu RG" size="60"></td>
</tr>
			
			<tr>
			<td>Nome:</td>
			<td><input type="text" name="txtnome" placeholder="Digite seu nome" size="60"></td>
			</tr>
			
<tr>
			<td>Telefone:</td>
			<td>
			<input type="text" name="txttelefone" placeholder="Digite seu n�mero (resid�ncial ou celular)" size="60"><br>
			</td>
			</tr>
			
<tr>
			<td>Endere�o:</td>
			<td>
			<input type="text" name="txtendereco" placeholder="Digite o endere�o" size="60">
			</td>
		    </tr>
<tr>
			<td>CPF:</td>
			<td><input type="text" name="txtcpf" placeholder="Digite seu CPF" size="60"></td>
			</tr>
<tr>
			<td>Fun��o:</td>
			<td><input type="text" name="txtfuncao" placeholder="Digite sua fun��o" size="60">
			</tr>	
				
<tr>
			<td colspan="2" align="center">
			<input type="submit" value="Cadastrar">
			<input type="reset" value="Limpar"></td>
</tr>

</form>
</body>
</html>