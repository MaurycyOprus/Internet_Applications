<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>

<body>
    <?php
        require_once("funkcje.php");
        if(!isset($_SESSION['zalogowano']) | $_SESSION['zalogowano'] != 1){
            header("Location: index.php");
        }
        echo "Zalogowano </br>";
        echo "Witaj " . $_SESSION['zalogowanoImie'] . "! </br>";
        if(isset($_POST['wyloguj'])){
            $_SESSION['zalogowano'] = 0;
            header("Location: index.php");
        }
        if(isset($_POST["upload"])){
                $filepath = "images/" . $_FILES["file"]["name"];
                
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
                {
                echo "<img src=".$filepath." height=200 width=300 />";
                } 
                else 
                {
                echo "Error !!!";
                }
            }
    ?>
    <form method="post">
        <input type='submit' onclick="location.href='index.php';" value="wyloguj" name="wyloguj">
    </form>
    <form action='user.php' method='post' enctype='multipart/form-data'>
        <input name='file' type='file'>
        <input type="submit" value="upload" name="upload">
    </form>
</body>

</html>