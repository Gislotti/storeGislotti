<?php
    include ("cabecalho.php");
    include ("conexao.php");
    include ("produto-util.php");

    $listaDeProdutos = listaProduto ($conexao);
?>

    <table class="table table-stripped">
        <?php
            foreach ($listaDeProdutos as $produto){
        ?>
            <tr>
                    <td> <?= $produto["id"]; ?> </td>
                    <td> <?= $produto["nome"]; ?> </td>
                    <td> <?= $produto["valor"]; ?> </td>
                    <td> <a href="altera-produto-formulario.php?id=<?= $produto["id"]; ?>" class="btn btn-primary" > Alterar </a> </td>
                    <td> <a href="remove-produto.php?id=<?= $produto["id"]; ?>" class="btn btn-danger" > Remover </a> </td>
                    
            </tr>
        <?php
            }
        ?>      
            <tr><td><td><td><td><td></td></td></td></tr>

    </table>
<?php include ("rodape.php");?>