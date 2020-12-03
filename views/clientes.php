<a class="btn btn-success" href="?pagina=inserir_cliente">Inserir novo cliente</a>

<table class="table table-hover table-striped" id="clientes">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Data Nascimento</th>
            <th>CPF</th>
            <th>RG</th>
            <th>Telefone</th>
            <th></th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($linha = mysqli_fetch_array($consulta_clientes)){
                echo '<tr><td >'.$linha['nome'].'</td>';
                // echo '<td >'.$linha['data_nascimento']->format('d-m-Y H:i').'</td>';
                echo '<td >'. date('d-m-Y',strtotime($linha['data_nascimento'])) .'</td>';
                echo '<td >'.$linha['cpf'].'</td>';
                echo '<td >'.$linha['rg'].'</td>';
                echo '<td >'.$linha['telefone'].'</td>';
        ?>
            <td><a href="?pagina=enderecos_cliente&id=<?php echo $linha['id'];?>">Endereços</a></td>
            <td><a href="?pagina=inserir_cliente&editar=<?php echo $linha['id']; ?>"><i class="fas fa-user-edit"></i></a></td>
            <td><a href="deletar_cliente.php?id=<?php echo $linha['id'];?>"><i class="fas fa-user-times"></i></a></td>
        <?php } ?>
        
    </tbody>

</table>