<?php

$servidor = 'localhost';
$porta = '3306';
$banco = 'segurapp';
$usuario = 'root';
$senha = 'root12';

//$link = new mysqli($servidor,$usuario,$senha,$banco,$porta);
$link = mysql_connect('localhost:3306', $usuario, $senha);
$db = mysql_select_db($banco);
?>