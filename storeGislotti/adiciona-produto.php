<?php 
    include ("cabecalho.php");
    include ("produto-util.php");
    include ("conexao.php");
    
    $nome = $_GET["nome"];
    $valor = $_GET["valor"];
    
    $funciona = insereProduto($conexao, $nome, $valor);    
        

    if ($funciona){
    ?>
    
        <p class="alert-success"> O produto <b> <?= $nome; ?> </b> foi adicionado e valor de R$ <i> <?= $valor; ?> </i></p>
    
    <?php
        $mensagemDeErro = mysqli_error ($conexao);
        } else {        
    ?>
        <p class="alert-danger"> DEU RUIM, FAZ DE NOVO!!!<br> <?= mensagemDeErro; ?> </p>
    <?php 
        }
    ?>
            

<?php include ("rodape.php");?>