<?php
session_start();

require('funkcje.php');
if(isset($_POST["zaloguj"])){
    $_POST['login'] = test_input($_POST['login']);
    $_POST['haslo'] = test_input($_POST['haslo']);
    if($_POST['login'] == $osoba1->login and $_POST['haslo'] == $osoba1->haslo){
        $_SESSION['zalogowano'] = 1;
        $_SESSION['zalogowanoImie'] = $osoba1->imieNazwisko;
        header("Location: user.php");
    }
    else if($_POST['login'] == $osoba2->login and $_POST['haslo'] == $osoba2->haslo){
        $_SESSION['zalogowano'] = 1;
        $_SESSION['zalogowanoImie'] = $osoba2->imieNazwisko;
        header("Location: user.php");
    }
    else{
        header("Location: index.php");
    }
}

?>