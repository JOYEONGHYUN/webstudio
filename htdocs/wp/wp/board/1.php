<?php
//session_start();
$conn = mysqli_connect("localhost", "root", 111111);
mysqli_select_db($conn, "opentutorials");
$result = mysqli_query($conn, "SELECT * FROM regi");
$userid = $_POST['userid'];
$password = $_POST['password'];
//$pw=md5($password);

require("lib/db.php");

if(!$userid){
  Error("Please input your ID");
}

while( $row = mysqli_fetch_assoc($result)){

  if(!$password)
  {
  Error("Please input your password");
  }
  else if($password != $row['password'])
  {
    Error("your password is incorrect. Please try again");
  }
}

setcookie('user_id',$userid,time()+(86400*30),'/');
setcookie('user_name',$password,time()+(86400*30),'/');
header('Location: http://localhost/index_user_login.php');

?>
