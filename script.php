
<?php
session_start();
if(!isset($_SESSION['cpf'])){
	header("location: index.php");
}
?>

<?php
	include_once("conexao.php");
?>


<html>	
<head>
<title>Easy Script</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Prata" rel="stylesheet">
<link rel="stylesheet" href="css/csshome.css">

</head>

<body bgcolor="#F5F5F5">
 <ul div class="menu">
<div id="logo">EASYSCRIPT
</div>
<div id="upbar">
<div id="visitante">Bem-vindo
<?php 
 $cpf   = $_SESSION['cpf'];

 $sql = "SELECT * FROM pessoa WHERE cpf = '$cpf'";
 $resposta = mysqli_query($conn, $sql);
 while($linha = mysqli_fetch_assoc($resposta)){
       $cpf = $linha['cpf'];

	echo $linha['nome'];	

?>
</div>
</div> 
</ul>
<?php
	echo "<div class='dropdown'><button class='dropbtn'><img src='ícones/menu.png'></button><div class='dropdown-content'><a href='Exibir/form_alterar_senha.php?txtcodigo=".$linha['cpf']."'>Alterar senha</a><a href=doLogout.php>Sair</a></div></div>";
	}
?>
<div id="texto-conteudo">



<div class="sidebar" align="left">
<div id="title1">MODELOS</div>
<ul class="sidemenu">
	<?php
	include 'Exibir/conexao.config';
	if(!isset($_GET['filtro']) or $_GET['filtro']==null){
	$resposta = mysql_query("SELECT * FROM script");
	}else{
	$filtro = $_GET['filtro'];
	$resposta = mysql_query("SELECT * FROM script where modelo = '$filtro'") or die (mysql_error());
	}
	?>
<a href="script.php?filtro=CISCO1941-K9"><li>
CISCO1941-K9
</li></a>
<a href="script.php?filtro=C881"><li>
CISCO881
</li></a>
<a href="script.php?filtro=CISCO892"><li>
CISCO892
</li></a>

</ul>
</div>	

<div id="conteudo" style="height: 1000px;"><table align="center">
	
	<tr>
		<td> 

   <?php
	include 'Exibir/conexao.config';
	if(!isset($_GET['filtro']) or $_GET['filtro']==null){
	$resposta = mysql_query("SELECT * FROM script");
	}else{
	$filtro = $_GET['filtro'];
	$resposta = mysql_query("SELECT * FROM script where modelo = '$filtro'") or die (mysql_error());
	}
	while($linha = mysql_fetch_array($resposta)){ 
	?>

	<div style="float:left; margin: 88px;">
		
		<div class="icon"><img src="ícones/file.png"></div>
		<p class="desc"><h1 class="desc"><?php echo $linha['categoria']?></h1></p>
		<p class="versao">Versão: <?php echo $linha['versao']?></p>
		<br><textarea rows=80 cols=70><?php echo $linha['script']?></textarea>

	</div>
	<?php
	}
	?>
		</td>
	</tr>
</table>
</body>

