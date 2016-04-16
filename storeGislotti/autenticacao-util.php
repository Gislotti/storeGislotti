<?php 
    include("conexao.php");

    function verificaUsuario($conexao,$usuario,$senha){
        $comando = "select * from usuarios where usuario ='{$usuario}' && senha='{$senha}'";
        $resultado = mysqli_query($conexao,$comando);
        return $resultado;
    }
    
        
?>