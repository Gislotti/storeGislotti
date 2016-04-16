<?php
    include ("cabecalho.php");
    include ("conexao.php");
    include ("cliente-util.php");

    $nome = $_GET["nome"];
    $cpf = $_GET["cpf"];
    $endereco = $_GET["endereco"];
    $email = $_GET["email"];
    $telefone = $_GET["telefone"];

    $funciona = adicionaCliente($conexao, $nome, $cpf,$endereco,$email,$telefone);
    
    if ($funciona){
?>
        <p class="alert-success">O cliente <b><?= $nome; ?></b> foi adicionado com sucesso na lista de clientes!</p>

    <?php
                   $mensagemDeErro = mysqli_error ($conexao);
        } else {
    ?>
        <p class="alert-danger">O cliente <b><?= $nome; ?></b> não foi adicionado na lista de clientes! <br> <?= mensagemDeErro; ?></p>
    <?php
        }
    ?>
<?php include ("rodape.php");?>
    
        