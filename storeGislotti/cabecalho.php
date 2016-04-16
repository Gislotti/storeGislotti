<?php 
    include ("autenticacao-util.php");
    session_start();   //iniciar sessão
    $paginaAtual = $_SERVER["PHP_SELF"];//ver pagina atual
    $test = "login.php";
    $paginaLogin = substr_compare($paginaAtual,$test,strlen($paginaAtual)-strlen($test))===0;//se retornar zero está na página login
    if (!isset($_SESSION["usuario"]) && !isset($_SESSION["senha"]) && !$paginaLogin){    //usuario e senha estão setados & está na pg login??
        header("location:login.php");        
    }
?>


<html>
    
    <head>
    <meta charset='utf-8'>    
    <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/store.css" rel="stylesheet">
     <title> Gislotti's</title>
 
    
    </head>

    <body>
        <div class="navbar navbar-inverse navbar-fixep-top">
            <div class="container">
                <div class="navbar-header">
                    <a  href="index.php" class="navbar-brand"> <img src="img/pokeball2.png" height="30px" width="30px" title="Página Inicial"> </a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="produto-formulario.php"> Cadastro de Produtos</a>
                        </li>
                        <li>
                            <a href="cliente-formulario.php"> Cadastro de Clientes</a>
                        </li>
                        <li>
                            <a href="fornecedor-formulario.php"> Cadastro de Fornecedores</a>
                        </li>
                        <li>
                            <a href="produto-lista.php"> Lista de Produtos</a>
                        </li>
                        <li>
                            <a href="cliente-lista.php"> Lista de Clientes</a>
                        </li>
                         <li>
                            <a href="fornecedor-lista.php"> Lista de Fornecedores</a>
                        </li>
                        
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="principal">