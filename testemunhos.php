<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Pedido de Oração!</title>
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
        font-size: 26px;
    }
    div#body {
        font-size: 36px;
        font-family: Arial, Helvetica, sans-serif;
    }
    span#nome {
        font-family: Arial, Helvetica, sans-serif;
        color: blue;
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
    ?>
    <div id="body">
    <?php include "topo.php"; 
    $q = "SELECT * from testemunhos ";
    $busca = $banco->query($q);
    $busca->fetch_object();
    while($reg = $busca->fetch_object()){
        
        echo "<tr><td>";
        
       
        
        echo " <span id='nome'><td>Nome: $reg->nome </span>| <br><td>Numero: $reg->cod<br>";
        echo "<td>Testemunho: <br><tr><td>$reg->testemunho<br>";
        echo "   _________<br>";
    
    }
    ?>
    </div>
    <?php 
  echo voltar("Voltar"); ?>
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