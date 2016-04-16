<?php
    include("cabecalho.php");
    include ("cliente-util.php");
    include ("conexao.php");

    $id = $_GET["id"];
    
    $cliente = buscaCliente($conexao,$id);
?>

    <h1>Alteração de Cliente</h1>    
    <form action = "altera-cliente.php" method="get">
        <input class="hidden" type="text" name="id" value="<?= $cliente["id"];?>">
        <p class="bg-danger"> Favor não colocar acento!! </p>
        <table class="table table-stripped">
            <tr>
                <td><b> Nome: </b> </td>
                <td> 
                    <input type="text" name ="nome" value="<?= $cliente["nome"];?>" required>
                </td>
            </tr>
            <tr>
                <td><b> CPF: </b> </td>
                <td> 
                    <input type="text" name ="cpf" value="<?= $cliente["cpf"];?>" required>
                </td>
            </tr>
            <tr>
                <td><b> Endereço: </b> </td>
                <td> 
                    <input type="text" name ="endereco" value="<?= $cliente["endereco"];?>" required>
                </td>
            </tr>
            <tr>
                <td><b> Email </b> </td>
                <td> 
                    <input type="text" name ="email" value="<?= $cliente["email"];?>" required>
                </td>
            </tr>
            <tr>
                <td><b> Telefone </b> </td>
                <td> 
                    <input type="text" name ="telefone" value="<?= $cliente["telefone"];?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type= "submit" value = "Alterar">
                </td>
                <td></td>
            </tr>    
            <tr><td><td></td></tr>
        </table>
    </form>
<?php include ("rodape.php");


