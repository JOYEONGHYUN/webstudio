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
                  <h1 style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>청계천 연등축제</strong></h1>
                  <hr>
                  </div>
                      <article style="padding-top:20px;">
                  <div class="imgview">
                    <div class="row" style="width:900px;">
                      <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/c01.jpg" alt="Lights" style="width:300px; height:150px;">
                            <div class="caption">
                              <p>동양의 아름다움</p>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/nature.jpg" target="_blank">
                            <img src="img/c02.jpg" alt="Nature" style="width:300px; height:150px;">
                            <div class="caption">
                              <p>한국만의 축제</p>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/fjords.jpg" target="_blank">
                            <img src="img/c03.jpg" alt="Fjords" style="width:300px; height:150px;">
                            <div class="caption">
                              <p>모두에게 감동을..</p>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br/>
                    <p style="font-size:20px;">
                      <strong><h2>.청계천 연등축제는</h2></strong><br/>
                      마음과 마음이 하나로 어우러지는 무대! <br>
                      서로가 서로의 행복을 기원하는 축제! <br>
                      천년의 전통을 이어온 연등회 등축제에 여러분을 초대한다! <br/><br/>
                      <div class="imgview">
                        <img style="width:600px; height:450px;"src="img/c04.jpg" alt="">
                      </div>
                      [전통등 전시회]
                      - 5월 11일~22일 조계사, 봉은사, 청계천 <br>
                      - 염원과 정성, 등불의 속삭임을 들어보자. <br>
                      - 다양한 색깔과 모양의 전통등을 만나볼 수 있다. <br>
                      <br/> <br>
                      [어울림마당] <br>
- 5월 12일 오후 4:30~6:00 동국대학교 운동장 <br>
- 얼쑤 한바탕 선명이 심장을 두드린다. <br>
- 연등행렬이 출발하기 전, 연희단과 율동단의 화려한 춤사위와 흥겨운 노래가 흥을 돋우고, 관불의식과 법회가 진행된다. <br> <br>

[연등행렬] <br>
- 5월 12이 오후 5:0)~9:30 종로거리 (동대문 → 조계사)  <br>
- 모두가 함께 빛나는 연등행렬, 모두가 주인공이다. <br>
- 수백, 수천의 등 물결이 은하수가 되어 도심을 흘러간다. <br> <br>

[회향 한마당] <br>
- 5월 12일 오후 9:30~11:00 <br>
- 행복을 기원 하는 꽃비가 내린다. <br>
- 꽃비 속에서 펼쳐지는 문화공연과 신바람 나는 강강술래는 국적과 성별, 인종과 종교를 초월해서 모두를 하나로 이어준다. <br> <br>

[전통문화마당] <br>
- 5월 13일 낮 12:00~7:00 조계사 앞 길 <br>
- 오감만족, 다양한 체험의 장이 열린다. <br>
- 한국의 멋과 맛을 즐길 수 있는 전통문화마당, 연등만들기, 사찰음식 체험하기 등 다양한 거리 축제가 펼쳐진다. <br> <br>

[공연마당] <br>
- 5월 13일 낮 12:00~6:00 조계사 앞 길 공연무대 <br>
- 감동과 흥이 넘치는 공연이 이어진다. <br>
- 노래와 춤, 음악, 줄타기 등 백희잡기의 전통을 계승하는 다양한 민속공연과 불교공연, 아시아 여러 나라의 전통공연이 펼쳐진다. <br> <br>

[연등놀이] <br>
- 5월 13일 오후 7:00~9:00 인사동 ~ 조계사 앞 길 <br>
- 아름다운 놀이, 아름다운 등물결이 펼쳐진다. <br>
- 연희단이 중심이 되어 다시 한 번 화려한 등 물결을 선보이고, 모두의 행복과 세상의 평화를 기원한다.
                  <br/>
                  </p>
                  <div class="imgview">
                    <img style="width:600px; height:450px;"src="img/c05.jpg" alt="">
                  </div>
                    <div style="width:630px;">
                      <p>
                      <ul>
                        <strong>관람소요시간&nbsp; :</strong> &nbsp;
                        5월 초 기간내 &nbsp;자유 &nbsp;(초파일) <br>
                        <strong>이용요금&nbsp; :</strong> &nbsp; 무료<br/>
                        <strong>계절&nbsp; :</strong> &nbsp;봄
                        <strong>장소&nbsp; :</strong> &nbsp;시청 역, 걸어서 10분
                        <br/><strong>주요행사&nbsp; :</strong> &nbsp;연등 불빛축제&nbsp; - &nbsp;05.11 &nbsp;~ 05.13 <br/>
                        <strong>주의사항&nbsp; :</strong> &nbsp;처음갔을때 정확한 위치를 찾기가 <br> 어려울 수 있으니 청계천 지도를 보고 찾아가세요.
                        <br/><strong>자세히보기&nbsp; :</strong> &nbsp;<a href="http://www.연등회.kr">http://www.연등회.kr</a></li>
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
  <h3>지하철 노선도 - 시청 역 위치</h3>
  <img style="width:1000px; height:700px;" src="img/subway02.jpg"alt="">
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
