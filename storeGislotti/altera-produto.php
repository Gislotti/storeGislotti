<?php 
    include ("cabecalho.php");
    include ("produto-util.php");
    include ("conexao.php");
    
    $id= $_GET["id"];
    $nome= $_GET["nome"];
    $valor= $_GET["valor"];
    
    $funciona = alteraProduto($conexao,$id,$nome,$valor);    
        

    if ($funciona){
    ?>
    
        <p class="alert-success"> O produto de ID: <?= $id; ?> foi alterado para <b> <?= $nome; ?> </b> de valor de R$ <i> <?= $valor; ?> </i></p>
    
    <?php
        
        } else {    
       
        $mensagemDeErro = mysqli_error($conexao)
    ?>
        <p class="alert-danger"> DEU RUIM, FAZ DE NOVO!!!<br> <?= mensagemDeErro; ?> </p>
    <?php 
        }
    ?>
            

<?php include ("rodape.php");?>