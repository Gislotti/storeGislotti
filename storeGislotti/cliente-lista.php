<?php
    include ("cabecalho.php");
    include ("conexao.php");
    include ("cliente-util.php");

    $listaDeClientes = listaCliente ($conexao);
?>

    <table class="table table-stripped">
        <?php 
            foreach ($listaDeClientes as $cliente){
        ?>
        <tr>
                <td> <?= $cliente["id"]; ?> </td>
                <td> <?= $cliente["nome"]; ?> </td>
                <td> <?= $cliente["cpf"]; ?> </td>
                <td> <?= $cliente["endereco"]; ?> </td>
                <td> <?= $cliente["email"]; ?> </td>
                <td> <?= $cliente["telefone"]; ?> </td>
                <td> <a href="remove-cliente.php?id=<?= $cliente["id"]; ?>" class="btn btn-danger" > Remover </a> </td>  
                <td> <a href="altera-cliente-formulario.php?id=<?= $cliente["id"]; ?>" class="btn btn-primary" > Alterar </a> </td>
                    
            </tr>
        <?php
            }
        ?>      
       <tr><td><td><td><td><td><td><td><td></td></td></td></td></td></td></td></td></td></td></tr>

    </table>
<?php include ("rodape.php");?>
            