<html>
<head>
<link href="../css/estilo3.css" rel="stylesheet" type="text/css">
<style>
	img{width: 50px; height: 50px;}
</style>
</head>
<body>

<div id="barravoltar2">
<a href="exibir_categoria.php"><div class="home"></div></a>
</div>

<div id="texto-conteudo">
<div id="texto">
<center>

<?php
include 'conexao.config';
$cod = $_GET['txtcodigo'];	
$resposta= mysql_query("SELECT * FROM categoria WHERE cod='$cod'");
while($linha=mysql_fetch_array($resposta)){
$cpf=$linha['cod'];
$nome=$linha['nome'];
}
mysql_close()
?>


<title>Alterar Categoria</title>

<form method='post' action='alterar_categoria.php'>

<table width="500">
  <tr><th colspan="2"><div id="title" align="center">Alterar Categoria</div></th></tr>
			
			<tr>
			<td>Cod</td>
			<td><input type="text" name="cod" class="inputtxt" size="15" value="<?php echo $cod; ?>" ></td>
			</tr>
	
			<tr>
			<td>Nome:</td>
			<td><input type="text" name="nome" size="60" class="inputtxt" value="<?php echo $nome; ?>" ></td>
			</tr>


<tr><td>
<input type="submit" value="alterar"></td><td>
<input type="button" onclick="javascript:history.back()" value="cancelar">
<input type="hidden" name="txtcodigo" value="<?php echo $cod;?>">
</td>
</tr>
</form>

</div>
</html>