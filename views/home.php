<h1 style="text-align:center">Bem-vindos</h1>

<?php
    if(!isset($_SESSION['login'])){ ?>
    <form action="login.php" method="post">
        <div class="form-group">
            <label class="badge badge-success">Usuário</label><br>
            <input class="form-control" type="text" name="usuario" placeholder="Nome do usuário">
        </div>
        <div class="form-group">
            <label class="badge badge-success">Senha</label><br>
            <input class="form-control" type="password" name="senha" placeholder="Digite sua senha">
        </div>
        <div class="form-group">
            <input type="submit" value="Entrar" class="btn btn-success">
        </div>
    </form>
    <div class="form-group">
        <a href="registro.php" class="btn btn-primary">Registrar <i class="fas fa-user-plus"></i></a>
    </div>
    
<?php } ?>
<?php
    if(isset($_GET['erro'])){ ?>

        <div class="alert alert-danger" role="alert">
            Usuário e/ou senha inválidos.
        </div>

<?php } ?>