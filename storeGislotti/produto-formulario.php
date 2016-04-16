<?php include ("cabecalho.php");?>
    <h1>Cadastro de Produtos</h1>
    <form action="adiciona-produto.php" method ="get">
        <p class="bg-danger"> Favor não colocar acento!! </p>
       <table class="table table-striped">
            <tr>
                <td><b> Nome: </b> </td>
                <td> 
                    <input type= "text" name ="nome" required>
                </td>
            </tr>
            <tr>
                <td><b> Valor: </b></td>
                <td>
                    <input type= "number" name ="valor" required>
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
             
 <?php include ("rodape.php");?>