<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<meta charset="utf-8" />
	<meta name="Description" content="Controle de Toner" />
	<title>Alterar banco de dados</title>
</head>
<body>
<?php
require_once 'conexao.php';


mysql_query("set names 'utf8'"); 
mysql_select_db($banco, $conexao_bd);
$query_consultasql = "SELECT * FROM brother"; // consulta no banco de dados
$mostradados = mysql_query($query_consultasql, $conexao_bd) or die(mysql_error());
$row_mostradados = mysql_fetch_assoc($mostradados);

//  $query_consultasql_update = "UPDATE `controle_impressora`.`brother` SET `quantidade` = '$subtracao' WHERE `brother`.`id` ='$exibe_id';";


?>
 <?php echo "----------------------------------------------------------------------------------"?> <br>
  
  
<?php
do { ?>

<?php echo $row_mostradados['id'];?> 
<?php echo $row_mostradados['tipo'];?> 
<?php echo $row_mostradados['quantidade'];?> 


<input type="button" value="Alterar" onclick='javascript:location.href="<?php echo 'alterar_bd.php?id=' . $row_mostradados['id']; ?>"'>

<br>
<?php } while ($row_mostradados = mysql_fetch_assoc($mostradados)); ?><!--fecha o bloco while-->


</body>
</html>