<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Pedido de Oração</title>
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
	h1 {
		text-align: left;
	}
	span.titulo {
		color: rgba(252, 252, 17, 0.87);
		
	}
	a {
        font-size: 46px;
    }
    div#body {
        font-size: 46px;
        font-family: Arial, Helvetica, sans-serif;
    }
	body {
		font-size: 36px;
	}

	</style>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			
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
    echo msg_sucesso("A Paz do Senhor:" . $nome);
   
        $q = "INSERT INTO `pedidos`( `nome`, `urgencia`, `pedido`) VALUES ('$nome','$urgencia', '$pedido') ";
        $busca = $banco->query($q);
        echo "Pedido de Oração Enviado!";
        echo "<a href='index.html'>Voltar</a>";
            if ($busca->num_rows > 0){
                $reg = $busca->fetch_object();
                
               
                    $_SESSION['tipo'] = $reg->urgencia;
                    $_SESSION['nome'] = $reg->nome;
                    $_SESSION['pedido'] = $reg->pedido;
                    echo "Pedido de Oração Enviado!";
                    echo "<a href='index.html'>Voltar</a>";
                 
        
            }else {
                echo msg_sucesso('----------------------------------------------------------------');
            }
            
            
  

    
    ?>

   
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


