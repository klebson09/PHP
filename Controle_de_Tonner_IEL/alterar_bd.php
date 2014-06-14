<?php
require_once 'conexao.php';


mysql_query("set names 'utf8'"); 
mysql_select_db($banco, $conexao_bd);
$id = $_GET['id'];
$consulta_id = "SELECT tipo, quantidade FROM brother WHERE `id`=$id"; // consulta no banco de dados
$mostra_tipo = mysql_query($consulta_id, $conexao_bd) or die(mysql_error());
$row_mostra_tipo = mysql_fetch_assoc($mostra_tipo);


?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<meta charset="utf-8" />
	<meta name="Description" content="Controle de Toner" />
	<title>Alterar banco de dados</title>
</head>
<body>
	
<form action="<?=$_SERVER["PHP_SELF"]; echo '?id=' . $id;?>" method="post">
ID <input type="text" name="id" value="<?php echo $id; ?>"><br>
TIPO <input type="text" name="tipo" value="<?php echo $row_mostra_tipo['tipo']; ?>"><br>
QUANTIDADE <input type="text" name="quantidade" id="quantidade" value=""><br>
<input type="button" value="Voltar" onclick='javascript:location.href="alterar.php"'>
<input type="submit" value="Salvar">
</form>

<?php
 if (!empty($_POST['quantidade'])) {
			$quantidade = $_POST['quantidade'];
			$sql = mysql_query("UPDATE  `controle_impressora`.`brother` SET  `quantidade` =  $quantidade WHERE  `brother`.`id` =$id;"); /*linha para cadastrar no banco de dados.*/
			echo "Atualizado com Sucesso";
			} else {
            echo "Por favor, preencha a nova quantidade.";
        }

?>


</body>
</html>