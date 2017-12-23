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
      <a class="row-sm-6" href="javascript:open_reg();" style="color:white;">회원가입</a>&nbsp;&nbsp;&nbsp;  <?php }else{ ?>
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
                  <h1 style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>설날</strong></h1>
                  <hr>
                  </div>
                      <article style="padding-top:20px;">
                  <div class="imgview">
                    <div class="row" style="width:800px;">
                      <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/s01.jpg" alt="Lights" style="width:300px; height:150px;">
                            <div class="caption">
                              <p>행복을 기원</p>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/nature.jpg" target="_blank">
                            <img src="img/s02.jpg" alt="Nature" style="width:300px; height:150px;">
                            <div class="caption">
                              <p>오랜만의 휴식</p>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/fjords.jpg" target="_blank">
                            <img src="img/s04.jpg" alt="Fjords" style="width:300px; height:150px;">
                            <div class="caption">
                              <p>만남의 기쁨</p>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br/>
                    <p style="font-size:20px;">
                      <strong><h2>.설날은</h2></strong><br/>
                    대한민국에서 설날은 추석과 더불어 2대 명절 중 하나로 음력 1월 1일(2월 초)이다.
                    한국의 설날에는 조상에 차례를 지내고, 친척이나 이웃 어른들께 세배를 하는 것이 고유의 풍습이다. <br/><br/>
                      <div class="imgview">
                        <img style="width:600px; height:450px;"src="img/s01.jpg" alt="">
                      </div>
                      설날의 일차적 목적은 조상에 대한 존중을 갖추는 날이지만, 이는 또한 가족의 유대를 유지하려는 목적도 있습니다.
                      부모와 형제자매가 직장, 학교 또는 결혼 등의 이유로 떨어져서 살아도, 설날에는 함께 행복한 시간을 보내기 위해 모이게 됩니다.
                      서울의 사람들은 종종 5일간의 휴일을 보냅니다.
                      이 시간 동안, 새해의 휴일을 보내기 위해, 가족 및 친지들과 행복한 시간을 보냅니다. <br><br>
                      <div class="imgview">
                        <img style="width:600px; height:450px;"src="img/s02.jpg" alt="">
                      </div>
                      <strong><h2>.전통</h2></strong><br/>
                      한국의 설날에 가장 중요한 것은 선물을 주는 것입니다. 선물의 유형은 재정적인 상황과 개인의 선호도 및 가족의 전통에 따라 다릅니다,
                       기념일의 기준을 가지고 있는 몇몇 선물도 있습니다. 요즘 날에, 대부분의 선물들은 백화점과 쇼핑몰에서 쓸 돈과 기프트 카드를
                       포함하고 있습니다. 자녀들은 종종 인삼과 건강 상품 등의 선물들을 부모에게 줍니다.
                       이외에도 인기 있는 선물은 세면 도구, 사탕, 생선 및 과일이 있습니다. <br/><br>
                       <div class="imgview">
                         <img style="width:600px; height:450px;"src="img/s03.jpg" alt="">
                       </div>
                       <strong><h2>.차례</h2></strong><br/>
                       설날의 아침에, 가족들은 죽은 친척을 위한 차례를 지냅니다. 이러한 의례는 비교적 정숙하며,
                       일반적으로 단순한 차례 음식과 좋은 기도로 이루어져 있습니다.
                       이 의례의 목적은 조상을 추모하고 이들에게 행운을 비는 것입니다. <br> <br>
                       <div class="imgview">
                         <img style="width:600px; height:450px;"src="img/s06.jpg" alt="">
                       </div>
                       <strong><h2>.게임</h2></strong><br/>
                       설날의 낮 동안, 같이 게임을 하면서 설날을 축하하는 게 일반적입니다. 가장 유명한 게임 중 하나가 윷놀이입니다.
                       윷놀이는 스틱으로 하는 게임이며, 단순한 룰을 가지고 있습니다. 팀으로 플레이할 수 있어서,
                       모든 가족 구성원이 새해 동안 다시 가까워지기 위한 재미있는 경기에 참여할 수 있습니다.
                       한국의 설날 동안 함께할 수 있는 또 다른 주요활동은 연날리기입니다. 연날리기는 한국 용어로 ‘연을 날리다’라는 뜻입니다.
                       날씨가 좋다면, 아이와 성인이 함께 밖에 나가서 하늘 위에 밝은 색상의 연을 띄웁니다.
                       쥐불놀이는 깡통에 불을 붙이고 그것을 마음것 돌리는 놀이입니다. 내년에 있을 농사에 풍작을 기대하며 밭을 태우는 하나의 전통 놀이입니다. <br>
                       <div class="imgview">
                         <img style="width:600px; height:450px;"src="img/s10.jpg" alt="">
                       </div>
                       <br>
                       <div class="imgview">
                         <img style="width:600px; height:350px;"src="img/s11.jpg" alt="">
                       </div>
                       <br>
                       <div class="imgview">
                         <img style="width:600px; height:350px;"src="img/s12.jpg" alt="">
                       </div> <br> <br>
                       조금 우스갯소리로 가족 구성원은 작년에 대한 이야기를 함께 나눕니다. 인기있는 토픽은 연애, 승진, 농담, 미래에 대한 것입니다.
                       질병, 죽음 그리고 슬픈 이야기를 하는 것은 설날에 눈살을 찌푸리게 합니다. <br> <br>
                       <div class="imgview">
                         <img style="width:600px; height:450px;"src="img/s08.jpg" alt="">
                       </div>
                       <strong><h2>.옷</h2></strong><br/>
                       한국에서 식사와 설날을 축하하는 동안, 모든 가족 구성원이 한복을 입는 것은 관례이자 전통입니다.
                       여성들은 간단한 드레스 또는 조끼를 입거나 남성들은 바지를 입습니다.
                       한복의 의상은 종종 밝은 빨간색, 분홍색, 주황색입니다. <br> <br>
                       <div class="imgview">
                         <img style="width:600px; height:450px;"src="img/s07.jpg" alt="">
                       </div>
                       <strong><h2>.음식</h2></strong><br/>
                       설날은 전통 한국 음식의 큰 연회로도 알려져 있습니다. 이 공휴일에 주요 음식 중 하나는 떡국입니다.
                       떡국은 소고기, 야채, 계란, 쌀 케이크로 만들어진 수프입니다.
                       한국의 전통에 따르면, 이러한 음식은 장수를 기원하는 뜻을 담고 있습니다.
                       갈비찜은 설날에 즐기는 또 다른 일반적인 음식입니다. 갈비찜은 스팀 된 비프의 짧은 립이며,
                       조각으로 자르고, 간장과 후추, 참기름, 봄 양파, 설탕으로 조리 됩니다.
                       이 음식은 천천히 요리되어 고기가 부드럽고 맛이 가득합니다.
                       이 음식은 때때로 한국에서 인기 있는 채식 요리인 삼색 나물과 함께 나옵니다.
                       음식의 정확한 조합이 지역과 선호에 따라 바뀝니다, 삼색 나물은 초록색, 하얀색, 갈색인 세 가지 야채로 구성되어 있습니다.
                       가장 대중적인 선택은 시금치, 양치 식물, 도라지 뿌리입니다.
                       한국은 설날 동안 식사를 마친 후, 전체 가족이 간단한 기도와 함께 조상에 경의를 표합니다. <br> <br>
                       <div class="imgview">
                         <img style="width:600px; height:450px;"src="img/s04.jpg" alt="">
                       </div>


                  <br/>
                </p>
                  </article>

</div>
        <!-- ////////////////////////////////////////////////////////////// -->
        </section>

<section style="float:left;">
  <h3>전통소개</h3>
    <div class="col-md-2" style="min-width:300px; padding-top:20px;">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">전통소개</a></li>
        <li><a href="../traditional/1.php">(2월)설날</a></li>
        <li><a href="../traditional/2.php">(3월)화전놀이</a></li>
        <li><a href="../traditional/3.php">(5월)단오</a></li>
        <li><a href="../traditional/4.php">(7월)초복</a></li>
        <li><a href="../traditional/5.php">(10월)추석</a></li>
        <li><a href="../traditional/6.php">(11월)김장</a></li>
        <li><a href="../traditional/7.php">(12월)동지</a></li>
        <li><a href="../traditional/8.php">(1월)신년맞이</a></li>
        <li><a href="../traditional/9.php">(1월)해맞이</a></li>
        </ul>
    </div>
    <div class="clearfix visible-lg"></div>
</section>
<div class="clear">
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
