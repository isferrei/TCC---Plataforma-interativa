<meta charset="utf-8">

<?php

	$con = mysql_connect("127.0.0.1", "root", "");
	$select = mysql_select_db("sistema");
	
	$cpf = $_GET['txtcodigo'];	
	
  $sql = "DELETE FROM pessoa WHERE cpf='$cpf'" or die (mysql_error());
  $result = mysql_query($sql);
	if(mysql_affected_rows()==1){
          echo "<script>
					alert('Usuario excluído com sucesso!');
					location.href='exibir_pessoa.php';	
				</script>";
 }
?>