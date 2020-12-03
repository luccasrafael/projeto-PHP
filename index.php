<?php

#Inicio da sessão
session_start();

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	} else {
		$pagina = 'clientes';
	}
} else {
	$pagina = 'home';
}

switch($pagina){
	case 'clientes': include 'views/clientes.php'; break;
	case 'inserir_cliente': include 'views/inserir_cliente.php'; break;
	case 'enderecos_cliente': include 'views/enderecos_cliente.php'; break;
	case 'inserir_endereco': include 'views/inserir_endereco.php'; break;
	default: include 'views/home.php'; break;
}

# Rodapé
include 'footer.php';
