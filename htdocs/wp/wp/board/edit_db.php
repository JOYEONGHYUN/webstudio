<?PHP

include("config.cfg");
include("functions.inc");

$subject = trim($_POST[subject]);
$companyname = trim($_POST[companyname]);
$future = trim($_POST[future]);
$homepage = trim($_POST[homepage]);
$location = trim($_POST[location]);
$industries = trim($_POST[industries]);
$contract = trim($_POST[contract]);
$salary = trim($_POST[salary]);
$requirement = trim($_POST[requirement]);
$description = trim($_POST[description]);
$uid = $_REQUEST[uid];

if($homepage && !is_url_valid($homepage))
{
	error("홈페이지 주소를 잘못 입력하셨습니다.");
	exit;
}
$con = mysql_connect("localhost", "root", "111111");
mysql_select_db("opentutorials", $con);

$query = "update testboard
	set subject='$subject', companyname='$companyname',
	 future='$future',homepage='$homepage',location='$location'
	 ,industries='$industries', contract='$contract',salary='$salary',
	 requirement='$requirement',description='$description' where uid=$uid";
mysql_query($query) or die(mysql_error());
mysql_close($con);

forward(dest_url("./list.php", $page));

?>
