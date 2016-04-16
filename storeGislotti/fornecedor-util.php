<?php
	include("conexao.php");
	
	function adicionaFornecedor($conexao,$nome,$cnpj,$endereco,$email,$contato){
		$comando = "insert into fornecedores(nome,cnpj,endereco,email,contato) values ('{$nome}','{$cnpj}','{$endereco}','{$email}','{$contato}')";
		$resultado = mysqli_query($conexao,$comando);
		return $resultado;
	}
      function listaFornecedor($conexao) {
        $comando = "select * from fornecedores";
        $resultado = mysqli_query($conexao,$comando);
        
        return $resultado;
    }
    
    function removeFornecedor($conexao,$id){
        $comando ="delete from fornecedores where id ={$id}";
        $resultado = mysqli_query($conexao,$comando);
        return $resultado;
    }

      function buscaFornecedor($conexao,$id){
        $comando ="select * from fornecedores where id ={$id}";
        $resultado = mysqli_query($conexao,$comando);
        $produto = mysqli_fetch_assoc($resultado);
        return $produto;        
    }

    function alteraFornecedor($conexao,$id,$nome,$cnpj,$endereco,$email,$contato){
        $comando ="update fornecedores set nome='{$nome}',cnpj='{$cnpj}',endereco='{$endereco}',email='{$email}',contato='{$contato}' where id={$id}";
        $resultado = mysqli_query($conexao,$comando);
        return $resultado;    
    }
?>