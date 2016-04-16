<?php
    include ("cabecalho.php");
    include ("conexao.php");
    include ("fornecedor-util.php");

    $listaDeFornecedores = listaFornecedor($conexao);
?>

    <table class="table table-stripped">
        <?php 
            foreach($listaDeFornecedores as $fornecedor){
        ?>
        <tr>
                <td> <?= $fornecedor["id"]; ?> </td>
                <td> <?= $fornecedor["nome"]; ?> </td>
                <td> <?= $fornecedor["cnpj"]; ?> </td>
                <td> <?= $fornecedor["endereco"]; ?> </td>
                <td> <?= $fornecedor["email"]; ?> </td>
                <td> <?= $fornecedor["contato"]; ?> </td>
                <td> <a href="altera-fornecedor-formulario.php?id=<?= $fornecedor["id"]; ?>" class="btn btn-primary" > Alterar </a> </td>
                <td> <a href="remove-fornecedor.php?id=<?= $fornecedor["id"]; ?>" class="btn btn-danger" > Remover </a> </td>    
            </tr>
        <?php
            }
        ?>      
        <tr><td><td><td><td><td><td><td><td></td></td></td></td></td></tr>

    </table>
<?php include ("rodape.php");?>