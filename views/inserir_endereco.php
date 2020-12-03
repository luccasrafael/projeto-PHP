<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo endereço</h1>

<form action="processa_endereco.php" method="post">
    <div>
        <input type="hidden" name="cliente_id" value="<?php echo $_GET['id']; ?>">
        <div class="form-group">
            <label class="badge badge-success">Logradouro</label><br>
            <input class="form-control" type="text" name="logradouro" placeholder="Insira o nome da rua">
        </div>
        <div class="form-group">
            <label class="badge badge-success">numero</label><br>
            <input class="form-control" type="number" name="numero" placeholder="Insira o numero">
        </div>
        <div class="form-group">
            <label class="badge badge-success">bairro</label><br>
            <input class="form-control" type="text" name="bairro" placeholder="Insira o Bairro">
        </div>
        <div class="form-group">
            <label class="badge badge-success">cep</label><br>
            <input class="form-control" type="text" name="cep" placeholder="Insira o CEP">
        </div>
        <div class="form-group">
            <label class="badge badge-success">Cidade</label><br>
            <input class="form-control" type="text" name="cidade" placeholder="Insira a cidade">
        </div>
        <div class="form-group">
            <label class="badge badge-success">Estado</label><br>
            <input class="form-control" type="text" name="estado" placeholder="Insira o estado">
        </div>
        <div class="form-group">
            <input class="btn btn-success" class="form-control" type="submit" value="Inserir endereço">
        </div>
    </div>
</form>

<?php } else { ?>
    <?php
        $id = $_GET['editar'];
        $query = "SELECT * FROM enderecos WHERE id = $id";
        $consulta_enderecos = mysqli_query($conexao, $query);
    ?>
    <?php while($linha = mysqli_fetch_array($consulta_enderecos)){ ?>
        <?php if($linha['id'] == $_GET['editar']){ ?>

            <h1>Editar endereço</h1>

                <form action="editar_endereco.php" method="post">
                    <div>
                        <input type="hidden" name="cliente_id" value="<?php echo $linha['cliente_id']; ?>">
                        <input type="hidden" name="id" value="<?php echo $linha['id']; ?>" required>
                        <div class="form-group">
                            <label class="badge badge-success">Logradouro</label><br>
                            <input class="form-control" type="text" name="logradouro" value="<?php echo $linha['logradouro']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="badge badge-success">numero</label><br>
                            <input class="form-control" type="text" name="numero" value="<?php echo $linha['numero']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="badge badge-success">bairro</label><br>
                            <input class="form-control" type="text" name="bairro" value="<?php echo $linha['bairro']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="badge badge-success">cep</label><br>
                            <input class="form-control" type="text" name="cep" value="<?php echo $linha['cep']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="badge badge-success">Cidade</label><br>
                            <input class="form-control" type="text" name="cidade" value="<?php echo $linha['cidade']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="badge badge-success">Estado</label><br>
                            <input class="form-control" type="text" name="estado" value="<?php echo $linha['estado']; ?>" required>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" value="Editar endereço">
                        </div>
                    </div>
                </form> 
			<?php } ?>
	<?php } ?>
<?php } ?>


<div class="form-group">
</div>