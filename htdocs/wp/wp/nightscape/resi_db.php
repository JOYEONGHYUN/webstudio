<?php

$mail = $_POST['mail'];
$pass = $_POST['pass'];
$name = $_POST['name'];

$conn = mysqli_connect("localhost", "root", 111111);
mysqli_select_db($conn, "koreavel");
$update = mysqli_query($conn, "INSERT INTO resi VALUES ('$mail','$pass','$name')");
header("Location: https://localhost/shuffle/shuffle/lg.html");
?>
