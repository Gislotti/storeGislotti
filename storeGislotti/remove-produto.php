<?php 
    include ("cabecalho.php");
    include ("conexao.php");
    include ("produto-util.php");

    $id = $_GET["id"];
    
    removeProduto ($conexao,$id);

?>
    <p class="alert-success"> Produto com a ID <?= $id;?> removido com sucesso!</p>

  

<?php   include ("rodape.php"); ?>
