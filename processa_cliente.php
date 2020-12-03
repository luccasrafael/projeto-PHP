<?php 


include 'db.php';

include './config/validacao.php';

$nome_usuario = $_POST['nome_cliente'];
$data_nascimento = $_POST['data_nascimento'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];

if (!validaCPF($cpf)){
    header('location:index.php?pagina=inserir_cliente&cpf');
} else {
    $query = "INSERT INTO clientes(nome, data_nascimento, cpf, rg, telefone) VALUES('$nome_usuario', '$data_nascimento', '$cpf', '$rg', '$telefone')";
    
    mysqli_query($conexao, $query);
    
    header('location:index.php?pagina=clientes');
}

