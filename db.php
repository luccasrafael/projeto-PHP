<?php

$server = "localhost";
$user = "root";
$passwd = "";
$db = "sistema";

$conexao = mysqli_connect($server, $user, $passwd, $db);

$query_clientes = "SELECT * FROM clientes";

$consulta_clientes = mysqli_query($conexao, $query_clientes);
