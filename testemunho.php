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
session_start();
require_once "includes/funcoes.php";
require_once "includes/banco.php";
require_once "includes/login.php";

     $nome = $_POST['nome'] ?? null;
 
     $testemunho = $_POST['testemunho'] ?? null;
     
    
?>
     <?php 
    echo msg_sucesso("A Paz do Senho:" . $nome);
    if ($nome) {
        $q = "INSERT INTO `testemunhos`( `nome`, `testemunho`) VALUES ('$nome','$testemunho') ";
        $busca = $banco->query($q);
        $reg = $busca->fetch_object();
        $_SESSION['nome'] = $reg->nome;
        $_SESSION['testemunho'] = $reg->testemunho;
        echo msg_sucesso('Testemunho Enviado!');
        echo "Bem Vindo: " .  $_SESSION['nome'];    
    }else {
        echo msg_error("Ocorreu um Erro Tente de Novo <a href='index.php'> Inicio</a>");
    }         
               

           
            
    echo voltar("Voltar");

    
    ?>
    

    </div>
</body>
</html>

