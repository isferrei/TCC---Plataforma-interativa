<html> 
<head>  

<link href="../css/estilo3.css" rel="stylesheet" type="text/css">
<style>
	img{width: 50px; height: 50px;}
</style>
<title>Exibir Script</title>
<script>
function confirmar(){
if (confirm("Tem certeza que deseja excluir ?")){
return true;
}else{
return false;
}
}
</script>


</head>
<body>

<div id="barravoltar2">
<a href="../index1.html"><div class="home"></div></a>
</div>

<div id="texto-conteudo">
<div id="texto">



<?php
	$total = 0;
	mysql_connect('localhost','root',''); 
	mysql_select_db('sistema');
	
	$resposta = mysql_query("SELECT * FROM script");
?>


	<table width="1400">
		<tr><th colspan="14"><div id="title" align="center">Lista de scripts cadastrados no sistema</div></th></tr>
		<tr>
        	<td>Codigo</td>
			<td>Titulo</td>
			<td>Categoria</td>
			<td>Equipamento</td>
            <td>Script</td>
			<td>Versao</td>
		</tr>

<?php
	
	While($linha = mysql_fetch_array($resposta)){
	
		echo "<td>"				.$linha['cod']				."</td>";
		echo "<td>"				.$linha['titulo']			."</td>";
		echo "<td>"				.$linha['categoria']		."</td>";
		echo "<td>"				.$linha['modelo']			."</td>";
		echo "<td><textarea rows=10 cols=70>"				.$linha['script']			."</textarea></td>";
		echo "<td>"				.$linha['versao']			."</td>";

		echo "<td><a href='excluir_script.php?txtcodigo=".$linha['cod']."' onclick='return confirmar();'><div id='botex'></div></a></td>";
		echo "<td><a href=form_alterar_script.php?txtcodigo=".$linha['cod']."><div id='botal'></div></a></td></tr>";
		
		$total ++;
	}
	
	mysql_close(); 
?>		
		<tr>
			<th colspan="6">Quantidade de resultados encontrados <?php echo $total; ?></th>
			<th colspan="5">Data: <?php echo date("d/m/Y"); ?> </th>
		</tr>
	</table>
	