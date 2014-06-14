<?php

$host = "localhost";
$banco = "controle_impressora";
$usuario = "root";
$senha = "";
$conexao_bd = mysql_pconnect($host, $usuario, $senha) or trigger_error(mysql_error(),E_USER_ERROR); 
?>