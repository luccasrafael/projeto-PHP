<?php

# Base de dados
include 'db.php';

$usuario = addslashes($_POST['usuario']);

$senha = md5($_POST['senha']);
$confirmar_senha = md5($_POST['confirmar_senha']);

if ($senha == $confirmar_senha ) {
    $query = "INSERT INTO usuarios(usuario, senha) VALUES('$usuario', '$senha')";
    $consulta = mysqli_query($conexao, $query);
    header('location:index.php');
} else {
    header('location:registro.php?erro');
}