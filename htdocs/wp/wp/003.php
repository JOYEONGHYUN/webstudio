<?php
session_start();
?>
<script language="javascript">

function open_win()
{
 window.open('./lgin.html','popup', 'width=400, height=600, left=0, top=0, toolbar=no, location=no, directories=no, status=no, menubar=no, resizable=no, scrollbars=no, copyhistory=no');
}

function open_reg()
{
 window.open('./resi.html','popup', 'width=600, height=800, left=0, top=0, toolbar=no, location=no, directories=no, status=no, menubar=no, resizable=no, scrollbars=no, copyhistory=no');
}
</script>
<?php
	require_once("../dbconfig.php");

	/* 페이징 시작 */
	//페이지 get 변수가 있다면 받아오고, 없다면 1페이지를 보여준다.
	if(isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 1;
	}

	$sql = 'select count(*) as cnt from board_free';
	$result = $db->query($sql);
	$row = $result->fetch_assoc();

	$allPost = $row['cnt']; //전체 게시글의 수

	$onePage = 15; // 한 페이지에 보여줄 게시글의 수.
	$allPage = ceil($allPost / $onePage); //전체 페이지의 수

	if($page < 1 && $page > $allPage) {
?>
		<script>
			alert("존재하지 않는 페이지입니다.");
			history.back();
		</script>
<?php
		exit;
	}

	$oneSection = 10; //한번에 보여줄 총 페이지 개수(1 ~ 10, 11 ~ 20 ...)
	$currentSection = ceil($page / $oneSection); //현재 섹션
	$allSection = ceil($allPage / $oneSection); //전체 섹션의 수

	$firstPage = ($currentSection * $oneSection) - ($oneSection - 1); //현재 섹션의 처음 페이지

	if($currentSection == $allSection) {
		$lastPage = $allPage; //현재 섹션이 마지막 섹션이라면 $allPage가 마지막 페이지가 된다.
	} else {
		$lastPage = $currentSection * $oneSection; //현재 섹션의 마지막 페이지
	}

	$prevPage = (($currentSection - 1) * $oneSection); //이전 페이지, 11~20일 때 이전을 누르면 10 페이지로 이동.
	$nextPage = (($currentSection + 1) * $oneSection) - ($oneSection - 1); //다음 페이지, 11~20일 때 다음을 누르면 21 페이지로 이동.

	$paging = '<ul>'; // 페이징을 저장할 변수

	//첫 페이지가 아니라면 처음 버튼을 생성
	if($page != 1) {
		$paging .= '<li class="page page_start"><a href="./index.php?page=1">처음</a></li>';
	}
	//첫 섹션이 아니라면 이전 버튼을 생성
	if($currentSection != 1) {
		$paging .= '<li class="page page_prev"><a href="./index.php?page=' . $prevPage . '">이전</a></li>';
	}

	for($i = $firstPage; $i <= $lastPage; $i++) {
		if($i == $page) {
			$paging .= '<li class="page current">' . $i . '</li>';
		} else {
			$paging .= '<li class="page"><a href="./index.php?page=' . $i . '">' . $i . '</a></li>';
		}
	}

	//마지막 섹션이 아니라면 다음 버튼을 생성
	if($currentSection != $allSection) {
		$paging .= '<li class="page page_next"><a href="./index.php?page=' . $nextPage . '">다음</a></li>';
	}

	//마지막 페이지가 아니라면 끝 버튼을 생성
	if($page != $allPage) {
		$paging .= '<li class="page page_end"><a href="./index.php?page=' . $allPage . '">끝</a></li>';
	}
	$paging .= '</ul>';

	/* 페이징 끝 */


	$currentLimit = ($onePage * $page) - $onePage; //몇 번째의 글부터 가져오는지
	$sqlLimit = ' limit ' . $currentLimit . ', ' . $onePage; //limit sql 구문

	$sql = 'select * from board_free order by b_no desc' . $sqlLimit; //원하는 개수만큼 가져온다. (0번째부터 20번째까지
	$result = $db->query($sql);
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
  <script language="javascript">

  function open_win()
  {
   window.open('./lgin.html','popup', 'width=400, height=600, left=0, top=0, toolbar=no, location=no, directories=no, status=no, menubar=no, resizable=no, scrollbars=no, copyhistory=no');
  }
  function open_reg()
  {
   window.open('./resi.html','popup', 'width=600, height=800, left=0, top=0, toolbar=no, location=no, directories=no, status=no, menubar=no, resizable=no, scrollbars=no, copyhistory=no');
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
                  <section style="float:right; padding-right:80px;">
                  <div style="width:850px; padding-top:77px;">
                      <div class = "board_list">
                        <table title="후기">
                          <colgroup>
                            <col class="num">
                            <col class="subject">
                            <col class="writer">
                            <col class="date">
                            <col class="hit">
                          </colgroup>

                          <thead>
                            <div>
                              <tr>
                                <th scope="col" class="num">번호</th>
                      					<th scope="col" class="subject">제목</th>
                      					<th scope="col" class="writer">작성자</th>
                      					<th scope="col" class="date">작성일</th>
                      					<th scope="col" class="hit">조회</th>
                              </tr>
                            </div>
                          </thead>
                          <tbody>
                            <?php
                              while($row = $result->fetch_assoc())
                              {
                                $datetime = explode(' ', $row['b_date']);
                                $date = $datetime[0];
                                $time = $datetime[1];
                                if($date == Date('Y-m-d'))
                                  $row['b_date'] = $time;
                                else
                                  $row['b_date'] = $date;
                            ?>
                          <tr>
                            <td class="no"><?php echo $row['b_no']?></td>
                            <td class="title">
                              <a href="./014.php?bno=<?php echo $row['b_no']?>"><?php echo $row['b_title']?></a>
                            </td>
                            <td class="author"><?php echo $row['b_id']?></td>
                            <td class="date"><?php echo $row['b_date']?></td>
                            <td class="hit"><?php echo $row['b_hit']?></td>
                          </tr>
                            <?php
                              }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="paging">
                      <?php echo $paging ?>
                    </div>
        <!-- 페이지 번호를 적은것 -->
        <form action="/tour/sub.htm" method="get" name="bbs_form01" onsubmit="return search01();" title="게시판 검색 서식입니다." >
                <input type="hidden" name="code" value="tourNreview">
                <input type="hidden" name="order_list" value="">
                <input type="hidden" name="list_scale" value="">
                <input type="hidden" name="nav_code" value="tou1494979334">
                <input type="hidden" name="view_cate" value="">
                <fieldset>
                   <legend>게시판 검색</legend>
                   <label for="search_item" class="hidden">검색 항목 선택</label>
                   <?php   if (isset($_SESSION['mail'])){        ?>
                   <a href="./013.php" class="btn_d">글쓰기</a>
                 <?php } ?>

                </fieldset>
              </form>
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
