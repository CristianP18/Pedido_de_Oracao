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
    

    </div>
    <?php 
  echo voltar("Voltar"); ?>
    </div>
</body>
</html>


<textarea rows="10" cols="40" maxlength="500"></textarea>
INSERT INTO `pedidos`( `nome`, `urgencia`, `pedido`) VALUES ('ana','urgente', 'pedido de oraçao');
UPDATE `pedidos` SET `ok`= 2 WHERE `cod` = '" .  . "';