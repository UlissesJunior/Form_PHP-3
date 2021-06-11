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
    <form action="" method="post">
    <div class="wrapper">
    <h1>Questão 7<h1>
    Qual o nick do maior campeão do Cblol?
    </div>
    <div class="wrapper">
      <input type="radio" name="select" id="option-1" checked>
      <input type="radio" name="select" value="1" id="option-2">
      <input type="radio" name="select" id="option-3">
      <input type="radio" name="select" id="option-4">
      <label for="option-1" class="option option-1">
        <div class="dot"></div>
        <span>Tay</span>
      </label>
      <label for="option-2" class="option option-2">
        <div class="dot"></div>
        <span>BRTT</span>
      </label>
      <label for="option-3" class="option option-3">
        <div class="dot"></div>
        <span>Cariok</span>
      </label>
      <label for="option-4" class="option option-4">
        <div class="dot"></div>
        <span>Ranger</span>
      </label>
    </div>
    <div>
    <button class="send" type="submit"><a href="ex4_6.php">➤</a></button>  
    <button class="send" type="submit">➤</button>  
</div>

<?php
if($_POST) {
session_start();
    if(isset($_POST['select'])){
        if($_POST['select'] != '1'){
            header('location: ex4_8.php');
        } else {
            $_SESSION['cont']++;
            header('location: ex4_8.php');
        }   
    }
}
?>
</body>
</html>