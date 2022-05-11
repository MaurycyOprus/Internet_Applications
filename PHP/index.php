<?php session_start(); ?>
<!DOCTYPE html>

<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8'/>
    <link href='style.css' rel='stylesheet' type='text/css'/>
</head>

<body>
    <?php
        echo '<h1>Nasz System</h1>';
        if(isset($_GET['czas']) && isset($_GET['utworzCookie'])){
            header("Location: cookie.php");
        }
        if(isset($_COOKIE['cookie_1'])){
            echo $_COOKIE['cookie_1'];
        }
    ?>
    <form action='logowanie.php' method='post'>
        <label for='login'>Login:</label>
        <input type='text' name='login'>
        <label for='password'>Hasło:</label>
        <input type='password' name='haslo'>
        <input type='submit' name='zaloguj' value='zaloguj'>
    </form>
    <button onclick="location.href='user.php';">USER</button>
    <form action='cookie.php' method='get'>
        <input type='number' name='czas'>
        <input type='submit' name='utworzCookie'>
    </form>
</body>
    
</html>