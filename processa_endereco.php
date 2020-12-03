<?php 

include 'db.php';

$cliente_id = $_POST['cliente_id'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$query = "INSERT INTO enderecos(cliente_id, logradouro, numero, bairro, cep, cidade, estado) VALUES($cliente_id, '$logradouro', $numero, '$bairro', '$cep', '$cidade', '$estado')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=enderecos_cliente&id=' . $cliente_id );
