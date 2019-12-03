<html>
<head>
<style type="text/css">
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color:#DFDFDF;
	margin: 0;
	padding: 0px 0px 0px 0px;
	color: #000;
}

#conteudolog{ background-color:#FFF;
alignment-adjust:central;
	box-shadow:#333;
	padding: 20px 10px 10px 15px;
	width: 300px auto;
	background-color: #FFF;
	margin: 10px 0px 0px 400px;
	padding: 50px 50px 50px 50px;
	height:900px auto;
	float:left;
	position:relative;}
	
	.entrar{background-color:#d73930;
	margin:8% 0% 0% 1%;
	border:none;
	width:90px;
	height:30px;
	color:#FFF;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size:15px;}
	
	.entrar:hover{background-color: #B03F3F;
	margin:8% 0% 0% 1%;
	border:none;
	width:90px;
	height:30px;
	color:#FFF;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size:15px;}
	
	.entrar:active{background-color: #333;
	margin:8% 0% 0% 1%;
	border:none;
	width:90px;
	height:30px;
	color:#FFF;
	font-family:Gotham, Helvetica Neue, Helvetica, "Arial", sans-serif;
	font-size:15px;}
	
	.alterar{background-color:#d73930;
	margin:1.8% 0% 0% 1%;
	border:none;
	width:90px;
	height:30px;
	color:#FFF;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size:15px;}
	
	.alterar:hover{background-color: #B03F3F;
	margin:1.8% 0% 0% 1%;
	border:none;
	width:90px;
	height:30px;
	color:#FFF;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size:15px;}
	
	.alterar:active{background-color: #333;
	margin:1.8% 0% 0% 1%;
	border:none;
	width:90px;
	height:30px;
	color:#FFF;
	font-family:Gotham, Helvetica Neue, Helvetica, "Arial", sans-serif;
	font-size:15px;}
	

	.inputtxt{border-color:#F3F3F3;
	padding: 5px 0px 5px 5px;
	border-width:1px;
	border-style: solid;
	background-color:#EEE;}
	
	#esquerdo{float:right;
	width:300px;}
	

	</style>

<title>Alterar Senha</title>
</head>
<body>

<div id="conteudolog" align="center">
<div id="texto">
<center>

<?php
include 'conexao.config';
$cpf = $_GET['txtcodigo'];	
$resposta= mysql_query("SELECT * FROM pessoa WHERE cpf='$cpf'");
while($linha=mysql_fetch_array($resposta)){
$cpf=$linha['cpf'];
$senha=$linha['senha'];
}
mysql_close()
?>




<form method='post' action='alterar_senha.php'>

<table width="500">
  <tr><th colspan="2"><div id="title" align="center">Alterar Senha</div><br></th></tr>
			
			<tr>
			<td>CPF:</td>
			<td><input type="text" name="cpf" class="inputtxt" size="15" value="<?php echo $cpf; ?>" ></td>
			</tr>
	
			<tr>
			<td>Senha:</td>
			<td><input type="text" name="senha" size="60" class="inputtxt" value="<?php echo $senha; ?>" >
  			</td></tr>

<tr><td>
<input type="submit" value="alterar" class="entrar"></td>
<td>
<input type="button"  class="alterar" onclick="javascript:history.back()" value="cancelar">
<input type="hidden" name="txtcodigo" value="<?php echo $cpf;?>">
</td>
</tr>
</form>

</div>
</html>