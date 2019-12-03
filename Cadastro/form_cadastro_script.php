<?php
	include_once("conexao.php");
?>

<html>
<head>
<link href="../css/estilo3.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">

<title>Cadastrar Script</title>

</head>

<div id="barravoltar2">
<a href="../index1.html"><div class="home"></div></a>
</div>


<div id="texto-conteudo">
<div id="texto">


<center>

<form method='post' action='cadastro_script.php'>

		<table width="500">

			<tr>
			<td>Titulo:</td>
			<td><input type="text" name="titulo" placeholder="Digite o titulo" size="60" class="inputtxt"></td>
			</tr>
            
<tr>
			<td>Categoria:</td>
			<td>
			<select name="categoria" class="inputtxt">
					<option>Categorias</option>
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
			<td>Equipamentos:</td>
			<td><select name="modelo" class="inputtxt">
					<option>Modelos</option>
					<?php
						$sql = "SELECT * FROM equipamento";
						$resposta = mysqli_query($conn, $sql);
						while($linha = mysqli_fetch_assoc($resposta)){ ?>
							<option value="<?php echo $linha['modelo']; ?>"><?php echo $linha['modelo']; ?></option> <?php
						}
					?>
				</select></td>
			</tr>
			
<tr>
			<td>Script:</td>
			<td><textarea name="script" rows=20 cols=50 class="inputtxt"></textarea>
			</tr>	

<tr>
			<td>Versao:</td>
			<td><input type="text" name="versao" placeholder="Versao" size="5" class="inputtxt"></td>
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