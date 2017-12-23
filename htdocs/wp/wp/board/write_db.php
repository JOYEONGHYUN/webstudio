<?PHP
include("config.cfg");
include("functions.inc");

$subject = trim($_POST[subject]);
$companyname = trim($_POST[companyname]);
$homepage = trim($_POST[homepage]);
$location = trim($_POST[location]);
$future = trim($_POST[future]);
$industries = trim($_POST[industries]);
$contract = trim($_POST[contract]);
$salary = trim($_POST[salary]);
$requirement = trim($_POST[requirement]);
$description = trim($_POST[description]);
$writedate = date("y-m-d");

if(!$companyname|| !$homepage || !$location  || !$industries || !$contract || !$salary || !$requirement || !$description  )
{
	error("입력값이 부족합니다.");
	exit;
}

if($homepage && !is_url_valid($homepage))
{
	error("홈페이지 주소를 잘못 입력하셨습니다.");
	exit;
}

$con = mysql_connect("localhost", "root", "111111");
mysql_select_db("opentutorials", $con);

$query = "select MAX(gid) as gid from testboard";
$result = mysql_query($query) or die(mysql_error());
$gid = current(mysql_fetch_array($result));
$gid = $gid + 1;

$query = "insert into testboard
	(gid, subject, companyname, future, homepage, location, industries, contract, salary ,requirement ,description ,writedate)
	values($gid, '$subject', '$companyname', '$future', '$homepage', '$location', '$industries','$contract','$salary','$requirement',
  '$description', '$writedate')";
mysql_query($query) or die(mysql_error());
mysql_close($con);

forward("./list.php");

?>
1
