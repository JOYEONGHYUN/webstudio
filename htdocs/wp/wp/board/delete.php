<html>
<head>
<style>

<?PHP include("./common_style.inc");?>

</style>
</head>
<body>
	<center>
	<table>

<?PHP
include("./functions.inc");
$con= mysql_connect("localhost", "root", "111111");
mysql_select_db("opentutorials", $con);

$uid = $_GET[uid];
$page = $_GET[page];

$query="select companyname, subject from testboard where uid=$uid";
$result = mysql_query($query) or die(mysql_error());
list($companyname, $subject) = mysql_fetch_array($result);
mysql_close($con);
?>

	<form name="delete_form" method="post" action="./delete_db.php?uid=<?=$uid?>">
		<tr>
			<td class="ques_head" width="100">글쓴이</td>
			<td class="input_td"><?=$companyname?></td>
		</tr>
		<tr>
			<td class="ques_head">제목</td>
			<td class="input_td"><?=$subject?></td>
		</tr>
	</table>
	<table>
		<tr>
			<td width="100">&nbsp;</td>
			<td align="center"><input type="submit" value="삭제"></td>
			<td width="100" align="right">
				<a href="javascript:history.back()">뒤로</a>
				<a href="<?=dest_url("./list.php", $page)?>">목록</a>
			</td>
		</tr>
	</form>
	</table>
	</center>
</body>
</html>
