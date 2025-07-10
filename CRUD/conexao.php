<?php
//ARQUIVO DE CONEXÃO COM SQL

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'Senha@123');
define('DB', 'test');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possivel conectar');

?>