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
                  <h1 style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>화전놀이</strong></h1>
                  <hr>
                  </div>
                      <article style="padding-top:20px;">
                  <div class="imgview">
                    <div class="row" style="width:800px;">
                      <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/h05.png" alt="Lights" style="width:300px; height:150px;">
                            <div class="caption">
                              <p>꽃과 음식</p>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/nature.jpg" target="_blank">
                            <img src="img/h01.jpg" alt="Nature" style="width:300px; height:150px;">
                            <div class="caption">
                              <p>꽃과 여인</p>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/fjords.jpg" target="_blank">
                            <img src="img/h06.jpg" alt="Fjords" style="width:300px; height:150px;">
                            <div class="caption">
                              <p>진달래꽃</p>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br/>
                    <p style="font-size:20px;">
                      <strong><h2>.화전놀이는</h2></strong><br/>
                    화전놀이는 삼짇날의 풍속으로 교외나 산 같은 경치 좋은 곳에 가서 음식을 먹고 꽃을 보며 노는 꽃놀이이다.
                     꽃잎을 따서 전을 부쳐 먹으며 노는 부녀자의 봄놀이이다. 지방에 따라 화전놀이,화류놀이, 꽃놀이, 꽃달임이라고 하며,
                    화류 또는 회취라고도 한다. 주로 남부지방에서 많이 행해졌다. <br/><br/>
                      <div class="imgview">
                        <img style="width:600px; height:450px;"src="img/h01.jpg" alt="">
                      </div>
                      화전놀이의 주요 전승집단은 양반여성들이었다. 남성들과 민촌 여성들도 화전놀이를 즐겼다.
                      하지만 남성들의 화전놀이는 부정기적인 봄맞이 풍류의 일환으로 참여 범위가 가까운 지인들로 제한되어,
                      정기적으로 개최 된 여성들의 집단적인 놀이와는 구별되었다. 또한 남녀가 함께 참여하는 화수회 성격의 화전놀이가 있었으나
                      이는 ‘문중 모임’의 성격을 지녀, 여성들만의 ‘친목과 유희’를 목적으로 하는 여성들의 화전놀이와는 거리가 있었다 <br><br>
                      <div class="imgview">
                        <img style="width:600px; height:350px;"src="img/h02.jpg" alt="">
                      </div>
                      <strong><h2>.유래</h2></strong><br/>
                      《삼국유사》에 따르면 “김씨의 종가 재대 부인이 죽어서 청연 웃골에 장사지내고 그곳을 재매골이라 하였으며
                       매년 봄철이면 김씨 문중 남녀가 이 골짜기 남쪽에 있는 시냇가엣 놀이판을 차리게 되니,
                       때는 마침 배화가 만발하고 송아꽃이 누렇게 달린다”고 하였다.
                       <div class="imgview">
                         <img style="width:600px; height:450px;"src="img/h04.jpg" alt="">
                       </div>
                       화전놀이는 한 집안 일가친척 중에서도 특히 부녀들이 모여서 하던 것으로 보아 신라 때부터 있었던 유풍이 아닌가 한다.
                       오랜 유래를 가진 화전놀이는
                       우리 산천이 아름답고 기후 또한 좋으며 우리 인민들이 자연과 친하고 그것을 즐길 줄 아는 고상한 습성에서 나온 놀이였던 것이다.[ <br/><br>
                       <div class="imgview">
                         <img style="width:600px; height:450px;"src="img/h03.jpg" alt="">
                       </div>
                       <strong><h2>.음식</h2></strong><br/>
                       화전(花煎)은 한국 요리에서 찹쌀 반죽에 진달래나 국화 등 먹을 수 있는 꽃을 붙여서, 납작하게 지진 전, 또는 떡이다.
                       화전은 꽃부꾸미, 꽃지지미, 꽃달임 등으로도 불리며, 주로 후식으로 달콤하게 먹는다.
                       화전은 화전놀이와 깊은 관련이 있으며, 화전놀이는 고려시대 부터 행해진 전통적인 풍습이다.
                       진달래가 피는 봄이 되면 부녀자들이 개울가에 번철과 찹쌀가루 등을 들고 나가서, 꽃을 따서 그 자리에서 화전을 만들어 먹었다.
                       특히 음력 3월 3일 삼짇날에 화전놀이를 즐겼으며, 꿀물이나 오미자즙에 진달래를 띄운 진달래화채 등과 함께 먹었다. 진달래로 만든 화전은 "두견화전"(杜鵑花煎)이라고 불리기도 한다.
                       <div class="imgview">
                         <img style="width:600px; height:450px;"src="img/h07.jpg" alt="">
                       </div>
                       조선시대 궁정에서는 궁녀들이 중전을 모시고 비원에 나가서 화전을 부쳐 먹으며 봄의 풍류를 즐기기도 하였다.
                       가을이 되면 삼짇날과 비슷하게 국화꽃과 잎으로 만든 국화전을 만들며 화전놀이를 즐겼다.
                       국화전은 국화로 만든 국화주와 유자와 배로 만든 유자화채 등과 같이 먹기도 하였다.
                       삼짇날처럼 음력 9월 9일에 양이 겹치는 중양절, 또는 중구일에 이 풍습이 행해졌다.
                       화전은 그외에도 식용 가능한 꽃이라면 재료로 사용이 가능하며, 봄에는 배꽃으로 만든 이화전을 먹으며,
                       여름에는 장미로 만든 장미화전을 만들어 먹었다. 만약 꽃이 준비되지 않았다면, 미나리 잎파리,
                       쑥, 대추, 석이 등으로 꽃모양을 만든다.
                       통영 지방에는 반죽을 크게 만들어 꽃을 넉넉히 놓고 화전을 부쳐먹기도 한다
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
