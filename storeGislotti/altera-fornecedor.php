<?php 
    include ("cabecalho.php");
    include ("fornecedor-util.php");
    include ("conexao.php");
    
    $id= $_GET["id"];
    $nome= $_GET["nome"];
    $cnpj= $_GET["cnpj"];
    $endereco= $_GET["endereco"];
    $email= $_GET["email"];
    $contato= $_GET["contato"];
    
    $funciona = alteraFornecedor($conexao,$id,$nome,$cnpj,$endereco,$email,$contato);    
        

    if ($funciona){
    ?>
    
        <p class="alert-success"> O fornecedor de ID: <?= $id; ?> foi alterado para <b> <?= $nome; ?> </b> </p>
    
    <?php
        
        } else {    
       
        $mensagemDeErro = mysqli_error($conexao)
    ?>
        <p class="alert-danger"> DEU RUIM, FAZ DE NOVO!!!<br> <?= mensagemDeErro; ?> </p>
    <?php 
        }
    ?>
            

<?php include ("rodape.php");?>