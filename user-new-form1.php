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
    <h1>Novo Usuário</h1>
    <form action="user-new.php" method="post">
    <table>
        <tr><td>Usuário <td><input type="text" name="usuario"
        id="usuario" size="10" maslength="10">
        <tr><td>Nome <td> <input tipo="text" name="nome" id="nome"
        size="20"  maslength="30">
        <tr><td>Tipo<td><select name="tipo" id="tipo">
            <option value="admin">Administrador do Sistema</option>
            <option value="aditor" selected>Editor Autorizado</option>
        </select>
        <tr><td>Senha<td><input type="password" name="senha1"
        id="senha1" size="10" maxlength="10">
        <tr><td>Confirme a Senha<td><input type="password" name="senha2"
        id="senha2" sixe="10" maslength="10">
        <tr><td><input type="submit" value="Salvar">


    </table>
</form>
<?php 
  echo voltar("Voltar"); ?>
    </div>
</body>
</html>


        