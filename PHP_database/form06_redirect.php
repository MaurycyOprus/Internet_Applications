<?php
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
if($_POST["Wstaw"] == "Wstaw")
{
try{
    $sql = "INSERT INTO pracownicy(id_prac,nazwisko) VALUES(?,?)";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("is", $_POST['id_prac'], $_POST['nazwisko']);
    $result = $stmt->execute();
    // printf("Query failed: %s\n", mysqli_error($link));
    $_POST['Wstaw'] = 'juz_wstawione';
    header('Location: form06_get.php?message=correct');
}
catch(Exception $e){
    header('Location: form06_post.php?message=incorrect');
}

$stmt->close();
}
?>