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
                <li><a href= "../ex3/ex3.php">Ex 03</a></li>
                <li><a href= "ex4.php">Ex 04</a></li>
            </ul>
        </nav>
        <div class="nav-right">
        <a class href="#"></a><button>Lista 3</button>
        </div>
    </header>
<body>

<div class="login1">   
    <div class="wrapper">
    <?php
    session_start();

    echo("<h2>Resultado</h2><br>");
    echo('Parabéns ' . $_SESSION['name'] .  '! Quiz concluído!');
    echo('<br>Número de Acertos: ' . $_SESSION['cont']);
    echo('<br>Número de Erros: ' . 10-$_SESSION['cont']);

    echo('<form action="ex4.php">
    <button type="submit">Reiniciar</button>
    </form>')
    ?>
</div>
</body>
</html>