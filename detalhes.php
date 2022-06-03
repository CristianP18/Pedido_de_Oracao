<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        font-size: 46px;
    }
    div#body {
        font-size: 46px;
        font-family: Arial, Helvetica, sans-serif;
    }
    span#nome {
        font-family: Arial, Helvetica, sans-serif;
		color: darkmagenta;
    }
	span#pedido {
		font-size: 36px;
		padding-bottom: 2px;
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
	$add = $_GET['a'] ?? "";
    ?>
    <div id="body">
    <?php include "topo.php"; ?>
	    <form method="GET" action="detalhes.php">
			<p class= "pequeno"><a href="detalhes.php?a=add"> Adicionar </a> <a href="detalhes.php?a=ex">Excluir</a>
		</form>
    <table class="detalhes">
			<?php
			
				$cod = $_GET['cod'] ?? 0;
				$usuario = $_SESSION['user'];
				$q = "SELECT * FROM pedidos WHERE cod = '$cod'";
				$f = " CREATE TABLE `".$_SESSION['user']."` (
					`cod` int(10) NOT NULL,
					`nome` varchar(40) NOT NULL
				  ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
				$fa = $banco->query($f);
				$busca = $banco->query($q);
				
			
				
				if (!$banco->query($q)) {
					echo "Falhou ! $banco->error";
				} else {
					
				}
				if (!$busca) {
					echo "Falhou! $banco->error";
				} else {
					if ($busca->num_rows > 0) {
						$reg = $busca->fetch_object();
						$thumb = thumb($reg->capa);
						# echo "<tr><td rowspan='3'><img class='grande' src='$thumb'/>";
						echo "<td><h1>Nome: <span id='nome'>$reg->nome</span></h1>";
						echo "Pedido Numero: $reg->cod ";
						echo "<tr><td><span id='pedido'>$reg->pedido</span>";
						$_SESSION['nomep'] = $reg->nome;
				        $_SESSION['codp'] = $reg->cod;
					} else {
						echo "<p Pedido não encontrado</p>";
					}		
				}
				
				switch ($add) {
					case "add":				  				
						$b = " INSERT INTO `" . $_SESSION['user'] . "` (`cod`, `nome`)
						VALUES (" . $_SESSION['codp'] . ", '" . $_SESSION['nomep'] . "')";
						$ba = $banco->query($b);
						echo "Pedido Nº: " . $_SESSION['codp'] . " Adicionado";
						
						break;
					case "ex":
						$c = " DELETE FROM `" . $_SESSION['user'] . "` WHERE `cod` = " . $_SESSION['codp'] . "";
						$ca = $banco->query($c);
						echo "Pedido Nº: " . $_SESSION['codp'] . " Excluido";
						break;
					

				}
			?>
			</table>
    

    </div>
    <?php 
  echo voltar2("Voltar"); ?>
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
</html>#INSERT INTO `kerolin`(`id`, `cod`, `nome`) VALUES (1, 25,'testando mysqli')