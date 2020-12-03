<?php

# Cabeçalho
include 'header.php';

# Conteúdo da página
if (!isset($_SESSION['login'])) {
    ?>
    
<div class="wrapper">
    <h2>Registro</h2>
    <p>Preencha o formulário para criar sua conta.</p>
    <form action="processa_registro.php" method="post">
        <div class="form-group">
            <label class="badge badge-success">Usuário</label>
            <input type="text" name="usuario" class="form-control" placeholder="Insira o nome de usuário">
        </div>    
        <div class="form-group">
            <label class="badge badge-success">Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Insira a senha">
        </div>
        <div class="form-group ">
            <label class="badge badge-success">Confirmar Senha</label>
            <input type="password" name="confirmar_senha" class="form-control" placeholder="Confirme sua senha">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Registrar">
        </div>
        <p>Já tem uma conta? <a class="btn btn-primary" href="index.php">Acesse <i class="fas fa-sign-in-alt"></i></a></p>
    </form>
</div>

<?php
    if(isset($_GET['erro'])){ ?>

        <div class="alert alert-danger" role="alert">
            Senhas não conferem.
        </div>

<?php } ?>

<?php
} 
# Rodapé
include 'footer.php';

?>
