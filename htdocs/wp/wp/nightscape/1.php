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
  <script language="javascript">

  function open_win()
  {
   window.open('lgin.html','popup', 'width=400, height=600, left=0, top=0, toolbar=no, location=no, directories=no, status=no, menubar=no, resizable=no, scrollbars=no, copyhistory=no');
  }

  function open_reg()
  {
   window.open('resi.html','popup', 'width=600, height=800, left=0, top=0, toolbar=no, location=no, directories=no, status=no, menubar=no, resizable=no, scrollbars=no, copyhistory=no');
  }

  </script>
</head>

<body id="page-top">
<style>
  .ft-white a{
    color: white;
  }
</style>

<!-- Navigation 고정된 네비게이션 메뉴에 해당 -->
  <nav class="navbar navbar-default fixed-top" style="background-color:#F05F40; font-size:14px; min-height:30px; padding-top:1px;" role="navigation">
  <div class="ft-white" style="float:right;">
    <?php if(!isset($_SESSION['mail'])) { ?>
      <a class="row-sm-6" href="javascript:open_win();" style="color:white;">로그인</a>&nbsp;&nbsp;&nbsp;
      <a class="row-sm-6" href="javascript:open_reg();" style="color:white;">회원가입</a>&nbsp;&nbsp;&nbsp;<a class="row-sm-6" href="./index.php?mobile=on"  style="color:white;"><img src="img/mobile_btn.png" alt="모바일모드" title="모바일모드"></a>&nbsp;&nbsp;&nbsp;
  <?php }else{ ?>
  <a class="row-sm-6" href="./lgout.php" style="color:white;"><img src="img/lgout_btn.png" alt="로그아웃" title="로그아웃"></a>&nbsp;&nbsp;&nbsp;
  <a class="row-sm-6" href="./invite_mypage.php" style="color:white;"><img src="img/mypg_btn.png" alt="내정보" title="내정보"></a>&nbsp;&nbsp;&nbsp;
  <?php  }?>
  </div>
</nav>

  <div id = 'wrap' class="sbg">
        <div id="topwrap">
          <div class ="d_width">
            <div style="padding:12px 0 0 0;">
              <form name="MainSearch_form" action="../search/search_tour.htm" method="get" title="통합검색">
                <fieldset>
                  <legend>통합검색</legend>
                  <div class="" style="float:left; margin-left:40px;"><a style="color:#F05F40; font-size:25px; font-weight:bold; margin-bottom:2px;" href="/wp/wp/002.php">KOREAVEL</a></div>
                    <div class="topsearch2">
                    <label for="Keywords_top" class="hidden">통합검색어 입력</label>
                    <input type="text" class="text" name="Keywords" value="" onkeydown="SearchinputSendit();" title="통합검색어 입력영역">
                    <input type="image" src="http://www.dh.go.kr/img/ico_topsearch.png"  class="image">
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
                                  <div>
                                    <div id="gnb" style="background-color:black;">
                                      <div id= "gnbmn" style="overflow: visible; opacity: 1;">
                                        <ul class = "depth1">
                                          <li>
                                            <a href="../wp/017.html" style="text-indent: 0px;">명소소개</a>
                                          </li>
                                          <li>
                                            <a href="../food/1.php" style="text-indent: 0px;">음식소개</a>
                                          </li>
                                          <li>
                                            <a href="../festival/1.php" style="text-indent: 0px;">서울축제</a>
                                          </li>
                                          <li>
                                            <a href="../nightscape/1.php" style="text-indent: 0px;">야경명소</a>
                                          </li>
                                          <li>
                                            <a href="../traditional/1.php" style="text-indent: 0px;">전통행사</a>
                                          </li>
                                           <li>
                                            <a href="../after/1.php" style="text-indent: 0px;">여행후기</a>
                                            </li>
                                        </ul>

                                      </div>
                                      <div class = "clear" style="background-color:white;"></div>
                                      <div style="overflow: hidden; opacity: 1; height: 2.84217e-20px; background-color:white;"></div>
                                    </div>
                                  </div>
                                </div>
