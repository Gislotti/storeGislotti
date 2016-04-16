<?php include ("cabecalho.php");?>
    <h1>Faça seu login</h1>
    <form action="autentica-usuario.php" method ="post">
        
       <table class="table table-striped">
            <tr>
                <td><b> Login: </b> </td>
                <td> 
                    <input class="form-control" type= "text" name ="usuario" required>
                </td>
            </tr>
            <tr>
                <td><b> Senha: </b></td>
                <td>
                    <input class="form-control" type= "password" name ="senha" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="btn btn-primary" type= "submit" value = "Logar">
                </td>
                <td></td>
            </tr>
            <tr><td><td></td></td></tr>
        </table>
    </form>
             
<?php include ("rodape.php");?>