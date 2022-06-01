<?php
session_start();?>
<?php
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
    <?php include "topo.php"; ?>
        <?php
        if(!is_admin()) {
            echo   msg_error('Area restrita! Vocẽ não é administrador.');
        }else {
            if (!isset($_POST['email'])){
                require "user-new-form.php";
            }else {
                $usuario = $_POST['email'] ?? null;
                $nome = $_POST['nome'] ?? null;
                $senha1 = $_POST['pass'] ?? null;
                $senha2 = $_POST['pass1'] ?? null;
                $tipo = $_POST['tipo'] ?? null;
            
                if ($senha1 === $senha2) {
                    if (empty($usuario) || empty($nome) || empty($senha1) || empty($senha2) || empty($tipo)) {
                        echo msg_aviso(" Todos os Campos São Obrigatórios");
                    }else {
                        $senha = gerarHash($senha1);                       
                        $q = "INSERT INTO usuarios (usuario, nome, senha, tipo) VALUES ('$usuario', '$nome', '$senha', '$tipo')";
                        if ($banco->query($q)) {
                            echo msg_sucesso("Usuário $nome cadastrado com sucesso!");
                        } else {
                            echo msg_error("Não foi possivel cadastrar o $usuario. Talvez o lohin ja esteja sendo usado.");
                        }
                    }
                }else {
                     echo msg_error("Senhas não conferem. Repita o procedimnto");
                     
                    }
                }     
        }
        echo voltar2("Voltar");
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