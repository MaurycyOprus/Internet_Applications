<?php
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
printf("Connect failed: %s\n", mysql_connect_error());
exit();
}
if(isset($_GET['message'])) {
    if($_GET['message'] == "correct")
        echo '<script>alert("Pracownik dodany poprawnie")</script>';
    }
$sql = "SELECT * FROM pracownicy";
$result = $link->query($sql);
foreach ($result as $v) {
echo $v["ID_PRAC"]." ".$v["NAZWISKO"]."<br/>";
}
$result->free();
$link->close();
?>
<a href="http://localhost:8080/form06_post.php">dodawanie</a>