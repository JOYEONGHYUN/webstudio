<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>KOREAVEL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <script language="javascript">

  function open_win()
  {
   window.open('./lgin.html','popup', 'width=400, height=600, left=0, top=0, toolbar=no, location=no, directories=no, status=no, menubar=no, resizable=no, scrollbars=no, copyhistory=no');
  }

  function open_reg()
  {
   window.open('./resi.html','popup', 'width=600, height=800, left=0, top=0, toolbar=no, location=no, directories=no, status=no, menubar=no, resizable=no, scrollbars=no, copyhistory=no');
  }
  </script>
</head>
<body>


      <!-- Navigation 고정된 네비게이션 메뉴에 해당 -->
        <nav class="navbar navbar-default fixed-top" style="background-color:#F05F40; font-size:14px; min-height:30px; padding-top:1px;" role="navigation">
        <div class="ft-white" style="float:right;">
          <?php if(!isset($_SESSION['mail'])) { ?>
            <a class="row-sm-6" href="javascript:open_win();" style="color:white;">로그인</a>&nbsp;&nbsp;&nbsp;
            <a class="row-sm-6" href="javascript:open_reg();" style="color:white;">회원가입</a>&nbsp;&nbsp;&nbsp;
              <?php }else{ ?>
        <a class="row-sm-6" href="./lgout.php">로그아웃</a>&nbsp;&nbsp;&nbsp;
        <a class="row-sm-6" href="./invite_mypage.php" class="font_11">내정보</a>&nbsp;&nbsp;&nbsp;
        <?php  }?>
        </div>
      </nav>

  <style>
    .ft{
      color: black;
    }
    .ft-white a{
      color: #F2F2F2;
      font
    }
    .nostyle{
      list-style: none;
    }
    .nostyle a{
      font-weight: bold;
    }
  </style>

      <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav"  style="background-color:white; margin-top:20px;">
        <div class="container">
          <a class="navbar-brand" style="color: #F05F40; font-size:25px;" href="/wp/wp/002.php"><strong>KOREAVEL</strong></a>
          <ul class="nav navbar-nav navbar-right">

            <li class="dropdown"><a class="dropdown-toggle row-sm-6" style="font-size: 20px; color:black; font-weight:bold;" data-toggle="dropdown" href="#">명소소개</a>
              <ul class="dropdown-menu">
                <li class="nostyle"><a class="ft" href="../wp/016.html">페스티벌</a></li>
                <li class="nostyle"><a class="ft" href="../wp/017.html">북촌한옥마을</a></li>
              </ul>
            </li>

            <li class="dropdown"><a class="dropdown-toggle row-sm-6" style="font-size: 20px; color:black; font-weight:bold;" data-toggle="dropdown" href="#">음식소개</a>
              <ul class="dropdown-menu">
              <li class="dropdown"><a class="dropdown-toggle row-sm-6" style="font-size: 20px; color:black;" data-toggle="dropdown" href="#">찌  개</a>
                <li class="nostyle"><a class="ft" href="../wp/015.html">김치찌개</a></li>
                <li class="nostyle"><a class="ft" href="../wp/018.html">된장찌개</a></li>
              </li>
            </ul>
          </li>

            <li class="dropdown"><a class="dropdown-toggle row-sm-6" style="font-size: 20px; color:black; font-weight:bold;" data-toggle="dropdown" href="#">서울축제</a>
              <ul class="dropdown-menu">
                <li><a href="../wp/festival/1.php">(4월)여의도 벚꽃축제</a></li>
                <li><a href="../wp/festival/2.php">(5월)청계천 연등축제</a></li>
                <li><a href="../wp/festival/3.php">(7월)신촌 물총축제</a></li>
                <li><a href="../wp/festival/4.php">(10월)여의도 불꽃축제</a></li>
                <li><a href="../wp/festival/5.php">(10월)억새축제</a></li>
                <li><a href="../wp/festival/6.php">(10월)이태원 할로윈축제</a></li>
                <li><a href="../wp/festival/7.php">(11월)청계천 빛초롱축제</a></li>
              </ul>
            </li>

            <li class="dropdown"><a class="dropdown-toggle row-sm-6" style="font-size: 20px; color:black; font-weight:bold;" data-toggle="dropdown" href="#">야경명소</a>
              <ul class="dropdown-menu">
                <li><a href="../wp/nightscape/1.php">롯데월드타워</a></li>
                <li><a href="../wp/nightscape/2.php">63빌딩</a></li>
                <li><a href="../wp/nightscape/3.php">경복궁</a></li>
                <li><a href="../wp/nightscape/4.php">수원화성</a></li>
                <li><a href="../wp/nightscape/5.php">일산호수공원</a></li>
                <li><a href="../wp/nightscape/6.php">낙산공원</a></li>
                <li><a href="../wp/nightscape/7.php">N서울타워</a></li>
                <li><a href="../wp/nightscape/8.php">한강(세빛섬)</a></li>
                <li><a href="../wp/nightscape/9.php">DDP</a></li>
                <li><a href="../wp/nightscape/10.php">광화문</a></li>
                <li><a href="../wp/nightscape/11.php">청계천</a></li>
              </ul>
            </li>

            <li class="dropdown"><a class="dropdown-toggle row-sm-6" style="font-size: 20px; color:black; font-weight:bold;" data-toggle="dropdown" href="#">전통행사</a>
              <ul class="dropdown-menu">
                <li><a href="../wp/traditional/1.php">(2월)설날</a></li>
                <li><a href="../wp/traditional/2.php">(3월)화전놀이</a></li>
                <li><a href="../wp/traditional/3.php">(5월)단오</a></li>
                <li><a href="../wp/traditional/4.php">(7월)초복</a></li>
                <li><a href="../wp/traditional/5.php">(10월)추석</a></li>
                <li><a href="../wp/traditional/6.php">(11월)김장</a></li>
                <li><a href="../wp/traditional/7.php">(12월)동지</a></li>
                <li><a href="../wp/traditional/8.php">(1월)신년맞이</a></li>
                <li><a href="../wp/traditional/9.php">(1월)해맞이</a></li>
              </ul>
            </li>

            <li class="dropdown"><a class="dropdown-toggle row-sm-6" style="font-size: 20px; color:black; font-weight:bold;" data-toggle="dropdown" href="#">여행후기</a>
              <ul class="dropdown-menu">
                <li class="nostyle"><a class="ft" href="../wp/003.php">명동</a></li>
                <li class="nostyle"><a class="ft" href="../wp/003.php">경복궁</a></li>
                <li class="nostyle"><a class="ft" href="../wp/003.php">N서울타워</a></li>
                <li class="nostyle"><a class="ft" href="../wp/003.php">북촌한옥마을</a></li>
              </ul>
            </li>

            <li class="dropdown"><a class="dropdown-toggle row-sm-6" style="font-size: 20px; color:black; font-weight:bold;" data-toggle="dropdown" href="#">관광지</a>
              <ul class="dropdown-menu">
                <li class="nostyle"><a class="ft" href="./new/new/PhotoGalary.html">관광지 모아보기</a></li>
              </ul>
            </li>
          </ul>
        </div>
        </div>
      </nav>

      <style>
        .whitebtn{
          font-weight: bold;
          font-size: 15px;
          padding-top: 10px;
          padding-bottom: 10px;
          padding-left: 40px;
          padding-right: 40px;
          border-width: 2px;
          border-style: solid;
          border-color: white;
          color:black;
          display: inline;
          text-decoration:none;
          background-color: white;
        }
      </style>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/slide1.jpg" alt="Los Angeles" style="width:100%; max-height:550px;">
        <div class="carousel-caption" style="margin-bottom:50px;">
          <a style="text-decoration:none;" href="../wp/nightscape/3.php"><h1 style="display:inline; background-color:black; color:white;">경복궁</h1></a>
          <p style=" padding-top:200px;"><h3 style="display:inline;">한국의 전통적 아름다움</h3></p>
          <div class="" style="padding-top:30px;">
            <a class="whitebtn" href="../wp/nightscape/3.php">야간 개장</a>
            <a style="padding-left:40px; padding-right:40px;"href="#"></a>
            <a class="whitebtn" href="#works">한복 체험</a>
          </div>
        </div>
      </div>

      <div class="item">
        <img src="img/slide2.jpg" alt="Chicago" style="width:100%; max-height:550px;">
        <div class="carousel-caption" style="margin-bottom:50px;">
          <a style="text-decoration:none;" href="../wp/nightscape/1.php"><h1 style="display:inline; background-color:black; color:white;">롯데월드타워</h1></a>
          <p style=" padding-top:150px; "><h3 style="display:inline;">한국의 서구적 아름다움</h3></p>
        <div class="" style="padding-top:30px;">
          <a class="whitebtn" href="../wp/nightscape/2.php">63 빌딩</a>
          <a style="padding-left:40px; padding-right:40px;"href="#"></a>
          <a class="whitebtn" href="../wp/nightscape/3.php">경복궁 야경</a>
        </div>
      </div>
    </div>

      <div class="item">
        <img src="img/slide3.jpg" alt="New york" style="width:100%; max-height:550px;">
        <div class="carousel-caption" style="margin-bottom:50px;">
            <a style="text-decoration:none;" href="../wp/017.html"><h1 style="display:inline; background-color:black; color:white;">북촌한옥마을</h1></a>
            <p style=" padding-top:150px;"><h3 style="display:inline;">한국의 아름다운 전통가옥</h3></p>
        <div class="" style="padding-top:30px;">
            <a class="whitebtn" href="../wp/traditional/2.php">화전 놀이</a>
            <a style="padding-left:40px; padding-right:40px;"href="#"></a>
            <a class="whitebtn" href="../wp/traditional/1.php">설 날</a>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div

</body>
</html>
