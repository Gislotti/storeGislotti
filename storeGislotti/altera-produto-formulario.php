<?php 
    include ("cabecalho.php");
    include ("produto-util.php");
    include ("conexao.php");
    
    $id = $_GET["id"];
    
    $produto = buscaProduto($conexao,$id);
    

?>
    <h1>Alteração de Produto</h1>
    <form action="altera-produto.php" method ="get">
        <input class="hidden" type="text" name="id" value="<?= $produto["id"];?>"
        <p class="bg-danger"> Favor não colocar acento!! </p>
        <table class="table table-striped">
            <tr>
                <td><b> Nome: </b> </td>
                <td> 
                    <input type="text" name ="nome" value="<?= $produto["nome"];?>" required>
                </td>
            </tr>
            <tr>
                <td><b> Valor: </b></td>
                <td>
                    <input type="number" name ="valor" value="<?= $produto["valor"];?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type= "submit" value = "Alterar">
                </td>
                <td></td>
            </tr>
            <tr><td><td></td></td></tr>
        </table>
    </form>
             
<?php include ("rodape.php");?>