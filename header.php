<!DOCTYPE html>
<html>
<head>
	<title>Acesso</title>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://kit.fontawesome.com/5e14ab6ba5.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/estilo.css">
	<!-- <link rel="stylesheet" href="css/kabum.css"> -->

</head>

<body>
	<header>
		<div class="container">
			<a href="?pagina=home"><img src="img/free-logos.png" title="Exemplo de Logo" alt="Logo"></a>
			<div id="menu">
				<?php if(isset($_SESSION['login'])){ ?>
					<a href="?pagina=clientes">Clientes</a>
					<a href="logout.php">
						<?php echo $_SESSION['usuario']; ?>
						(sair)
					</a>
				<?php } ?>
			</div>
		</div>
	</header>

	<div id="conteudo" class="container">