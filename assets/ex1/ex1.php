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
                <li><a href= "#">Ex 01</a></li>
                <li><a href= "../ex2/ex2.php">Ex 02</a></li>
                <li><a href= "../ex3/ex3.php">Ex 03</a></li>
                <li><a href= "../ex4/ex4.php">Ex 04</a></li>
            </ul>
        </nav>
        <div class="nav-right">
        <a class href="#"></a><button>Lista 3</button>
        </div>
    </header>
<body>

<div class="login1">   
    <form action="" method="post">
    <h2>Login<h2> 
    <input type="text" name="user" class="input">
    <div>
    <button class="send" type="submit">Confirm</button>  
    <button class="send" type="submit"><a href="ex1result.php">Login</a></button>   
    </div>
    
</div>
     
    <form>

    

<?php
if($_POST) {
session_start();
$_SESSION[' '] = $_POST["user"];
}
?>
</body>
</html>