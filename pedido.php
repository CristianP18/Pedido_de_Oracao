<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="includes/style.css"/>
    <title>Pedido de Oração!</title>
</head>
<body>
    <div id="body">
    <?php

require_once "includes/funcoes.php";
require_once "includes/banco.php";
require_once "includes/login.php";

     $nome = $_POST['nome'] ?? null;
     $pedido = $_POST['pedido'] ?? null;
     $testemunho = $_POST['testemulho'] ?? null;
     $urgencia = $_POST['tipo'] ?? null;
    
?>
     <?php 
    echo msg_sucesso("A Paz do Senho:" . $nome);
        $q = "INSERT INTO `pedidos`( `nome`, `urgencia`, `pedido`) VALUES ('$nome','$urgencia', '$pedido') ";
        $busca = $banco->query($q);
            if ($busca->num_rows > 0){
                $reg = $busca->fetch_object();
                
               
                    $_SESSION['tipo'] = $reg->urgencia;
                    $_SESSION['nome'] = $reg->nome;
                    $_SESSION['pedido'] = $reg->pedido;
                    echo msg_sucesso('Pedido de Oração Enviado!');
                    echo "Bem Vindo: " .  $_SESSION['nome'];
                 
        
            }else {
                echo msg_sucesso('----------------------------------------------------------------');
            }
            
            
    echo voltar("Voltar");

    
    ?>
    

    </div>
</body>
</html>

