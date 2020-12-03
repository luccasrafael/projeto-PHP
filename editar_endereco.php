<?php

include 'db.php';


$id = $_POST['id'];
$cliente_id = $_POST['cliente_id'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$query = "  UPDATE enderecos 
            SET logradouro = '$logradouro', 
            numero = '$numero',
            bairro = '$bairro',
            cep = '$cep',
            cidade = '$cidade',
            estado = '$estado'
            WHERE id = $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=enderecos_cliente&id=' . $cliente_id );