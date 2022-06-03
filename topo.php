<?php
session_start();?>
<style>
    a {
        color: rgba(30, 33, 199, 0.589);
    }
    .mainmenubtn {
    background-color: skyblue;
    color: white;
    border: none;
    cursor: pointer;
    padding:20px;
    margin-top:20px;
}
.mainmenubtn:hover {
    background-color: blue;
    }
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-child {
    display: none;
    background-color: skyblue;
    min-width: 200px;
}
.dropdown-child a {
    color: blue;
    padding: 20px;
    text-decoration: none;
    display: block;
}
.dropdown:hover .dropdown-child {
    display: block;
}
    </style>
<?php
require_once "includes/banco.php";
require_once "includes/funcoes.php"; 
require_once "includes/login.php";
?>
<?php

if(empty($_SESSION['user'])){
    echo "<a href='user-login-form.html'>Entrar</a> ";
}else {      
    echo "<a href='index.php'>Inicio</a>";
    echo "<a href='user-edit-form.php'>Meus Dados</a> | ";
    echo "<a href='testemunhos.php'>Testemunhos</a> <br>";
    echo "<a href='pedidoDeOraçao.php'>Pedidos de Oração</a> | ";
    if (is_admin()) {
        echo "<a href='user-new-form.php'>Novo usuário</a> | ";
       
        
    }
    echo "<a href='logout.php'>Sair</a> | "; 
}

echo"</p>";