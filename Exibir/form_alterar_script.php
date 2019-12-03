<?php
	include_once("conexao.php");
?>


<html>
<head>
<link href="../css/estilo3.css" rel="stylesheet" type="text/css">
<style>
	img{width: 50px; height: 50px;}
</style>
</head>
<body>

<div id="barravoltar2">
<a href="exibir_script.php"><div class="home"></div></a>
</div>
<div id="texto-conteudo">
<div id="texto">
<center>

<?php
include 'conexao.config';
$cod = $_GET['txtcodigo'];	
$resposta= mysql_query("SELECT * FROM script WHERE cod='$cod'");
while($linha=mysql_fetch_array($resposta)){
$cod=$linha['cod'];
$titulo=$linha['titulo'];
$categoria=$linha['categoria'];
$modelo=$linha['modelo'];
$script=$linha['script'];
$versao=$linha['versao'];

}
mysql_close()
?>


<title>Alterar Script</title>

<form method='post' action='alterar_script.php'>

<table width="500">
  <tr><th colspan="2"><div id="title" align="center">Alterar Script</div></th></tr>
			
			<tr>
			<td>Código:</td>
			<td><input type="text" name="cod" placeholder="Digite o código do script" class="inputtxt" size="15" value="<?php echo $cod; ?>" ></td>
			</tr>
	
			<tr>
			<td>Titulo:</td>
			<td><input type="text" name="titulo" placeholder="Digite o titulo" size="60" class="inputtxt" value="<?php echo $titulo; ?>" ></td>
			</tr>
			
			<tr>
			<td>Categoria:</td>
			<td><select name="categoria"  class="inputtxt">
  <option value=<?php echo $categoria; ?>> <?php echo $categoria; ?></option>
  <?php
						$sql = "SELECT * FROM categoria";
						$resposta = mysqli_query($conn, $sql);
						while($linha = mysqli_fetch_assoc($resposta)){ ?>
							<option value="<?php echo $linha['nome']; ?>"><?php echo $linha['nome']; ?></option> <?php
						}
					?>
   </select>
  </td></tr>
			
			<tr>
			<td>modelo:</td>
			<td><select name="modelo"  class="inputtxt">
  <option value=<?php echo $modelo; ?>> <?php echo $modelo; ?></option>
			<?php
						$sql = "SELECT * FROM equipamento";
						$resposta = mysqli_query($conn, $sql);
						while($linha = mysqli_fetch_assoc($resposta)){ ?>
							<option value="<?php echo $linha['modelo']; ?>"><?php echo $linha['modelo']; ?></option> <?php
						}
					?>
			</td></tr>
			
<tr>
			<td>Script:</td>
			<td><textarea name="script" rows=20 cols=50 class="inputtxt" value="<?php echo $script; ?>"><?php echo $script; ?> </textarea>
			</tr>
<tr>
			<td>Versao:</td>
			<td><input type="text" name="versao" placeholder="Digite a versao" size="60" class="inputtxt" value="<?php echo $versao; ?>" ></td>
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