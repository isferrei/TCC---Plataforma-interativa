<meta charset="utf-8">

<?php

	$con = mysql_connect("127.0.0.1", "root", "");
	$select = mysql_select_db("sistema");
	
	$cod = $_GET['txtcodigo'];	
	
  $sql = "DELETE FROM equipamento WHERE cod='$cod'" or die (mysql_error());
  $result = mysql_query($sql);
	if(mysql_affected_rows()==1){
          echo "<script>
					alert('equipamento excluído com sucesso!');
					location.href='exibir_modelo.php';	
				</script>";
 }
?>