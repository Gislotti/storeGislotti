<?php
    include ("cabecalho.php");
    include ("conexao.php");
    include ("cliente-util.php");

    $id = $_GET["id"];
    $nome = $_GET["nome"];
    $cpf = $_GET["cpf"];
    $endereco = $_GET["endereco"];
    $email = $_GET["email"];
    $telefone = $_GET["telefone"];

    $funciona = alteraCliente($conexao,$id,$nome,$cpf,$endereco,$email,$telefone);
    
    if ($funciona){
?>
        <p class="alert-success">Os dados do cliente de ID<b><?= $id; ?></b> foram alterados com sucesso!</p>

    <?php
                   $mensagemDeErro = mysqli_error ($conexao);
        } else {
    ?>
        <p class="alert-danger">O cliente <b><?= $id; ?></b> não foi alterado <br> <?= mensagemDeErro; ?></p>
    <?php
        }
    ?>
<?php include ("rodape.php");?>
    