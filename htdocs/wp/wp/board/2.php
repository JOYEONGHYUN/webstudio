
<?php
session_start();
$conn = mysqli_connect("localhost", "root", 111111);
mysqli_select_db($conn, "opentutorials") or die('DB 선택 실패');

//$pwd = md5($_POST['password']); // 총길이를 32로 해줘야된다 16자리로 바꾸는거라서 2바이트씩 잡아먹는다 치면 32가 나옴
$sql = "INSERT INTO regi (userid,password,firstname,lastname,email) VALUES('".$_POST['userid']."', '".$_POST['password']."', '".$_POST['firstname']."',
'".$_POST['lastname']."','".$_POST['email']."')";
// DB저장은 한번에 한 테이블에서만 저장이 된다 / 다른 테이블에도 데이터를 전달해서 삽입하고 싶은데 어떻게 해야될까 ??
$sql2 = "INSERT INTO private (firstname,lastname,email) VALUES('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."')";

$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);

setcookie('user_id',$_POST['userid'],time()+(60*60*60),'/');
setcookie('user_name',$_POST['password'],time()+(60*60*60),'/');

header('Location: http://localhost/index_user_login.php');

 ?>
