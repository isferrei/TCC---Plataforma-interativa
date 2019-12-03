
<?php
session_start();
if(!isset($_SESSION['nome'])){
	header("location: formlogin-usuario.html");
}
?>



<html>	
<head>
<title>Easy Script</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Prata" rel="stylesheet">
<link rel="stylesheet" href="css/csshome.css">

</head>

<body bgcolor="#F5F5F5">

<?php
	$cod = $_GET['cod'];
	include 'conexao.php';
	$resposta = mysql_query("SELECT * FROM script where  cod='$cod'");
	$linha = mysql_fetch_array($resposta); 
?>


 <ul div class="menu">
 <li div class="menu"><a href="script.php" div class="menu">Script</a></li>
 <li div class="menu"><a href="index.php" div class="menu">Home</a></li>
<div id="logo">EASYSCRIPT
</div>
 
</ul>
<div id="texto-conteudo">
<div id="upbar">
<div id="visitante">Olá 
<?php 
if(!isset($_SESSION['nome'])){
?>
visitante!<a href="formlogin-usuario.html">
Faça seu login</a> ou <a href="cadastro_pessoa.html">Cadastre-se</a>
<?php
}else{
	echo $_SESSION['nome'];	
	echo '<a href="doLogout.php?token='.md5(session_id()).'">, Sair</a>';
}
?>
</div>
</div>


<div class="sidebar" align="left">
<div id="title1">MODELOS</div>
<ul class="sidemenu">
  <li></li>
			<?php
						$sql = "SELECT * FROM script";
						$resposta = mysqli_query($conn, $sql);
						while($linha = mysqli_fetch_assoc($resposta)){ ?>
						<li><a href="script.php?filtro=<?php echo $linha['modelo']; ?>" div class="sidemenu">
						<?php echo $linha['modelo']; ?></a></li>
					<?php
						}
					?>

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

	<div style="float:left; margin: 65px;">
		
		<p class="desc"><h1><?php echo $linha['modelo']?></h1></p>
		<br><p class="desc"><h1><?php echo $linha['categoria']?></h1></p>
		<textarea rows=80 cols=70><?php echo $linha['script']?></textarea>

	</div>
	<?php
	}
	?>
		</td>
	</tr>
</table>
</body>
