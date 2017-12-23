
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
<style>
  .ft-white a{
    color: white;
  }
</style>

<!-- Navigation 고정된 네비게이션 메뉴에 해당 -->
  <nav class="navbar navbar-default fixed-top" style="background-color:#F05F40; font-size:14px; min-height:30px; padding-top:1px;" role="navigation">
  <div class="ft-white" style="float:right;">
    <?php if(!isset($_SESSION['mail'])) { ?>
  <a class="row-sm-6" href="javascript:open_win();" style="color:white;"><img src="img/lg_btn.png" alt="로그인" title="로그인"></a>&nbsp;&nbsp;&nbsp;
  <a class="row-sm-6" href="javascript:open_reg();" style="color:white;"><img src="img/rg_btn.png" alt="회원가입" title="회원가입"></a>&nbsp;&nbsp;&nbsp;
  <a class="row-sm-6" href="./index.php?mobile=on"  style="color:white;"><img src="img/mobile_btn.png" alt="모바일모드" title="모바일모드"></a>&nbsp;&nbsp;&nbsp;
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
                  <div class="" style="float:left; margin-left:40px;"><a style="color:#F05F40; font-size:25px; font-weight:bold; margin-bottom:2px;" href="#">KOREAVEL</a></div>
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
                                            <a href="../view/1.php" style="text-indent: 0px;">명소소개</a>
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
                  <h1 style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>여의도 벚꽃축제</strong></h1>
                  <hr>
                  </div>
                      <article style="padding-top:20px;">
                  <div class="imgview">
                    <div class="row" style="width:800px;">
                      <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/f05.jpg" alt="Lights" style="width:300px; height:250px;">
                            <div class="caption">
                              <p>여의도 벚꽃의 아름다움</p>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/nature.jpg" target="_blank">
                            <img src="img/f02.jpg" alt="Nature" style="width:300px; height:250px;">
                            <div class="caption">
                              <p>밤에 비치는 벚꽃의 모습</p>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/fjords.jpg" target="_blank">
                            <img src="img/f03.jpg" alt="Fjords" style="width:300px; height:250px;">
                            <div class="caption">
                              <p>밤과 벚꽃의 조화</p>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br/>
                    <p style="font-size:20px;">
                      <strong><h2>.여의도 벚꽃축제는</h2></strong><br/>
                      매년 따뜻한 봄기운이 살포시 느껴질 때면 여의도에서는 우리나라 제주도가 원산지인 왕벚나무 1,886주를 비롯, <br/>
                      진달래, 개나리, 철쭉, 조팝나무, 말발도리 등 13종 87,859주의 봄꽃이 만개해 넓게 트인 한강을 배경으로 봄의 항연이 펼쳐진다. <br/>
                      2005년부터 시작하여 올해로 12회째 맞이 하는 <영등포 여의도 봄꽃축제>는 도시 속에서 한강과 벚꽃, 그리고 사람의 아름다운 몸짓이 <br/>
                      조화를 이루어 매년 많은 상춘객들의 사람을 받고 있으며 국제적인 문화축제로 발전하고 있다. <br/><br/>
                      <div class="imgview">
                        <img style="width:600px; height:450px;"src="img/f02.jpg" alt="">
                      </div>
                      아름다운 봄꽃과 젊은 문화예술이 살아 숨쉬는 영등포 여의도 봄꽃축제는 남녀노소 흥겹게 참여할 수 있는 노래자랑, <br/>
                      거리예술공연 비아페스티벌(VIAF), 귀여운 캐릭터 퍼레이드, 꽃마차 운영, 지역예술동호회와 유관기관의 공연, <br/>
                      백일장 등 다양한 공연, 전시, 홍보, 체험행사들이 있습니다. <br/>
                  <br/>
                  </p>
                  <div class="imgview">
                    <img style="width:600px; height:450px;"src="img/f01.jpg" alt="">
                  </div>
                    <div style="width:630px;">
                      <p>
                      <ul>
                        <strong>관람소요시간&nbsp; :</strong> &nbsp;
                        4월 초 기간내 &nbsp;자유 &nbsp;(개화시기에 따라 축제일정이 변경될 수 있습니다.)
                        <strong>이용요금&nbsp; :</strong> &nbsp; 무료<br/>
                        <strong>계절&nbsp; :</strong> &nbsp;봄
                        <strong>장소&nbsp; :</strong> &nbsp;여의나루 역, 걸어서 10분
                        <br/><strong>주요행사&nbsp; :</strong> &nbsp;벚꽃축제&nbsp; - &nbsp;04.01 &nbsp;~ 04.09 <br/>
                        <strong>주의사항&nbsp; :</strong> &nbsp;날씨가 추울수있으니 따뜻하게 입고 가세요.
                        <br/><strong>자세히보기&nbsp; :</strong> &nbsp;<a>http://korean.visitkorea.or.kr/kor/bz15/where/festival/festival.jsp?cid=525755</a></li>
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
  <h3>지하철 노선도 - 여의나루 역 위치</h3>
  <img style="width:1000px; height:700px;" src="img/subway01.jpg"alt="">
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
