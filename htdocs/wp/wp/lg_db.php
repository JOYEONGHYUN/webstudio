<?php
$mail = $_POST['mail'];
$pass = $_POST['pass'];

$conn = mysqli_connect("localhost", "root", 111111);
mysqli_select_db($conn, "webstudio");
$result = mysqli_query($conn, "SELECT * FROM koreavel " );
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/style_login.css">
</head>
<body>

<body id="target">
    <nav>
        <ol>

    <?php
    while( $row = mysqli_fetch_assoc($result)){
      if($row['mail']==$mail){
        if($row['pass']==$pass){

          session_start();
          $_SESSION['mail'] = $mail;
          ?>
          <script language="JavaScript" type="text/javascript">
          opener.location.reload();
          window.close();
         </script>

<?php
              }
    }
  }
    ?>
        </ol>


        <div class="wrapper">
        <div class="container">
          <h1>로그인에 실패하였습니다.</h1>
        </div>

        <ul class="bg-bubbles">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

          <script  src="js/index_login.js"></script>

    </nav>
</body>
</html>
