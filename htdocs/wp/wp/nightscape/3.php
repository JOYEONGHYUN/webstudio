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
                  <h1 style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>경복궁 야간개장</strong></h1>
                  <hr>
                  </div>
                      <article style="padding-top:20px;">
                  <div class="imgview">
                    <div class="row" style="width:800px;">
                      <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/g04.jpg" alt="Lights" style="width:300px; height:150px;">
                            <div class="caption">
                              <p>전통가옥과 불빛</p>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/nature.jpg" target="_blank">
                            <img src="img/g02.jpg" alt="Nature" style="width:300px; height:150px;">
                            <div class="caption">
                              <p>이색적인 아름다움</p>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="/w3images/fjords.jpg" target="_blank">
                            <img src="img/g03.jpg" alt="Fjords" style="width:300px; height:150px;">
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
                      <strong><h2>.경복궁은</h2></strong><br/>
                      대한민국 서울 세종로에 있는 조선 왕조의 법궁(法宮, 정궁)이다.
                      1395년(태조 4년)에 창건하였다. ‘경복(景福)’은 시경에 나오는 말로 왕과 그 자손,
                      온 백성들이 태평성대의 큰 복을 누리기를 축원한다는 의미이다. 풍수지리적으로도 백악산을 뒤로 하고 좌우에는
                      낙산과 인왕산으로 둘러싸여 있어 길지의 요건을 갖추고 있다. 1592년, 임진왜란으로 인해 불탄 이후 그 임무를 창덕궁에 넘겨주었다가
                      1865년(고종 2년)에 흥선대원군의 명으로 중건되었다.  <br/><br/>
                      <div class="imgview">
                        <img style="width:600px; height:450px;"src="img/g01.PNG" alt="">
                      </div>
                        일제 강점기에는 조선총독부 건물을 짓는 등 많은 전각들이 훼손되었으나, 1990년대부터 총독부 건물을 철거하는 등 복원사업을 벌인 덕분에 복원 작업은 현재 부분 완료된 상태다.
                       근정전, 경회루, 향원정, 아미산 굴뚝 등은 훼손되지 않고 그대로 남아 있다.
                       면적은 432,703m2이며, 동서 500m, 남북 700m 규모로 남아 있다. <br/>
                  <br/>
                  </p>
                  <div class="imgview">
                    <img style="width:600px; height:450px;"src="img/g05.jpg" alt="">
                  </div>
                    <div style="width:630px;">
                      <p>
                      <ul>
                        <strong>관람기간&nbsp; :</strong> &nbsp; <br>

                        <p>￮ 관람 기간 <br>
- 4월: 4. 16. ~ 4. 27. / 19:00 ~ 21:30(입장 마감 20:30) <br>
- 궁중문화축전 : 4.29. ~ 5.7. / 19:00~21:30(입장마감 20:30) <br>
- 7월: 7. 16. ~ 7. 29. / 19:30 ~ 22:00(입장 마감 21:00) <br>
- 8월: 8. 20. ~ 9. 2. / 19:30 ~ 22:00(입장 마감 21:00) <br>
- 9월: 9. 17. ~ 9. 30. / 19:00 ~ 21:30(입장 마감 20:30) <br>
</p>
                        <strong>이용요금&nbsp; :</strong> &nbsp; 한복착용자&nbsp; :&nbsp; 무료<br/> 외국인&nbsp; :&nbsp; 3000원 <br>
                        <strong>계절&nbsp; :</strong> &nbsp;봄/여름
                        <strong>장소&nbsp; :</strong> &nbsp;경복궁 역, 걸어서 3분
                        <br/><strong>주요행사&nbsp; :</strong> &nbsp;야간개장<br/>
                        <strong>주의사항&nbsp; :</strong> &nbsp;사람이 많으므로 어린아이에 주의해주세요.
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
  <h3>지하철 노선도 - 경복궁 역 위치</h3>
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
