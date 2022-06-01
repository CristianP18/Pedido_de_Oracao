<?php
session_start();?><?php
require_once "includes/banco.php";
require_once "includes/funcoes.php"; 
require_once "includes/login.php";
?>
    <!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<style>
    a {
        font-size: 46px;
    }
    div#body {
        font-size: 46px;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<body>
	
	<div class="limiter">
		<div class="container-login100">
        <div class="wrap-login100">
        <div id="body">
        <?php 
        $u = $_POST['email'] ?? null;
        $s = $_POST['pass'] ?? null;
        
        if (is_null($u) || is_null($s)) {
            require "user-login-from.php";
        }else {
            $q = "SELECT usuario, nome, senha, tipo from usuarios where usuario = '$u' limit 1";
            $busca = $banco->query($q);
            if(!$busca) {
                echo msg_error('Falha ao acessar o banco!');
                
            } else {
                if ($busca->num_rows > 0){
                    $reg = $busca->fetch_object();
                    $s = cripto($s);
                    if(testarHash($s, $reg->senha)) {
                        $_SESSION['user'] = $reg->usuario;
                        $_SESSION['nome'] = $reg->nome;
                        $_SESSION['tipo'] = $reg->tipo;
                        echo msg_sucesso('Logado com sucesso');
                        echo "Bem Vindo: " .  $_SESSION['nome'] . "<br>";
                        include "topo.php";
                echo voltar2('Pedidos de Oração');
                
                     }else {
                         
                            echo msg_error('Senha inválida');
                            echo voltar('Voltar');
                        
                     }
            
            }else {
                    echo msg_error('Usuário não existe!');
                    echo voltar('Voltar');
                }
                
                }}?>
                </div>
            
        
            </div>
		</div>
	</div>

	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>