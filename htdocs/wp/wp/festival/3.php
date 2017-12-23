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
                  <h1 style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>신촌 물총축제</strong></h1>
                  <hr>
                  </div>
                      <article style="padding-top:20px;">
                  <div class="imgview">
                    <div class="row" style="width:900px;">
                      <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/w05.jpg" alt="Lights" style="width:250px; height:150px;">
                            <div class="caption">
                              <p>한국의 시원한 여름</p>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/nature.jpg" target="_blank">
                            <img src="img/w04.jpg" alt="Nature" style="width:250px; height:150px;">
                            <div class="caption">
                              <p>세계인이 함께하는 축제</p>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/fjords.jpg" target="_blank">
                            <img src="img/w03.jpg" alt="Fjords" style="width:250px; height:150px;">
                            <div class="caption">
                              <p>잊을수 없는 추억</p>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br/>
                    <p style="font-size:20px;">
                      <strong><h2>.신촌 물총축제는</h2></strong><br/>
                      신촌 물총축제는 "축제로 대한민국을 더 즐겁게 만들자" 는 비전 아래 대한민국 신촌을 시작으로 진행되고 있다.
                      이색적인 아이디어, 다양한 아티스트, 지역적 특성 요소들을 가미하여 즐거운 상상의 실천, 도심 기반형 문화축제를 자립시키고
                       "물총"을 통하여 지역, 인종, 언어, 나이를 넘어서는 즐거움을 전달하며 뜨거운 여름의 열기를 날려버릴 진정한
                        "도심 속 피서"를 연출한다. <br/><br/>
                      <div class="imgview">
                        <img style="width:600px; height:450px;"src="img/w02.jpg" alt="">
                      </div>
                     매년 신촌의 여름은 다양한 퍼레이드와 DJ 공연, 버블파티, 워터 어트랙션등 많은 사람들의 시원함을 날려줍니다. <br/>
                      아직까지 신촌의 시원한 축제에 대해서 모르는 사람이 많으며, 명동의 쇼핑, N서울타워의 아름다운 야경도 좋지만 <br/>
                      시원한 여름에는 신촌에서 물총 한자루를 들고 모두와 함께 시원함을 만끽하는 것은 어떠세요? <br/>
                  <br/>
                  </p>
                  <div class="imgview">
                    <img style="width:600px; height:450px;"src="img/w01.jpg" alt="">
                  </div>
                    <div style="width:630px;">
                      <p>
                      <ul>
                        <strong>관람소요시간&nbsp; :</strong> &nbsp;
                        7월 말 ~ 8월 초 기간내 &nbsp;자유 &nbsp;(축제일정이 변경될 수 있습니다.)
                        <br><strong>이용요금&nbsp; :</strong> &nbsp; 무료<br/>
                        <strong>계절&nbsp; :</strong> &nbsp;여름 <br>
                        <strong>장소&nbsp; :</strong> &nbsp;신촌 역, 걸어서 2분
                        <br/><strong>주요행사&nbsp; :</strong> &nbsp;물총축제&nbsp; - &nbsp;07.29 &nbsp;~ 07.30 <br/>
                        - 신촌에 불시착한 우주선
                        <br>- 외계인의 신무기 ： 워터 어트랙션
                        <br>- 외계군단 퍼레이드
                        <br>- “Fever Time”버블파티
                        <br>- Galaxy DJ 공연 <br>
                        <strong>자세한 내용 : </strong><a href="http://korean.visitkorea.or.kr/kor/bz15/where/festival/festival.jsp?cid=1917813">http://korean.visitkorea.or.kr/kor/bz15/where/ <br> festival/festival.jsp?cid=1917813</a>
        <!-- ////////////////////////////////////////////////////////////// -->
        </section>

<section style="float:left;">
  <h3>서울축제</h3>
    <div class="col-md-2" style="min-width:300px; padding-top:20px;">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="../festival/1.php">서울축제</a></li>
        <li><a href="../festival/1.php">(4월)여의도 벚꽃축제</a></li>
        <li><a href="../festival/2.php">(5월)청계천 연등축제</a></li>
        <li><a href="../festival/3.php">(7월)신촌 물총축제</a></li>
        <li><a href="../festival/4.php">(10월)여의도 불꽃축제</a></li>
        <li><a href="../festival/5.php">(10월)억새축제</a></li>
        <li><a href="../festival/6.php">(10월)이태원 할로윈축제</a></li>
        <li><a href="../festival/7.php">(11월)청계천 빛초롱축제</a></li>
      </ul>
    </div>
    <div class="clearfix visible-lg"></div>
</section>
<div class="clear">
</div>
<div style="margin-top:50px; margin-left:100px;">
  <h3>지하철 노선도 - 신촌 역 위치</h3>
  <img style="width:1000px; height:700px;" src="img/subway03.jpg"alt="">
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
