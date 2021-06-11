<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
    <header class="navbar">
        <a class="logo" href="../../index.html">UlissesJunior</a>
      </li>
        <nav>
            <ul class="nav-center">
                <li><a href= "../ex1/ex1.php">Ex 01</a></li>
                <li><a href= "../ex2/ex2.php">Ex 02</a></li>
                <li><a href= "#">Ex 03</a></li>
                <li><a href= "../ex4/ex4.php">Ex 04</a></li>
            </ul>
        </nav>
        <div class="nav-right">
        <a class href="#"></a><button>Lista 3</button>
        </div>
    </header>
<body>
    
<div class="login1">   
    <form action="ex3.php" method="post">
    <h2>Nome<h2> 
    <input type="text" name="name" class="input">
    <h2>Idade<h2> 
    <input type="text" name="idade" class="input">
    <h2>Peso<h2> 
    <input type="text" name="peso" class="input">
    <h2>Altura<h2> 
    <input type="text" name="altura" class="input">
    <div>
    <button class="send" type="submit">Enviar</button>  
    <div class="page">
    <button class="page-active"type="submit"><a href="ex3.php">1</a></button>
    <button type="submit"><a href="ex3_1.php">2</a></button>    
</div>
</div>

<?php
if($_POST) {
session_start();
$_SESSION['name']=$_POST['name'];
$_SESSION['idade']=$_POST['idade'];
$_SESSION['peso']=$_POST['peso'];
$_SESSION['altura']=$_POST['altura'];
header("location: ex3_1.php");
}
?>

</body>
</html>