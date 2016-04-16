<?php 
    include ("cabecalho.php");
    include ("conexao.php");
    include ("cliente-util.php");

    $id = $_GET["id"];
    
    removeCliente ($conexao,$id);

?>
    <p class="alert-success"> Cliente com a ID <?= $id;?> removido com sucesso!</p>

  

<?php   include ("rodape.php"); ?>