<?php
    include ("conexao.php");
    
    function adicionaCliente ($conexao,$nome,$cpf,$endereco,$email,$telefone){
        $comando = "insert into clientes(nome,cpf,endereco,email,telefone) values ('{$nome}','{$cpf}','{$endereco}','{$email}','{$telefone}')";
        $resultado = mysqli_query($conexao,$comando);
        return $resultado;
    }
        function listaCliente ($conexao){
        $comando =" select * from clientes";
        $resultado = mysqli_query ($conexao,$comando);
        return $resultado;
    }
    
    function removeCliente ($conexao,$id){
        $comando ="delete from clientes where id ={$id}";
        $resultado = mysqli_query($conexao,$comando);
        return $resultado;
    }

    function buscaCliente ($conexao,$id){
        $comando ="select * from clientes where id ={$id}";
        $resultado = mysqli_query($conexao,$comando);        
        $cliente = mysqli_fetch_assoc($resultado);
        return $cliente;           
    }

    function alteraCliente ($conexao,$id,$nome,$cpf,$endereco,$email,$telefone){
        $comando ="update clientes set nome='{$nome}',cpf='{$cpf}',endereco='{$endereco}',email='{$email}',telefone='{$telefone}' where id={$id}";
        $resultado = mysqli_query($conexao,$comando);
        return $resultado;    
    }

?>