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
                <li><a href= "ex2.php">Ex 02</a></li>
                <li><a href= "../ex3/ex3.php">Ex 03</a></li>
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

    $_SESSION['user'] = $_POST['user'];
    $_SESSION['pass'] = $_POST['pass'];

    $_SESSION['permissao'];

    if($_SESSION['user'] == 'automacao' && $_SESSION['pass'] == 'turma1au'){
        $_SESSION['permissao'] = 1;
    } else {
        $_SESSION['permissao'] = 0;
    }

    if(isset($_SESSION['permissao'])){
        header('location: ex2_result.php');
    }
    
?>
</body>
</html>