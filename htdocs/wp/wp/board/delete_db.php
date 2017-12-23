<?PHP
include("config.cfg");
include("functions.inc");

$con = mysql_connect("localhost", "root", "111111");
mysql_select_db("opentutorials", $con);

$uid = $_GET[uid];
$page = $_GET[page];

$query = "select gid, depth from testboard where uid=$uid";
$result = mysql_query($query) or die(mysql_error());
list($gid, $depth) = mysql_fetch_array($result);

$query = "delete from testboard where gid=$gid and depth like '$depth%'";
mysql_query($query) or die(mysql_error());
mysql_close($con);

forward(dest_url("./list.php", $page));
?>
