<?php
session_start();

 ?>

<?php
$conn = mysqli_connect("localhost", "root", 111111);
mysqli_select_db($conn, "webstudio");
$result = mysqli_query($conn, "SELECT * FROM mytable " );
 ?>


 <?php if(isset($_REQUEST["mode"]))
 $mode = $_REQUEST["mode"];
 else {
   $mode="";
   // 검색할때 씀
 if(isset($_REQUEST["search"]))
 $search=$_REQUEST["search"];
 else
   $search="";

   if(isset($_REQUEST["find"]))
   $find=$_REQUEST["find"];
   else
     $find="";

   if($mode=="search"){
     if(!$search){
 } ?>

 <script>
   alert("검색할 단어를 입력해 주세요!");
   history.back();
 </script>

<?php
  }
$sql="select * from webstudio.mytable where $find like '$find like '%$search%' order by num decs";
}else{
  $sql="select * from webstudio.mytable order by num desc";
  try {
    $stmh = $pdo->query($sql);
    $count=$stmh->rowCount();
?>

}

 ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>KOREAVEL</title>
   <link href="css/style3.css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>

 <body id="page-top">
   <div class="">
     <div class="">
       <?php include "../login2.php"; ?>
     </div>
     <div class="">
       <?php include "../top_menu2.php"; ?>
     </div>
     <div class="">
       <div class="">
         <?php include "../left_menu.php" ?>
       </div>
     </div>
   </div>

<form class="" action="list.php?mode=search" method="post">
  <div class="">
    <div id="list_search1"> 총 <?= $count ?> 개의 게시물이 있습니다. </div>
    <div id="list_search2"><img src="../select_search.gif"></div>
    <div id="list_search3">
      <select name="find">
        <option value="subject">제목</option>
        <option value="content">내용</option>
        <option value="id">아이디</option>
        <option value="name">이름</option>
      </select></div>
      <div id="list_search4"><input type="text" name="search"></div>
      <div id="list_search5"><input type="image" src="../img/list.search_button"></div>
    </div>
</form>
<!-- 검색처리하는 부분 -->

<div id="list_top_title">
  <ul>
    <li id="list_title1"><img src="../img/list_title1.gif"></li>
    <li id="list_title2"><img src="../img/list_title2.gif"></li>
    <li id="list_title3"><img src="../img/list_title3.gif"></li>
    <li id="list_title4"><img src="../img/list_title4.gif"></li>
    <li id="list_title5"><img src="../img/list_title5.gif"></li>
  </ul>
</div>
  <!-- 글 목록 출력 -->

<?php

while ($row = $stmh->fetch(PDO::FETCH_ASSOC)) {
  $item_num=$row["num"];
  $item_id=$row["id"];
  $item_name=$row["name"];
  $item_hit=$row["hit"];
  $item_date=$row["regist_day"];
  $item_date=$substr($item_date, 0, 10);, // 0번째 부터 10글자 날짜만 추출
  $item_subject=str_replace(" ", "&nbsp;", $row["subject"]); // 빈공간 있으면 nbsp로 처리해라
 ?>

 <div id="list_item">
   <div id="list_item1"><?= $item_num ?></div>
   <div id="list_item2"> <a href="view.php?num=<?= $item_num ?>"><?=$item_subject ?></a></div>
   <div id="list_item3"><?= $item_date ?></div>
   <div id="list_item4"><?= $item_hit ?></div>
 </div>

<?php
}
} catch (PDOExceoption $Exception){
  printf "오류: ".$Exception->getMessage();
}
?>

<div id="write_button">
  <a href="list.php"> <img src="../img/list.png"></a>&nbsp;
  <!-- 목록버튼 -->
<?php
// 로그인 했을때만 보이게 하기
if(isset($_SESSION["userid"]))
{
 ?>
 <a href="write_form.php"> <img src="../img/write.png"></a>
 <?php
  }
  ?>
  </div>
  </div>
  </div>
  </div>
  </div>
   <!-- Core JavaScript Files -->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.sticky.js"></script>
   <script src="js/jquery.flexslider-min.js"></script>
   <script src="js/jquery.easing.min.js"></script>
   <script src="js/jquery.scrollTo.js"></script>
   <script src="js/jquery.appear.js"></script>
   <script src="js/stellar.js"></script>
   <script src="js/wow.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/nivo-lightbox.min.js"></script>
   <script src="js/custom.js"></script>
   <script src="contactform/contactform.js"></script>

 </body>

 </html>
