<?php 
    include ("cabecalho.php");
    include ("fornecedor-util.php");
    include ("conexao.php");
    
    $id = $_GET["id"];
    
    $fornecedor = buscaFornecedor($conexao,$id);
    

?>
    <h1>Alteração de Fornecedores</h1>
    <form action="altera-fornecedor.php" method ="get">
        <input class="hidden" type="text" name="id" value="<?= $fornecedor["id"];?>"
        <p class="bg-danger"> Favor não colocar acento!! </p>
        <table class="table table-striped">
            <tr>
                <td><b> Nome: </b> </td>
                <td> 
                    <input type="text" name ="nome" value="<?= $fornecedor["nome"];?>" required>
                </td>
            </tr>
              <tr>
                <td><b> CNPJ </b> </td>
                <td> 
                    <input type="text" name ="cnpj" value="<?= $fornecedor["cnpj"];?>" required>
                </td>
            </tr>
            <tr>
                <td><b> Endereco: </b> </td>
                <td> 
                    <input type="text" name ="endereco" value="<?= $fornecedor["endereco"];?>" required>
                </td>
            </tr>
            <tr>
                <td><b> Email: </b> </td>
                <td> 
                    <input type="text" name ="email" value="<?= $fornecedor["email"];?>" required>
                </td>
            </tr>
            <tr>
                <td><b> Contato: </b> </td>
                <td> 
                    <input type="text" name ="contato" value="<?= $fornecedor["contato"];?>" required>
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type= "submit" value = "Alterar">
                </td>
                <td></td>
            </tr>
            <tr><td><td><td><td><td><td><td></td></td></td></td></td></td></td></tr>
        </table>
    </form>
             
<?php include ("rodape.php");?>