<!DOCTYPE html>
<!-- Interface of update data. -->

<?php
include("interndb.php");

$idURL = $_GET['id'];

$query = "SELECT * FROM activitybook WHERE id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in EditAct.php");
$row = mysqli_fetch_assoc($result);

$actname = $row['Activity Name'];
$inputnote = $row['Note'];
$date = $row['Date'];
$hours = $row['Hours Worked'];
$inputact = $row['Activity Details'];

//@mysql_free_result($result);
?>
<html>
<head>
	<link rel="stylesheet" href="EditActStyle.css">
</head>
<body>
<form method="POST" action="UpdateList.php">
  <fieldset>
    <h1 style="text-align: center;">Intern Daily Actvity<h1>
	<div class="backbutton">
	<input type="button" action="ActivityList.php" value="Back">
	</div>
	<table style="width:100%;">
    <tr>
	<td style="width: 75%;"><label for="actname">Activity name:</label>
    <br><input style="width: 55%"; type="text" id="actname" name="actname" value="<?php echo $actname; ?>"><br></td>
	<td rowspan="2" style="width: 25%;"><label for="inputnote">Note:</label>
    <br><textarea type="text" id="inputnote" 
	name="inputnote" rows="5" cols="15" value="<?php echo $inputnote; ?>">Input Your Note Here</textarea><br></td>
	</tr>
    <tr>
	<td><label for="date">Date:</label>
    <input type="date" id="date" name="date" min="2020-01-01" max="2025-12-31" value="<?php echo $date; ?>">
    <label for="hours">Hours Worked:</label>
    <input type="number" id="hours" name="hours" value="<?php echo $hours; ?>">
	</td></tr>
	</table><br>
    <textarea type="text" id="inputact" 
	name="inputact" rows="15" cols="40" value="<?php echo $inputact; ?>">Input Your Activity Details Here</textarea><br>
    <label for="intername">Name:</label>
    <input style="width: 10%"; type="text" id="intername" name="intername">
    <label for="internid">ID:</label>
	<input style="width: 10%"; type="text" id="internid" name="internid">
	&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
	&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;

<!--<input type="button" action="EditAct.php" value="Update New Activity">-->
    <input type ="submit" value="Update"> &nbsp;
	<input type ="reset" value="Clear"></td>
  </fieldset>
</form>

<hr>
<div align="right"><button type="button" onclick="MainPage.php">Main Page</button>
&emsp;
<button type="button" onclick="NewAct.php">Add New Activity</button></div>

</body>
</html>