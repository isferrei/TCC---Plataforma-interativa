<html> 
<head>  

<link href="../css/estilo3.css" rel="stylesheet" type="text/css">

<div id="barravoltar2">
<a href="../index1.html"><div class="home"></div></a>
</div>


<style>
	img{width: 50px; height: 50px;}
</style>
<title>Exibir equipamento</title>
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


<div id="texto-conteudo">
<div id="texto">



<?php
	$total = 0;
	mysql_connect('localhost','root',''); 
	mysql_select_db('sistema');
	
	$resposta = mysql_query("SELECT * FROM equipamento");
?>


	<table width="850">
		<tr><th colspan="11"><div id="title" align="center">Lista de modelos de roteadores cadastrados no sistema</div></th></tr>
		<tr>
        	<td>Cod</td>
			<td>Modelo</td>
			<td>Marca</td>
		</tr>

<?php
	
	While($linha = mysql_fetch_array($resposta)){
	
		echo "<td>"				.$linha['cod']				."</td>";
		echo "<td>"				.$linha['modelo']			."</td>";
		echo "<td>"				.$linha['marca']			."</td>";

		echo "<td><a href='excluir_modelo.php?txtcodigo=".$linha['cod']."' onclick='return confirmar();'><div id='botex'></div></a></td>";
		echo "<td><a href=form_alterar_modelo.php?txtcodigo=".$linha['cod']."><div id='botal'></div></a></td></tr>";
		
		$total ++;
	}
	
	mysql_close(); 
?>		
		<tr>
			<th colspan="6">Quantidade de resultados encontrados <?php echo $total; ?></th>
			<th colspan="5">Data: <?php echo date("d/m/Y"); ?> </th>
		</tr>
	</table>
	