<div class="clear"></div>
                  <section style="float:right;">
                  <div style="width:600px; padding-top:77px; margin-right:210px">
                    <div class="post">
                      <div style="padding-top:30px;">
                  <h1 style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>롯데월드 타워</strong></h1>
                  <hr>
                  </div>
                      <article style="padding-top:20px;">
                  <div class="imgview">
                    <div class="row" style="width:800px;">
                      <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/r01.jpg" alt="Lights" style="width:300px; height:250px;">
                            <div class="caption">
                              <p>원석 같은 아름다운 타워</p>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/nature.jpg" target="_blank">
                            <img src="img/r02.jpg" alt="Nature" style="width:300px; height:250px;">
                            <div class="caption">
                              <p>불꽃에 비치는 아름다움</p>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/fjords.jpg" target="_blank">
                            <img src="img/r03.jpg" alt="Fjords" style="width:300px; height:250px;">
                            <div class="caption">
                              <p>잠실 속 랜드마크</p>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br/>
                    <p style="font-size:20px;">
                      <strong><h2>.롯데월드 타워는</h2></strong><br/>
                    이 건물은 한반도에서 가장 높은 건물이 되었다. <br>
                    또한 세계에서 6번째로 높고 아시아에서 3번째로 높고
                    대한민국 내에서는 최고층 건물이 되었다. <br>
                    OECD 국가 중에서는 미국의 1WTC(원 월드 트레이드 센터, 541m)를 제치고 가장 높은 건물이 되며, <br>
                    세계에서 두번째로 높은 전망대(500m)를 가지게 된다. <br>
                    흔히 제2롯데월드라고 하는 건물이 바로 이 건물이다. <br/><br/>
                      <div class="imgview">
                        <img style="width:600px; height:450px;"src="img/r04.jpg" alt="">
                      </div>
                      외국에서는 과거 롯데월드프리미엄타워(영어: Lotte World Premium Tower)라는 명칭으로 알려진 바가 있고 <br>
                      2009년 본격적으로 공사에 들어갔으나, 2010년 건물 명칭을 기존 '롯데수퍼타워'에서 '롯데월드타워'(영어: Lotte World Tower)로 <br>
                      바뀌었고, 제2롯데월드와 롯데월드타워의 명칭은 지금에 이르고 있다. <br/>
                  <br/>
                  </p>
                  <div class="imgview">
                    <img style="width:600px; height:450px;"src="img/r05.jpg" alt="">
                  </div>
                    <div style="width:630px;">
                      <p>
                      <ul>
                        <strong>이용시간&nbsp; :</strong> &nbsp; 오전 10:00~오후 10:00 <br>
                        <strong>이용요금&nbsp; :</strong> &nbsp; <br>어른&nbsp; &nbsp; &nbsp; :&nbsp; 27000원 &nbsp; <br>어린이&nbsp; :&nbsp; 24000원<br/>
                        <strong>계절&nbsp; :</strong> &nbsp;사계절
                        <strong>장소&nbsp; :</strong> &nbsp;잠실 역, 걸어서 2분
                        <br/><strong>주요행사&nbsp; :</strong> &nbsp;전망대 서울관측<br/>
                        <strong>주의사항&nbsp; :</strong> &nbsp;의외로 상당히 높기때문에 높은곳이 불편하신분은 주의해주세요!
                        <br/><strong>자세히보기&nbsp; :</strong> &nbsp;<a href="https://www.lwt.co.kr/tower/main/main.do">https://www.lwt.co.kr/tower/main/main.do</a></li>
                      </ul>
                      </p>
                    </div>
                  </article>

</div>
        <!-- ////////////////////////////////////////////////////////////// -->
        </section>

<section style="float:left;">
  <h3>서울축제</h3>
    <div class="col-md-2" style="min-width:300px; padding-top:20px;">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">야경명소</a></li>
        <li><a href="../nightscape/1.php">롯데월드타워</a></li>
        <li><a href="../nightscape/2.php">63빌딩</a></li>
        <li><a href="../nightscape/3.php">경복궁</a></li>
        <li><a href="../nightscape/4.php">수원화성</a></li>
        <li><a href="../nightscape/5.php">일산호수공원</a></li>
        <li><a href="../nightscape/6.php">낙산공원</a></li>
        <li><a href="../nightscape/7.php">N서울타워</a></li>
        <li><a href="../nightscape/8.php">한강(세빛섬)</a></li>
        <li><a href="../nightscape/9.php">DDP</a></li>
        <li><a href="../nightscape/10.php">광화문</a></li>
        <li><a href="../nightscape/11.php">청계천</a></li>
      </ul>
    </div>
    <div class="clearfix visible-lg"></div>
</section>
<div class="clear">
</div>
<div style="margin-top:50px; margin-left:100px;">

<script>
  $(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

<style>
#panel, #flip {
    text-align: center;
    background-color: white;
    font-size:30px;
    font-weight: bold;
}

#panel {
    display: none;
}
</style>

<div id="flip">지하철 노선도 - 잠실 역 위치 - 클릭</div>

<div style="margin-top:40px;"></div>

<div id="panel"><img style="width:1000px; height:700px;" src="img/subway02.jpg"alt=""></div>
</div>

  </div>
</div>

<!-- <div class="clear"></div> -->
<div class = "clear"></div>
</div>
</div>
</div>


    <!-- /Navigation -->




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
