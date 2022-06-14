<?php
session_start();
include ('verifica.php');?>
<style>
    a {
        color: rgba(30, 33, 199, 0.589);
        font-size: 38px;
    }

    </style>
<?php
require_once "includes/banco.php";
require_once "includes/funcoes.php"; 
require_once "includes/login.php";
?>
<?php

if(!$_SESSION['user']){
    echo "<a href='user-login-form.html'>Entrar</a> ";
}else {      
    echo "<a href='index.php'>Inicio | </a>";
    echo "<a href='user-edit-form.php'>Meus Dados</a> | ";
    echo "<a href='testemunhos.php'>Testemunhos</a> <br>";
    echo "<a href='pedidoDeOraçao.php'>Pedidos de Oração</a> | ";
    if (is_admin()) {
        echo "<a href='user-new-form.php'>Novo usuário</a> | ";
       
        
    }
    echo "<a href='logout2.php'>Sair</a>  "; 
}

echo"</p>";