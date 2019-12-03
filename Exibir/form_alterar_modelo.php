<html>
<head>
<link href="../css/estilo3.css" rel="stylesheet" type="text/css">
<style>
	img{width: 50px; height: 50px;}
</style>
</head>
<body>

<div id="barravoltar2">
<a href="exibir_modelo.php"><div class="home"></div></a>
</div>

<div id="texto-conteudo">
<div id="texto">
<center>

<?php
include 'conexao.config';
$cod = $_GET['txtcodigo'];	
$resposta= mysql_query("SELECT * FROM equipamento WHERE cod='$cod'");
while($linha=mysql_fetch_array($resposta)){
$cpf=$linha['cod'];
$modelo=$linha['modelo'];
$marca=$linha['marca'];
}
mysql_close()
?>


<title>Alterar equipamento</title>

<form method='post' action='alterar_modelo.php'>

<table width="500">
  <tr><th colspan="2"><div id="title" align="center">Alterar equipamento</div></th></tr>
			
			<tr>
			<td>Cod</td>
			<td><input type="text" name="cod" class="inputtxt" size="15" value="<?php echo $cod; ?>" ></td>
			</tr>
	
			<tr>
			<td>Modelo:</td>
			<td><input type="text" name="modelo" size="60" class="inputtxt" value="<?php echo $modelo; ?>" ></td>
			</tr>

			<tr>
			<td>Marca:</td>
			<td><input type="text" name="marca" size="60" class="inputtxt" value="<?php echo $marca; ?>" ></td>
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