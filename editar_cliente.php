<?php

include 'db.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];

$query = "  UPDATE clientes 
            SET nome = '$nome', 
            data_nascimento = '$data_nascimento',
            cpf = '$cpf',
            rg = '$rg',
            telefone = '$telefone'
            WHERE id = $id";

mysqli_query($conexao, $query);
header('location:index.php?pagina=clientes');