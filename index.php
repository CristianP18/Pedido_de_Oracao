<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="includes/index.css"/>
    <title>Pedido de Oração!</title>
</head>
<body>
    <?php
    require_once "includes/funcoes.php";
    require_once "includes/banco.php";
    require_once "includes/login.php"; ?>
     <div id="nav">
     <nav>
        <?php
    include "topo.php";?>
          </nav>
   
    <section>
        <h1> Seja Bem Vindo!!!</h1>
  
   
    <div id="pedido">
        <form action="pedido.php" method="post">
        <tr><td><h2> Digite seu Pediso de Oração!</h2>
        <tr><td><textarea name="pedido" id="pedido" size="18px"></textarea>
        <tr><td><h2>Nome: <td><input type="text" name="nome" id="nome"></h2>
        <tr><td>Urgencia: <td><select name="tipo" id="tipo">
            <option value="baixa">Baixa</option>
            <option value="moderada" selected>Moderado</option>
            <option value="urgente" selected>Urgente</option>
        </select>
        <tr><td><input type="submit" value="Enviar">
        </form>
    </div>
    
        <form action="testemunho.php" method="post">
        <div id="text"><tr><td><h2>Se você foi abençoado por Deus, compartilhe seu testemunho para edficação da nossa fé.</h2></div>
            <div id="testemunho">
        <tr><td><h2>Nome: <td><input type="text" name="nome" id="nome"></h2>
            <h2>Testemunho: </h2>
        <tr><td><textarea type="text" class="textarea" name="testemunho" id="testemunho" size="18px"></textarea> </br>
        <tr><td><input type="submit" value="Enviar"> 
        </form>
    </div>
    </section>

 
</body>
</html>