<?php
	include ("cabecalho.php");
	include ("fornecedor-util.php");
	include ("conexao.php");

	$nome = $_GET["nome"];
	$cnpj = $_GET["cnpj"];
	$endereco = $_GET["endereco"];
	$email = $_GET["email"];
	$contato = $_GET["contato"];
	
	$funciona = adicionaFornecedor($conexao,$nome,$cnpj,$endereco,$email,$contato);

	if ($funciona){
?>
		<p class="alert-success"> O fornecedor <b> <?= $nome; ?> foi adicionado a lista de fornecedores com sucesso!</p>
	<?php
                   $mensagemDeErro = mysqli_error ($conexao);
		} else {
	?>
        <p class="alert-danger"> O fornecedor <b> <?= $nome; ?></b> não foi adicionado a lista de fornecedores <br> <?= mensagemDeErro; ?> </p>
        <?php   
            }
        ?>


<?php include ("rodape.php");?>	 