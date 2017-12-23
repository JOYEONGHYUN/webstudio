<?php

$mail = $_POST['mail'];
$pass = $_POST['pass'];
$name = $_POST['name'];

$conn = mysqli_connect("localhost", "root", 111111);
mysqli_select_db($conn, "webstudio");
$update = mysqli_query($conn, "INSERT INTO koreavel VALUES ('$mail','$pass','$name')");
header("Location: ./lg.html");
?>
