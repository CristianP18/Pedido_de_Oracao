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
			<h1>Pedidos de Oração</h1>
			<?php 
    require_once "includes/funcoes.php";
    require_once "includes/banco.php";
    require_once "includes/login.php";

    $ordem = $_GET['o'] ?? "nome";
    $chave = $_GET['c'] ?? "";
    ?>
    <div>
	<?php
    include "topo.php";?>
    
	</div>
    
	<div id="nav">
		<form method="get" action="pedidoDeOraçao.php">
		<p class= "pequeno"> Ordenar: <a href="pedidoDeOraçao.php?o=n">Nome |</a> <a href="pedidoDeOraçao.php?o=d">Urgência |</a> <a href="pedidoDeOraçao.php?o=n1">+ Antigos | </a> <a href="pedidoDeOraçao.php?o=n2">+ Recentes |</a> Buscar:<input type="text" name="c" size="10" maxlength="40"/><input type="submit" value="Ok"/></p></div>
		</form>
		<table class="listagem">
			<?php
				$q = "SELECT * from pedidos ";
				if (!empty($chave)) {
					$q .= " WHERE nome like '%$chave%' OR urgencia like '%$chave%' OR pedido like '%$chave%'";
				}
				switch ($ordem) {
					case "d":
						$q .= " ORDER BY urgencia";
						break;
					case "n2":
						$q .= " ORDER BY cod DESC";
						break;
					case "n1":
						$q .= " ORDER BY cod ASC";
						break;
					default:
						$q .= " ORDER BY nome";
						break;
				}
				
				$busca = $banco->query($q);
				if (!$busca) {
					echo "Falhou! $banco->error";
				} else {
				
					if ($busca->num_rows > 0) {
						while($reg = $busca->fetch_object()){
							# Carregar thumb
							echo "<tr><td>";
							$thumb = thumb($reg->capa);
							# echo "<img src='$thumb' class='mini'/>";
							# Mostrar jogo
							echo "<tr><td><a href='detalhes.php?cod=$reg->cod'><h1>Nome: <span class='titulo'>$reg->nome</span></h1></a>";
							echo text("<br><tr><td>Classe: $reg->urgencia <br> Numero: $reg->cod");
							if (is_admin()) {
								echo "<td><span class='material-symbols-outlined'>
								add_circle</span></a>";
								echo "<span class='material-symbols-outlined'>
								edit </span></a>";
								echo "<span class='material-symbols-outlined'>
								delete </span></a>";
							}elseif (is_editor()) {
								echo "<td>Alterar";
							}
						}
					} else {
						echo "<p>Nenhum registro encontrado...</p>";
					}						
				}
			?>
		</table>
    

    <?php 
  echo voltar("Voltar"); ?>
    
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