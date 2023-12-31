
<?php 
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="includes/index.css"/>
    <title>Pedido de Oração!</title>
</head>
<style>
   h1 {
       text-align: center;
   }
   input#botao {
    width: 140px;
    max-width: 160px;
    height:70px;
    font-size: 28px;
   }
   input#nome {
    font-size: 28px;
    width: 140px;
    max-width: 180px;
    height:50px;
   }
   select#tipo {
    width: 120px;
    height:60px;
    font-size: 22px;
   }
</style>
</head>
<body>
    <section id="section">
    <section>
    <a href="user-login-form.php"> Entrar</a>

    
        <h1> Seja Bem Vindo!!!</h1>
  
   
    <div id="pedido">
        <form action="pedido.php" method="post">
        <tr><td><h2> Digite seu Pedido de Oração!</h2>
        <tr><td><textarea name="pedido" id="pedido" size="18px" rows="12" cols="72"></textarea>
        <tr><td><h2>Nome: <td><input type="text" name="nome" id="nome" rows="3" cols="33"></h2>
        <tr><td>Urgencia: <td><select name="tipo" id="tipo">
            <option value="urgente" >Urgente</option>
            <option value="baixa">Baixa</option>
            <option value="moderada" selected>Moderado</option>
            
        </select><br><br>
        <tr><td><input type="submit" value="Enviar" id="botao">
        </form>
    </div>
    
        <form action="testemunho.php" method="post">
        <div id="text"><tr><td><h2>Se você foi abençoado por Deus,<br> compartilhe seu testemunho <br>para edficação da nossa fé.</h2></div>
            <div id="testemunho">
        
            <h2>Testemunho: </h2>
            <tr><td><h2>Nome: <td><input type="text" name="nome" id="nome" rows="3" cols="33"></h2>
        <tr><td><textarea type="text" class="textarea" name="testemunho" id="testemunho" size="18px" rows="12" cols="72"></textarea> </br>
        <tr><td><input type="submit" value="Enviar" id="botao"> 
        </form>
    </div>
    </section>
</section>
    <div
    id="text">
       <h2> A Palavra de Deus nos ensina que devemos horar uns pelos outros, por isso estamos a disposição para orar por você.</h2>
    </div>
    <div id="text">
        <h2>Confessai as vossas culpas uns aos outros, e orai uns pelos outros, para que sareis. A oração feita por um justo pode muito em seus efeitos.

            Tiago 5:16</h2>
    </div>

 
</body>
</html>