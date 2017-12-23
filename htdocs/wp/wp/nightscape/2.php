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
      <a class="row-sm-6" href="javascript:open_reg();" style="color:white;">회원가입</a>&nbsp;&nbsp;&nbsp;
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
                  <h1 style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>63빌딩</strong></h1>
                  <hr>
                  </div>
                      <article style="padding-top:20px;">
                  <div class="imgview">
                    <div class="row" style="width:800px;">
                      <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/u02.jpg" alt="Lights" style="width:300px; height:250px;">
                            <div class="caption">
                              <p>한국의 대표랜드마크</p>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/nature.jpg" target="_blank">
                            <img src="img/u03.png" alt="Nature" style="width:300px; height:250px;">
                            <div class="caption">
                              <p>최고의 데이트코스</p>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/fjords.jpg" target="_blank">
                            <img src="img/u04.jpg" alt="Fjords" style="width:300px; height:250px;">
                            <div class="caption">
                              <p>밤과 불빛의 조화</p>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br/>
                    <p style="font-size:20px;">
                      <strong><h2>.63빌딩은</h2></strong><br/>
                      63빌딩은 해발 264m, 지상고 249m로서, 해발 265m인 남산의 정상보다 1m가 낮다. 지상 60층, <br>
                      지하 3층으로 이루어져 있고, 시계반경이 50km인 60층 전망대에 오르면 <br>
                       서울의 도심을 한 눈에 볼 수 있을 뿐 아니라 쾌청한 날이면 인천 앞바다까지도 볼 수 있다. <br/><br/>
                      <div class="imgview">
                        <img style="width:600px; height:450px;"src="img/u01.png" alt="">
                      </div>
                      오랫동안 대한민국에서 가장 높은 건물이었으나, 2002년 서울 목동에 하이페리온 타워(256m)가 건설된 것을 필두로 이후 <br>
                       도곡동 타워팰리스(264m), IFC서울(285m), 해운대 아이파크 타워(292m), 송도 더샾퍼스트월드(237m), <br>
                       해운대 위브더제니스타워 (301m), 동북아트레이드타워(313m) 등 많은 마천루들이 건설되면서 순위에서 밀려났다. <br>
                       하지만 일반 시민이 자유롭게 출입할 수 있는 건물 중에서는 두 번째로 높은 건물이다. <br/>
                  <br/>
                  </p>
                  <div class="imgview">
                    <img style="width:600px; height:350px;"src="img/u07.jpg" alt="">
                  </div>
                    <div style="width:630px;">
                      <p>
                      <ul>
                        <strong>이용시간&nbsp; :</strong> &nbsp; 오전 10:00~오후 10:00 <br>
                        <strong>이용요금&nbsp; :</strong> &nbsp; <br>어른&nbsp; &nbsp; &nbsp; :&nbsp; 13000원 &nbsp; <br>청소년&nbsp; :&nbsp; 12000원 <br>어린이&nbsp; :&nbsp; 11000원<br/>
                        <strong>계절&nbsp; :</strong> &nbsp;사계절
                        <strong>장소&nbsp; :</strong> &nbsp;여의나루 역,&nbsp; 5번&nbsp;  출구,&nbsp;  무료셔틀버스를&nbsp;  이용바랍니다. <br>
                        <br/><strong>주요행사&nbsp; :</strong> &nbsp;전망대 서울관측<br/>
                        <strong>주의사항&nbsp; :</strong> &nbsp;의외로 상당히 높기때문에 높은곳이 불편하신분은 주의해주세요! <br> (21:30/티켓마감)
                        <br/><strong>자세히보기&nbsp; :</strong> &nbsp;<a href="https://www.63art.co.kr">https://www.63art.co.kr/</a></li>
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
