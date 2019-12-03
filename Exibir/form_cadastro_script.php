<html>
<head>
<link href="../css/estilo3.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">

<title>Cadastrar categoria</title>

</head>


<div id="barravoltar2">
<a href="../Cadastro/Index_cadastros.html"><div class="home"></div></a>
</div>


<?php
include 'conexao.config';
$resposta= mysql_query("SELECT * FROM categoria WHERE cod='$cod'");
while($linha=mysql_fetch_array($resposta)){
$cod=$linha['cod'];
$nome=$linha['nome'];
}
mysql_close()
?>


<div id="texto-conteudo">
<div id="texto">


<center>

<form method='post' action='cadastro_categoria.php'>

		<table width="500">

			<tr>
			<td>Titulo:</td>
			<td><input type="text" name="titulo" placeholder="Digite o titulo" size="60" class="inputtxt"></td>
			</tr>
            
<tr>
			<td>Categoria:</td>
			<td><select name="categoria"  class="inputtxt" placeholder="Selecione a categoria" style=" width: 200px">
			<optgroup label="Categorias">
			<option value=<?php echo $nome; ?>> <?php echo $nome; ?></option>
			</optgroup>
   </select>
   </td></tr>
<tr>
			<td>Chassis:</td>
			<td><input type="text" name="chassis" placeholder="Digite o modelo de chassis" size="60" class="inputtxt"></td>
			</tr>
			
<tr>
			<td>categoria:</td>
			<td><textarea name="categoria" rows=20 cols=50 class="inputtxt"></textarea>
			</tr>	
			
<tr>
			<td colspan="2" align="center">
			<input type="submit" value="Cadastrar">
			<input type="reset" value="Limpar"></td>
		
			</div>
</tr>
</div>
</form>
</html>