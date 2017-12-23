<html>
<head>
<style>

<?PHP include("./common_style.inc");?>

.ques_head
{
	text-align:center;
	background-color:#F9E79D;
}
.input_td
{
	background-color:#FEFCE2;
}

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
$query = "select subject, companyname, future, homepage, location, industries,
contract, salary, requirement, description, writedate
 from testboard where uid=$_REQUEST[uid]";
$result = mysql_query($query) or die(mysql_error());
list($subject, $companyname, $future, $homepage, $location, $industries, $contract,
$salary, $requirement, $description) = mysql_fetch_array($result);
mysql_close($con);
?>


		<form name="edit_form" method="post"
		 action="<?=dest_url("./edit_db.php", $page, $uid)?>">

				<tr>
					<td class="ques_head">Subject</td>
					<td class="input_td">
					<input type="text" name="subject" value="<?=$subject?>"
					 size="50" maxsize="255">
					</td>
				</tr>

		<tr>
			<td class="ques_head">Company</td>
			<td class="input_td">
			<input type="text" name="companyname" value="<?=$companyname?>" size="40" maxsize="50">
			</td>
		</tr>

		<tr>
			<td class="ques_head">Company Homepage</td>
			<td class="input_td">
			<input type="text" name="homepage" value="<?=$homepage?>"
			 size="40" maxsize="50">
			</td>
		</tr>

		<tr>
			<td class="ques_head">Company Future</td>
			<td class="input_td">
			<input type="text" name="future" value="<?=$future?>"
			 size="40" maxsize="50">
			</td>
		</tr>

		<tr>
			<td class="ques_head">Location</td>
			<td class="input_td">
				<select name="location" value="<?$location?>" >
          <optgroup label="All Location">
						<option value="All Location">All Location</option>
				    <option value="Seoul">Seoul</option>
				    <option value="GyungGI">GyungGI</option>
				    <option value="Incheon">Incheon</option>
				    <option value="GangWon">GangWon</option>
				    <option value="DaeJeon">DaeJeon</option>
				    <option value="SeJong">SeJong</option>
				    <option value="ChoongNam">ChoongNam</option>
				    <option value="ChoongBuk">ChoongBuk</option>
				    <option value="Busan">Busan</option>
				    <option value="Ulsan">Ulsan</option>
				    <option value="GyungNam">GyungNam</option>
				    <option value="GyungBuk">GyungBuk</option>
				    <option value="DaeGoo">DaeGoo</option>
				    <option value="GwangJoo">GwangJoo</option>
				    <option value="JeonNam">JeonNam</option>
				    <option value="JeonBuk">JeonBuk</option>
				    <option value="JeJu">JeJu</option>
				          </optgroup>
    </select>
			</td>
		</tr>

		<tr>
			<td class="ques_head">Industries</td>
			<td class="input_td">
	        <select value= "<?=$industries?>" name="industries">
						<option value="All Industries">All Industries</option>
						<option value="Management&amp;Office work">Management&amp;Office work</option>
						<option value="Marketing&amp;Trade/Distribution">Marketing&amp;Trade/Distribution</option>
						<option value="Sales&amp;Guest Relation Officer">Sales&amp;Guest Relation Officer</option>
						<option value="IT Security expert">IT Security expert</option>
						<option value="IT Developer">IT Developer</option>
						<option value="IT Start-up">IT Start-up</option>
						<option value="Research and Development&amp;Plan">Research and Development&amp;Plan</option>
						<option value="Production&amp;Manufacture">Production&amp;Manufacture</option>
						<option value="Expert&amp;Sepcial Skill">Expert&amp;Sepcial Skill</option>
						<option value="Design">Design</option>
						<option value="Media">Media</option>
						<option value="Service&amp;Education&amp;Banking&amp;Distribution">Service&amp;Education&amp;Banking&amp;Distribution</option>
						<option value="Media&amp;Advertisement&amp;Culture/Art">Media&amp;Advertisement&amp;Culture/Art</option>
						<option value="Manufacture&amp;Information">Manufacture&amp;Information</option>
						<option value="Chemistry&amp;Construction">Chemistry&amp;Construction</option>
						<option value="Engineering">Engineering</option>
						<option value="Other">Other</option>
				 </select>
			</td>
		</tr>


		<tr>
			<td class="ques_head">Contract</td>
			<td class="input_td">
				<select value= "<?=$contract?>" name="contract">
					<option value="">Contract</option>
					<option value="Full time Jobs">Full time Jobs</option>
					<option value="Part time Jobs">Part time Jobs</option>
					<option value="No Korean">No Korean</option>
				</select>
			</td>
		</tr>

		<tr>
			<td class="ques_head">Salary</td>
			<td class="input_td">
			<input type="text" name="salary" value="<?=$salary?>"
			 size="40" maxsize="50">
			</td>
		</tr>

		<tr>
			<td class="ques_head">Requirement</td>
			<td class="input_td">
			<textarea name="requirement" cols="60" rows="20">
			<?=$requirement?>
			</textarea>
		</td>
		</tr>

		<tr>
			<td class="ques_head">Description</td>
			<td class="input_td">
			<textarea name="description" cols="60" rows="20">
			<?=$description?>
			</textarea>
		</td>
		</tr>

	</table>
	<table>


		<tr>
			<td width="100"><a href="javascript:history.back()">BACK</a></td>
			<td align="center"><input type="submit" value="EDIT"></td>
			<td width="100" align="right">
				<a href="<?=dest_url("./list.php", $page)?>">LIST</a>
			</td>
		</tr>
	</form>
	</table>
	</center>
</body>
</html>
