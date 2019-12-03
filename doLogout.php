<?php 
session_start();
unset($_SESSION['cpf']);
echo"<script>window.location.href='index.php'</script>";
?>