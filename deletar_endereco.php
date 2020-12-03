<?php

include 'db.php';

$id = $_GET['id'];
$cliente_id = $_GET['cliente_id'];


$query = "DELETE FROM enderecos WHERE id = $id";

var_dump($query);
mysqli_query($conexao, $query);

header('location:index.php?pagina=enderecos_cliente&id=' . $cliente_id);