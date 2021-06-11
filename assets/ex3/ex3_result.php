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
                <li><a href= "ex3.php">Ex 03</a></li>
                <li><a href= "../ex4/ex4.php">Ex 04</a></li>
            </ul>
        </nav>
        <div class="nav-right">
        <a class href="#"></a><button>Lista 3</button>
        </div>
    </header>
<body>
<?php
session_start();
if($_SESSION['altura']>$_SESSION['altura1']) {
    echo "<h2>1- ".$_SESSION['name'] ." é maior que ".$_SESSION['name1'];
}
else if($_SESSION['altura']<$_SESSION['altura1']) {
    echo "<h2>1- ".$_SESSION['name1'] ." é maior que ".$_SESSION['name'];
}
else if($_SESSION['altura']==$_SESSION['altura1']) {
    echo "<h2>1- ".$_SESSION['name'] ." tem a mesma altura que ".$_SESSION['name1'];
}

if($_SESSION['idade']>$_SESSION['idade1']) {
    echo "<h2>2- ".$_SESSION['name'] ." é mais velho que ".$_SESSION['name1'];
}
else if($_SESSION['idade']<$_SESSION['idade1']) {
    echo "<h2>2- ".$_SESSION['name1'] ." é mais velho que ".$_SESSION['name'];
}
else if($_SESSION['idade']==$_SESSION['idade1']) {
    echo "<h2>2- ".$_SESSION['name'] ." tem a mesma idade que ".$_SESSION['name1'];
}

if($_SESSION['idade']>$_SESSION['idade1']) {
    echo "<h2>3- ".$_SESSION['name'] ." tem peso maior que ".$_SESSION['name1'];
}
else if($_SESSION['idade']<$_SESSION['idade1']) {
    echo "<h2>3- ".$_SESSION['name1'] ." tem peso maior que ".$_SESSION['name'];
}
else if($_SESSION['idade']==$_SESSION['idade1']) {
    echo "<h2>3- ".$_SESSION['name'] ." tem o mesmo peso que ".$_SESSION['name1'];
}
?>
</body>
</html>