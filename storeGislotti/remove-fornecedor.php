<?php 
    include ("cabecalho.php");
    include ("conexao.php");
    include ("fornecedor-util.php");

    $id = $_GET["id"];
    
    removeFornecedor($conexao,$id);

?>
    <p class="alert-success"> Fornecedor com a ID <?= $id;?> removido com sucesso!</p>

  

<?php   include ("rodape.php"); ?>