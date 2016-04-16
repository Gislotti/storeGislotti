<?php include ("cabecalho.php");?>
	
    <form action="adiciona-fornecedor.php" method="get">
        <p class="bg-danger"> Favor não colocar acento!! </p>
        <table class="table table-stripped">
                      <tr>
                            <td><b> Nome: </b> </td>
                            <td> 
                                <input type="text" name ="nome" required>
                            </td>
                      </tr>
                      <tr>
                            <td><b> CNPJ: </b> </td>
                            <td> 
                                <input type= "text" name ="cnpj" required>
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
                            <td><b> Contato </b></td>
                            <td>
                                <input type= "text" name ="contato" required>
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
					
					
			