<?php
session_start();
if(!isset($_SESSION['cpf'])){
	header("location: formlogin.html");
}
?>
<?php
  include_once("conexao.php");
?>
<!doctype html>
<html>
<head>

<link href="css/estilo2.css" rel="stylesheet" type="text/css">

<meta charset="utf-8">

<title> Sistema </title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>

<?php 
 $cpf   = $_SESSION['cpf'];

 $sql = "SELECT * FROM admin WHERE cpf = '$cpf'";
 $resposta = mysqli_query($conn, $sql);
 while($linha = mysqli_fetch_assoc($resposta)){
       $cpf = $linha['cpf'];

echo "<div id='logout'><a href=Logout.php><img src='ícones/back.png'></a></div>";
  }
?>


<div id="sistem" align="center">
SISTEMA
</div>

<div id="center">
<div id="menu-bar">

  <div class="dropdown">
  <div class="icon"><i class="fas fa-archive"></i></div>
  <div class="font">Cadastrar</div><button class="dropbtn">
  <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
  <a href="Cadastro/form_cadastro_admin.html">Admin</a>  
  <a href="Cadastro/form_cadastro_script.php">Script</a>
  <a href="Cadastro/form_cadastro_categoria.html">Categoria</a>
  <a href="Cadastro/form_cadastro_modelo.html">Equipamento</a>
  <a href="Cadastro/form_cadastro_pessoa.html">Usuario</a>
    </div>
  </div>
  <div class="dropdown">
    <div class="icon"><i class="fas fa-folder-open"></i></div>
    <div class="font">Exibir</div><button class="dropbtn">
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
   <a href="Exibir/exibir_admin.php">Admin</a>
   <a href="Exibir/exibir_script.php">Script</a>
   <a href="Exibir/exibir_categoria.php">Categoria</a>
   <a href="Exibir/exibir_modelo.php">Equipamento</a>
   <a href="Exibir/exibir_pessoa.php">Usuario</a>
    </div>
  </div> 
</div>


</body>
</html>
