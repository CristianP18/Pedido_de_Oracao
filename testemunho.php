<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Testemunho</title>
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
        font-size: 26px;
    }
 
	body {
		font-size: 36px;
	}

	</style>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			<div id="body">
    <?php
session_start();
require_once "includes/funcoes.php";
require_once "includes/banco.php";
require_once "includes/login.php";

     $nome = $_POST['nome'] ?? null;
 
     $testemunho = $_POST['testemunho'] ?? null;
     
    
?>
     <?php 
    echo msg_sucesso("A Paz do Senhor:" . $nome);
    if ($testemunho) {
        $q = "INSERT INTO `testemunhos`( `nome`, `testemunho`) VALUES ('$nome','$testemunho') ";
        $busca = $banco->query($q);
        $reg = $busca->fetch_object();
        $_SESSION['nome'] = $reg->nome;
        $_SESSION['testemunho'] = $reg->testemunho;
      
      
    }else {
        echo msg_error("Ocorreu um Erro Tente de Novo <a href='index.php'> Inicio</a>");
    }         
               

           
            
  

    echo "Testemunho Enviado!";
    echo "<a href='index.html'>Voltar</a>" ;  
    ?>
    

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
