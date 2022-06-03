<?php
session_start();
require_once "includes/banco.php";
require_once "includes/funcoes.php"; 
require_once "includes/login.php";?>
<html>
<head>
<style>
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
</head>
<body>
<div class="dropdown">
  <button class="mainmenubtn">Menu</button>
  <div class="dropdown-child">
  <?php include "topo.php";?>
  </div>
</div>
</body>
</html>
