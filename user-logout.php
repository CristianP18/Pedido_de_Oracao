<?php
 session_start();?>
<!DOCTYPE html>
<?php 
require_once "includes/banco.php";
require_once "includes/funcoes.php"; 
require_once "includes/login.php";
?>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="includes/style.css"/>
		<link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
		<title>Saiu</title>
<body>
    <div id="body">
        <?php  
            logout();
            echo msg_sucesso('Usuário'. $reg->nome .  ' deslogado');
        
   echo voltar(); 
     include "rodape.php"; ?>
    </div>
</body>
</html>