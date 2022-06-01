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
<style>
    div#body{
        margin-top: 400px;
        font-size: 80px;
    }
    input#botao {
        margin-left: 300px;
        height: 50px;
        width: 80px;
    }
</style>
<body>
    <?php 
    require_once "includes/funcoes.php";
    require_once "includes/banco.php";
    require_once "includes/login.php";
    ?>
    <div id="body">
    <h1>Login</h1>

<form action="user-login.php" method="post">
    <table>
        <tr><td>Usuário:  <td> <textarea type="text" class="textarea" name="usuario" id="usuario" font-size="28px" rows="3" cols="26"></textarea> </br>
        <tr><td>Senha:  <td> <textarea type="password" class="textarea" name="senha" id="senha" font-size="28px" rows="3" cols="26"></textarea> </br>
      
       <tr><td><input type="submit" value="Entrar" id="botao"> 

</table>
</form>

    </div>
    <?php 
  echo voltar("Voltar"); ?>
    </div>
</body>
</html>

