<?php
    $cliente_id = $_GET['id'];
    $query = "SELECT * FROM enderecos WHERE cliente_id = '$cliente_id'";
    $consulta_enderecos = mysqli_query($conexao, $query);
?>
<a class="btn btn-success" href="?pagina=inserir_endereco&id=<?php echo $cliente_id; ?>">Inserir novo endereço</a>

<?php
    while ($linha = mysqli_fetch_array($consulta_enderecos)) {
        
        echo "<div class='address-item-content'>";
        echo    "<div class='first-line'>".$linha['logradouro'].", ".$linha['numero']." - ".$linha['bairro']."</div>";
        echo    "<div class='second_line'>";
        echo        "<span>".$linha['cidade'].", ".$linha['estado']." - ".$linha['cep']."</span>";
        echo        "<span style='margin-left: auto;'>";
        echo            "<a title='Editar' href='?pagina=inserir_endereco&editar=".$linha['id']."'><i class='fas fa-edit'></i></a>";
        echo            "<a style='color: red;' title='Deletar' href='deletar_endereco.php?id=".$linha['id']."&cliente_id=".$cliente_id."'><i class='fas fa-trash'></i></a>";
        echo        "</span>";
        echo    "</div>";
        echo "</div>";
    }
?>
