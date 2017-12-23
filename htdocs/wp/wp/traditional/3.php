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
      <a class="row-sm-6" href="javascript:open_reg();" style="color:white;">회원가입</a>&nbsp;&nbsp;&nbsp;<?php }else{ ?>
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
                  <h1 style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>단오</strong></h1>
                  <hr>
                  </div>
                      <article style="padding-top:20px;">
                  <div class="imgview">
                    <div class="row" style="width:800px;">
                      <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/d01.jpg" alt="Lights" style="width:300px; height:150px;">
                            <div class="caption">
                              <p>창포물에 머리감기</p>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/nature.jpg" target="_blank">
                            <img src="img/d04.jpg" alt="Nature" style="width:300px; height:150px;">
                            <div class="caption">
                              <p>씨름, 그네타기</p>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/fjords.jpg" target="_blank">
                            <img src="img/d10.jpg" alt="Fjords" style="width:300px; height:150px;">
                            <div class="caption">
                              <p>봉선화 물들이기</p>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br/>
                    <p style="font-size:20px;">
                      <strong><h2>.단오는</h2></strong><br/>
                    단오는 단(끝단)이라는 글자가 처음을 의미하고, (낮오)는 다섯을 의미한다. 즉, 음력 5월 5일을 가리키는 말입니다.
                    단오는 여름을 맞이하고, 한 해 농사의 풍년을 기원한다는 의미를 담고있습니다.
                    또한 전염병이 돌기 쉬운 초여름, 건강을 기원하며 귀신이나 병을 쫓아내는 다양한 의식을 행하기도 했다. <br/><br/>
                      <div class="imgview">
                        <img style="width:600px; height:450px;"src="img/d01.jpg" alt="">
                      </div>
                      단오는 대표적인 명절이기 때문에 다양한 것들을 하는데 그중 창포물에 머리를 감는 풍습이 있다.
                      과거에는 창포에서 나는 향기가 액운을 쫓고, 병마를 물리친다고 믿어 창포물에 머리를 감기 시작했다고 한다.
                      또한, 여자들은 액을 물리치기 위해 창포로 만든 비녀를 머리에 꽂기도 했다고 한다.
                      비녀를 꽂을 수 없는 남자들은 창포를 허리에 달고 다니며 액땜을 기원하기도 했다고 한다. <br><br>
                      <div class="imgview">
                        <img style="width:600px; height:450px;"src="img/d02.jpg" alt="">
                      </div>
                      <strong><h2>.게임</h2></strong><br/>
                      남자들은 주로 두 사람이 샅바나 띠 또는 바지의 허리 춤을 잡고 힘과 기술을 겨루는 씨름을 즐겨 했고,
                      여자들은 널뛰기와 그네타기를 하며 명절을 즐겼다고 한다.
                      이러한 놀이를 한 이유는 다가오는 여름을 거뜬히 날 수 있도록 체력을 기르고 한 해 건강을 기원하는 선조들의 염원 때문이다. <br/><br>
                       <div class="imgview">
                         <img style="width:600px; height:450px;"src="img/d10.jpg" alt="">
                       </div>
                       <strong><h2>.봉선화 물들이기</h2></strong><br/>
                       봉선화가 활짝 피어 아이들이 손톱에 붉은물을 들인다.
                       봉선화 잎을 따서 백반과 함께 넣고 찧은 다음 손톱 위에 얹고 봉선화 잎을 대고 싸서
                       실로 동여매고 하룻밤을 지낸다.
                       다음 날 아침에 일어나 풀어보면 손톱에 빨갛게 물이
                       들어 있다. 이렇게 봉선화로 물들이는 것은 빨간 빛으로 잡귀를 쫓는다는 주술적 의미에서
                       비롯된 풍습인 듯하다. <br> <br>
                       <div class="imgview">
                         <img style="width:600px; height:350px;"src="img/d05.png" alt="">
                       </div>
                       <strong><h2>.수리취떡</h2></strong><br/>
                       단오를 수릿날이라고도 부르는데요.
                       수릿날이라는 표현은 수레바퀴 모양의 수리취떡(쑥잎을 넣어 만든 떡)을 해 먹었다고 하여 생긴 말입니다.
                       단오 음식을 대표하는 수리취떡입니다. 수리취는 잎이 작고 둥글며 뒷면이 흰 엉겅퀴과의 여러해살이풀입니다.
                       수리취떡을 만드는 방법은 데친 수리취잎을 곱게 찧어서 멥쌀가루를 넣고 동글납작하게
                       빚은 반죽을 수레바퀴 모양의 떡살로 찍어 모양을 내는 것입니다.
                       수리취 대신 쑥을 쓰기도 합니다.  <br>

                    <br> <br>
                       <div class="imgview">
                         <img style="width:600px; height:250px;"src="img/d06.png" alt="">
                       </div>
                       <br>
                       <strong><h2>.앵두편·앵두화채</h2></strong><br/>
                       수리취떡과 함께 먹으면 좋은 앵두편·앵두화채도 단오 음식입니다. 앵두는 빛깔이 고운 작은 열매로써 과육에 비해 씨가 큽니다.
                       때문에 화채로 만들어 먹으면 매우 이색적인 음료가 되는데요.
                       보통 단오 쯤에 앵두가 나오는 철이라 단오 음식으로 앵두화채를 만들기도 하고,
                       앵두 으깬 것을 삶아 녹두녹말과 꿀을 넣어 굳힌 과편인 앵두편을 만들어 먹기도 하였습니다.
                       이렇게 우리 조상님들은 여름에 앵두편과 앵두화채를 먹으면서
                       더위를 타지 않고 무사히 넘기기를 기원하는 마음을 담았다고 합니다.   <br> <br>
                       <div class="imgview">
                         <img style="width:600px; height:450px;"src="img/d08.png" alt="">
                       </div>
                       <strong><h2>.제호탕</h2></strong><br/>
                       갈증이 많이 나는 무더운 여름이면 민가나 한약방에서는 칡뿌리, 오미자, 인삼, 맥문동 등을 달여 마셨고
                       궁중에서는 갈증 해소 음료로 제호탕을 으뜸으로 꼽았습니다.
                       제호탕이란 오매육, 사인, 백단향, 초과 등을 곱게 가루 내어 꿀에 재운 뒤 중탕으로 끓였다가 냉수에 타서 마시는 청량음료를 말합니다.
                       주재료인 오매는 매실 껍질을 벗기고 짚불 연기에 그을려 말린 것으로 소갈, 설사, 기침에 효과가 있습니다.
                       조선조 궁중에서는 단옷날 내의원에서 만들어 임금께 올리면 임금이 이것을 부채와 함께 여름을 시원하게 보내라고 기로소에 보내고,
                       가까이 있는 신하들에게도 하사하는 풍습이 있었다고 합니다.   <br> <br>
                       <div class="imgview">
                         <img style="width:600px; height:450px;"src="img/s04.jpg" alt="">
                       </div>
                       <strong><h2>.창포주</h2></strong><br/>
                        단오 때는 창포물로 여성들이 머리도 감았지만, 창포뿌리를 잘게 썰어 찹쌀고두밥,
                        누룩을 함께 넣고 단단히 봉해 술로도 담가 마셨습니다.
                        창포주 또한 단오 음식으로, 창포주를 꾸준히 마시면 36가지 질환이 치료될 뿐만 아니라 중풍도 고칠 수 있다고 하였습니다.
                        잘 익힌 창포주를 하루에 5홉들이 잔으로 한 잔씩 세 번 마시면 무병하여진다고 믿었으며, 담습을 없애고
                        입맛을 돋우며 독을 풀어준다고도 합니다. 이 밖에도 귀먹은데, 목쉰데, 배 아픈데, 이질, 풍한 습비에도 효능을 발휘한다고 밝혀졌습니다.   <br> <br>
                        <div class="imgview">
                          <img style="width:600px; height:450px;"src="img/d03.jpg" alt="">
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
