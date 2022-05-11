<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<form action="form06_redirect.php" method="post">
id_prac <input type="text" name="id_prac">
nazwisko <input type="text" name="nazwisko">
<input type="submit" name="Wstaw" value="Wstaw">
<input type="reset" value="Wyczysc">
</form>
<?php

if(isset($_GET['message'])) {
    if($_GET['message'] == "incorrect")
        echo '<script>alert("Dane pracownika niepoprawne")</script>';
    }
// if (isset($_POST["Wstaw"])) {
//     if (isset($_POST['id_prac']) &&
//     is_numeric($_POST['id_prac']) &&
//     is_string($_POST['nazwisko'])){
//         // wysłanie danych na redirect
//     }
// }
?>
<a href="http://localhost:8080/form06_get.php">wyswietlanie</a>
</body>
</html>
