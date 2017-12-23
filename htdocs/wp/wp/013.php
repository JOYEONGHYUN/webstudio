<?php
session_start();
?>

<?php
	require_once("../dbconfig.php");

	//$_GET['bno']이 있을 때만 $bno 선언
	if(isset($_GET['bno'])) {
		$bNo = $_GET['bno'];
	}

	if(isset($bNo)) {
		$sql = 'select b_title, b_content, b_id from board_free where b_no = ' . $bNo;
		$result = $db->query($sql);
		$row = $result->fetch_assoc();
	}
?>


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
			<a class="row-sm-6" href="javascript:open_win();" style="color:white;">로그인</a>&nbsp;&nbsp;&nbsp;
			<a class="row-sm-6" href="javascript:open_reg();" style="color:white;">회원가입</a>&nbsp;&nbsp;&nbsp;
	  <?php }else{ ?>
			<a class="row-sm-6" href="./lgout.php">로그아웃</a>&nbsp;&nbsp;&nbsp;
			<a class="row-sm-6" href="./invite_mypage.php" class="font_11">내정보</a>&nbsp;&nbsp;&nbsp;
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
                                            <a style="text-indent: 0px;">명소소개</a>
                                          </li>
                                          <li>
                                            <a style="text-indent: 0px;">음식소개</a>
                                          </li>
                                          <li>
                                            <a style="text-indent: 0px;">서울축제</a>
                                          </li>
                                          <li>
                                            <a style="text-indent: 0px;">야경명소</a>
                                          </li>
                                          <li>
                                            <a style="text-indent: 0px;">전통행사</a>
                                          </li>
                                           <li>
                                            <a style="text-indent: 0px;">여행후기</a>
                                            </li>
                                        </ul>

                                      </div>
                                      <div class = "clear" style="background-color:white;"></div>
                                      <div style="overflow: hidden; opacity: 1; height: 2.84217e-20px; background-color:white;"></div>
                                    </div>
                                  </div>
                                </div>
<div class="clear"></div>
                  <section style="float:right; margin-right:80px;">
                  <div style=" padding-top:77px; min-width:850px;" >
                    <div>
                    <table class="table table-bordered">
                        <tbody>
                            <form action="./write_update.php" method="post" encType="multiplart/form-data">
                                <tr>
                                  <th style="width:100px; text-align: center;">아이디: </th>
                                  <td><?=$_SESSION['mail']?></td>
                                </tr>
                                <tr>
                                    <th style="width:100px; text-align: center;">제목: </th>
                                    <td><input type="text" placeholder="제목을 입력하세요. " name="bTitle" id="bTitle" class="form-control" value="<?php echo isset($row['b_title'])?$row['b_title']:null?>"/></td>
                                </tr>
                                <tr >
                                    <th style="width:100px; text-align: center;">사진첨부: </th>
                                    <td>
                                      <span class="btn btn-default btn-file"><input type="file" multiple /></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th style=" text-align: center;">내용: </th>
                                    <td><textarea rows="30" cols="10" placeholder="내용을 입력하세요. "class="form-control" name="bContent" id="bContent"><?php echo isset($row['b_content'])?$row['b_content']:null?></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                      <button type="submit" class="btn btn-default">
                                        <a> <?php echo isset($bNo)?'수정':'작성'?></a>
                                      </button>
                                      <a style="float:right;" class="btn btn-default"  onclick="javascript:location.href='./write_update2.php'">수정하기</a>
                                        <a style="float:right;" class="btn btn-default" onclick="javascript:location.href='./003.php'">글 목록으로...</a>
                                    </td>
                                </tr>
                            </form>
                        </tbody>
                    </table>
                    </div>
                  </div>
        <!-- ////////////////////////////////////////////////////////////// -->
        </section>


<section style="float:left;">
  <h3>여행후기</h3>
    <div class="col-md-2" style="min-width:250px; padding-top:20px;">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">여행후기</a></li>
        <li><a href="#">경복궁</a></li>
        <li><a href="#">한옥마을</a></li>
        <li><a href="#">명  동</a></li>
        <li><a href="#">강  남</a></li>
      </ul>
    </div>
    <div class="clearfix visible-lg"></div>
</section>

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
