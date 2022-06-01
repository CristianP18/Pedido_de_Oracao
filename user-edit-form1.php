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
    <?php 
    require_once "includes/funcoes.php";
    require_once "includes/banco.php";
    require_once "includes/login.php";
    ?>
    <div id="body">
    <?php include "topo.php"; ?>
    <?php 
session_start();
require_once "includes/banco.php";
require_once "includes/funcoes.php"; 
require_once "includes/login.php";





    $q = "select usuario, nome, senha, tipo from usuarios where 
    usuario='" . $_SESSION['user']. "'";
     $busca = $banco->query($q);
     $reg = $busca->fetch_object();
?>

<h1>Alteração de Dados<h1>
    <form action="user-edit.php" method="post">
    <tr><td>Usuário
        <td><input type="text" name="usuario" id="usuario" readonly 
            value="<?php echo $reg->usuario?>"><br>
    <tr><td>Nome
        <td><input type="text" name="nome" id="nome"
            value="<?php echo $reg->nome ?>"> <br>
    <tr><td>Tipo
        <td><input type="text" name="tipo" id="tipo" readonly 
            value="<?php echo $reg->tipo ?>">   <br>  
    <tr><td>Senha
        <td><input type="password" name="senha1" id="senha2"
                ><br>
        <tr><td>Confirme a senha1
        <td><input type="password" name="senha2" id="senha2"
                >
        <tr><td><input type="submit" value="Salvar">        
                         

<?php 
  echo voltar("Voltar"); ?>
   

    </div>
</body>
</html>
