<?php
    include("cabecalho.php");
?>
    
    <form action = "adiciona-cliente.php" method="get">
        <p class="bg-danger"> Favor não colocar acento!! </p>
        <table class="table table-stripped">
            <tr>
                <td><b> Nome: </b> </td>
                <td> 
                    <input type= "text" name ="nome" required>
                </td>
            </tr>
            <tr>
                <td><b> CPF: </b> </td>
                <td> 
                    <input type= "text" name ="cpf" required>
                </td>
            </tr>
            <tr>
                <td><b> Endereço: </b> </td>
                <td> 
                    <input type= "text" name ="endereco" required>
                </td>
            </tr>
            <tr>
                <td><b> Email </b> </td>
                <td> 
                    <input type= "text" name ="email" required>
                </td>
            </tr>
            <tr>
                <td><b> Telefone </b> </td>
                <td> 
                    <input type= "text" name ="telefone" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type= "submit" value = "Cadastrar">
                </td>
                <td></td>
            </tr>    
            <tr><td><td></td></td></tr>
        </table>
    </form>
<?php include ("rodape.php");


