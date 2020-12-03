<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo cliente</h1>

<form action="processa_cliente.php" method="post">
    <div> 
        <div class="form-group">
            <label class="badge badge-success">Nome cliente</label><br>
            <input class="form-control" type="text" name="nome_cliente" placeholder="Insira o nome do cliente">
        </div>
        <div class="form-group">
            <label class="badge badge-success">Data Nascimento</label><br>
            <input class="form-control" type="date" name="data_nascimento">
        </div>
        <div class="form-group">
            <label class="badge badge-success"">CPF</label><br>
            <input class="form-control" type="text" name="cpf" placeholder="Insira o CPF">
        </div>
        <div class="form-group">
            <label class="badge badge-success">RG</label><br>
            <input class="form-control" type="text" name="rg" placeholder="Insira o RG">
        </div>
        <div class="form-group">
            <label class="badge badge-success">Telefone</label><br>
            <input class="form-control" type="text" name="telefone" placeholder="Insira o Telefone">
        </div>
        <div class="form-group">
            <input class="btn btn-success" class="form-control" type="submit" value="Inserir cliente">
        </div>
    </div>
</form>

<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_clientes)){ ?>
        <?php if($linha['id'] == $_GET['editar']){ ?>

            <h1>Inserir novo cliente</h1>

            <form action="editar_cliente.php" method="post">
                <div>
                    <input type="hidden" name="id" value="<?php echo $linha['id']; ?>" required>
                    
                    <div class="form-group">
                        <label class="badge badge-success">Nome cliente</label><br>
                        <input class="form-control" type="text" name="nome" value="<?php echo $linha['nome']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="badge badge-success">Data Nascimento</label><br>
                        <input class="form-control" type="date" name="data_nascimento" value="<?php echo $linha['data_nascimento']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="badge badge-success">CPF</label><br>
                        <input class="form-control" type="text" name="cpf" value="<?php echo $linha['cpf']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="badge badge-success">RG</label><br>
                        <input class="form-control" type="text" name="rg" value="<?php echo $linha['rg']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="badge badge-success">Telefone</label><br>
                        <input class="form-control" type="text" name="telefone" value="<?php echo $linha['telefone']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" value="Atualizar">
                    </div>
                </div>
            </form> 
			<?php } ?>
	<?php } ?>
<?php } ?>

<?php
    if(isset($_GET['cpf'])){ ?>

        <div class="alert alert-danger" role="alert">
            CPF inválido.
        </div>

<?php } ?>

<!-- 
<div class="form-group">
            <input type="submit" class="btn btn-success" value="Registrar">
</div> -->