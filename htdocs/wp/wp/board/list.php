<?PHP
include("./config.cfg");
include("./functions.inc");
$page = $_GET[page];
if(!$page)
	$page = 1;

if($key)
	$where = " where $kind like '%$key%'";

$con = mysql_connect("localhost", "root", "111111");
mysql_select_db("opentutorials", $con);

$query = "select count(*) total_rows from testboard";
$result = mysql_query($query) or die(mysql_error());
$total_rows = current(mysql_fetch_array($result));

$total_pages = ceil($total_rows/$rows_page);
$start_row = $rows_page * ($page - 1);
$pre_page = $page > 1 ? $page - 1 : NULL;
$next_page = $page < $total_pages ? $page + 1 : NULL;
$start_page = (ceil($page/$direct_pages) - 1) * $direct_pages + 1;
$end_page = $total_pages >= $start_page + $direct_pages ?
 $start_page + $direct_pages - 1 : $total_pages;
?>

<html>
<head>
<style>

<?PHP include("./common_style.inc");?>

.field_tr
{
	background:#93BCEA;
}
.list_tr
{
	background:#EAF4FD;
}
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
	<table>
		<tr>
			<td colspan="5">Total TABLE:<?=$total_rows?></td>
		</tr>
	</table>
	<table nowrap>

<?PHP
$query = "select uid, gid, depth, subject, companyname,future,location,contract,salary
,requirement, writedate, refnum from testboard
 $where order by gid desc, depth asc limit $start_row, $rows_page";
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result))
{
	list($uid, $gid, $depth, $subject,$companyname,$future,$location,$contract,$salary,$requirement,$writedate, $refnum) = $row;

	$subject = htmlspecialchars($subject);
	$requirement = htmlspecialchars($requirement);
	$requirement = nl2br($requirement);
	$description = htmlspecialchars($description);
	$description = nl2br($description);

	if(strlen($subject) > $row_length)
		$subject = substr($subject, 0, $row_length)."...";

?>
<div class="" style="cursor: pointer;">

		<table class="info_table">
			<tr>
			<a href="<?=dest_url("./count_ref.php", $page, $uid)?>"><?=$subject?></a>
		</tr>
		<td width="510"><strong>Company</strong>&nbsp;<strong>:</strong>&nbsp;<?=$companyname?></td>
		<tr>
			<td width="510"><strong>Future</strong>&nbsp;<strong>:</strong>&nbsp;<?=$future?></td>
		</tr>
				<tr>
					<td width="510"><strong>Contract</strong>&nbsp;<strong>:</strong>&nbsp;<?=$contract?></td>
				</tr>
				<tr>
					<td width="510"><strong>Location</strong>&nbsp;<strong>:</strong>&nbsp;<?=$location?></td>
				</tr>
				<tr>
					<td width="510"><strong>Salary</strong>&nbsp;<strong>:</strong>&nbsp;<?=$salary?></td>
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
			<td width="510"><?=$writedate?></td>
		</table>


</div>
<?PHP
}
?>

	</table>
	<table>
		<tr>
			<td width="100" align="left">

<?php
if($pre_page)
	echo("<a href=\"".dest_url("./list.php", $pre_page)."\">[PRE]</a>");

if($next_page)
	echo("<a href=\"".dest_url("./list.php", $next_page)."\">[NEXT]</a>");
?>

			</td>
			<td align="center">&nbsp;

<?PHP
if($start_page > 1)
	echo("<a href=\"".dest_url("./list.php", $start_page - 1)."\">[pre]</a>");
for($dest_page = $start_page; $dest_page <= $end_page; $dest_page++)
	if($dest_page != $page)
		echo("<a href=\"".dest_url("./list.php", $dest_page)."\">[$dest_page]</a>");
	else
		echo("&nbsp;$dest_page&nbsp");
if($end_page < $total_pages)
	echo("<a href=\"".dest_url("./list.php", $end_page + 1)."\">[next]</a>");
?>
			</td>
			<td width="100" align="right">
				<a href="<?=dest_url("./write.php", $page);?>">WRITE</a>
				<a href="./list.php">LIST</a>
			</td>
		</tr>
	</table>
	<table>
	<form name="search_form" method="post" action="./list.php">
		<tr align="center">
			<td>
				<select name="kind">
					<option value="subject"<?if($kind=="subject") echo(" selected");?>>제목
					</option>
					<option value="article"<?if($kind=="article") echo(" selected");?>>내용
					</option>
					<option value="companyname"<?if($kind=="companyname") echo("selected");?>>이름
					</option>
				</select>
				<input type="text" name="key" value="<?=$key?>" size="20" maxlength="30">
				<input type="submit" value="검색">
			</td>
		</tr>
	</form>
	</table>
</center>
</body>
</html>
