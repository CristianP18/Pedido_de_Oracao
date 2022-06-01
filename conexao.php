<?php
define('HOST', 'mysql.meusimulador.com');
define('USUARIO', 'meusimulador3');
define('SENHA', '@Meusimulador@');
define('DB', 'meusimulador3');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');