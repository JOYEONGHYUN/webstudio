
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Konnection</title>
  </head>


  <body>
    <h1>
      <a href="http://localhost/index.php"> <title>Konnection</title>Konnection</a>
    </h1>

<!-- TOP Navagation menu 꼭대기 메뉴-->
<div class="top navigation">
  <nav>
    <?php
    session_start();
  if(!isset($_COOKIE['user_id']) || !isset($_COOKIE['user_name'])) {
  	echo "<meta http-equiv='refresh' content='0;url=login.php'>";
  	exit;
  }
  $user_id = $_COOKIE['user_id'];
  $user_name = $_COOKIE['user_name'];
  echo "<p>안녕하세요. $user_name($user_id)님</p>";
  echo "<p><a href='logout.php'>로그아웃</a></p>";
    ?>

      <td width = '100%' height='50' align='center'><a href="http://localhost/company_registers.php">Company Register</a></td>
      <td width = '100%' height='50' align='center'><a href="http://localhost/Logout.php">Log Out</a></td>
      <td width = '100%' height='50' align='center'><a href="http://localhost/information_private.php">Private Information</a></td>
  </nav>
</div>

<div class="main navigation">
<nav>
  <ul>
      <li><a href="http://localhost/jobs.php">Jobs</a></li> <!-- JOBS is all of jobs page 모든직업 보기 페이지 -->
      <li><a href="http://localhost/company.php">Companies</a></li> <!-- serching for your hopping JOBS page 희망하는 직업 검색 페이지-->
      <li><a href="http://localhost/resume.php">My Resume</a></li> <!-- can make your resume -->
      <li><a href="http://localhost/application.php">My Application</a></li> <!-- My Application in korea / 내 지원내역 확인 -->
      <li><a href="http://localhost/ai.php">Find Jobs</a></li> <!-- we have our AI Program and this is doing find your jobs easilly 쉽게 일거리 찾아줌-->
  </ul>

<div class="above navigation">
  <form class="searching jobs" action="http://localhost/career.php" method="post">
    <select class="keyword" name="keyword">
      <option value="Keyword">Keyword</option>
      <!-- 넣을 키워드를 생각해야된다. we should think putting what kind of keywords -->
    </select>


<!-- kind of jobs category 직업 종류 카테고리 -->
<select class="category" name="category">
  <option value="">All Industries</option>
  <option value="1">Management&amp;Office work</option>
  <option value="2">Marketing&amp;Trade/Distribution</option>
  <option value="3">Sales&amp;Guest Relation Officer</option>
  <option value="4">IT Security expert</option>
  <option value="5">IT Developer</option>
  <option value="6">IT Start-up</option>
  <option value="7">Research and Development&amp;Plan</option>
  <option value="8">Production&amp;Manufacture</option>
  <option value="9">Expert&amp;Sepcial Skill</option>
  <option value="10">Design</option>
  <option value="11">Media</option>
  <option value="12">Service&amp;Education&amp;Banking&amp;Distribution</option>
  <option value="13">Media&amp;Advertisement&amp;Culture/Art</option>
  <option value="14">Manufacture&amp;Information</option>
  <option value="15">Chemistry&amp;Construction</option>
  <option value="16">Engineering</option>
  <option value="17">Other</option>
</select>

<!-- Location 지역-->
    <select class="region" name="region" value="All Location">
      <optgroup label="All Location">
<option value="">All Location</option>
<option value="R1">Seoul</option>
<option value="R2">GyungGI</option>
<option value="R3">Incheon</option>
<option value="R4">GangWon</option>
<option value="R5">DaeJeon</option>
<option value="R6">SeJong</option>
<option value="R7">ChoongNam</option>
<option value="R8">ChoongBuk</option>
<option value="R9">Busan</option>
<option value="R10">Ulsan</option>
<option value="R11">GyungNam</option>
<option value="R12">GyungBuk</option>
<option value="R13">DaeGoo</option>
<option value="R14">GwangJoo</option>
<option value="R15">JeonNam</option>
<option value="R16">JeonBuk</option>
<option value="R17">JeJu</option>
      </optgroup>
</select>


  </form>
</div>
</nav>
</div>


</body>
</html>
