<html>
<head>
<style>

<?PHP include("./common_style.inc");?>

.info_table
{
	background-color:#CFE1FC;
	border:solid 1pt;
}
.article_table
{
	background-color:#EFF8FE;
	border:solid 1pt;
}

</style>
</head>
<body>
	<center>

<?PHP
include("./config.cfg");
include("./functions.inc");

$con = mysql_connect("localhost", "root", "111111");
mysql_select_db("opentutorials", $con);
$uid = $_GET[uid];
$page = $_GET[page];
$query = "select gid, subject, companyname,future, homepage, location, industries,
 contract, salary ,requirement ,description , writedate, refnum from testboard where uid=$uid";
$result = mysql_query($query) or die(mysql_error());

list($gid, $subject, $companyname, $future, $homepage, $location, $industries, $contract, $salary, $requirement, $description, $writedate, $refnum)
 = mysql_fetch_array($result);

mysql_close($con);

$subject = htmlspecialchars($subject);

$requirement = htmlspecialchars($requirement);
$requirement = nl2br($requirement);
$description = htmlspecialchars($description);
$description = nl2br($description);

?>

	<table class="info_table">
		<tr>
			<td width="590" colspan="2"><b><?=$subject?></b></td>
		</tr>
		<tr>
			<td width="510">Writer&nbsp;:&nbsp;

<?PHP
if($email)
	echo("<a href=\"mailto:$email\">$companyname</a>");
else
	echo $companyname;

if($homepage)
	echo("&nbsp;&nbsp;&nbsp;<a href=\"http://$homepage\">[Company URL]</a>");
?>

			</td>
			<td width="90">조회:<?=$refnum?></td>
		</tr>
	</table>

  <table class="article_table">
     <tr>
       <td><strong>Future&nbsp;:&nbsp;</strong><?=$future?></td>
     </tr>
     <tr>
       <td><strong>Location&nbsp;:&nbsp;</strong><?=$location?></td>
     </tr>
     <tr>
       <td><strong>Industries&nbsp;:&nbsp;</strong><?=$industries?></td>
     </tr>
     <tr>
       <td><strong>Contract&nbsp;:&nbsp;</strong><?=$contract?></td>
     </tr>
     <tr>
       <td><strong>Salary&nbsp;:&nbsp;</strong><?=$salary?></td>
     </tr>
   </table>

	 <table class="article_table">
			 <td width="510"><strong>REQUIREMENT</strong>&nbsp;&nbsp;</td>
	 </table>
	 <table class="article_table">
		 <tr>
			 <td width="510"><?=$requirement?></td>
		 </tr>
 </table>

 <table class="article_table">
		 <td width="510"><strong>DESCRIPTION</strong>&nbsp;&nbsp;</td>
 </table>
 <table class="article_table">
	 <tr>
		 <td width="510"><?=$description?></td>
	 </tr>
</table>

	<table>
		<tr align="right">
			<td><a href="<?=dest_url("./edit.php", $page, $uid)?>">EDIT</a>
			<a href="<?=dest_url("./delete.php", $page, $uid)?>">DELETE</a>
			<a href="<?=dest_url("./list.php", $page)?>">LIST</a></td>
		</tr>
	</table>
	</center>
</body>
</html>
