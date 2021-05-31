<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="NewActStyle.css">
</head>
<body>
<form method="POST" action="UpdateAct.php">
  <fieldset>
    <h1 style="text-align: center;">Intern Daily Actvity<h1>
	<div class="backbutton">
	<input type="button"  value="Back" onclick="location.href='ActivityList.php'">
	</div>
	<table style="width:100%;">
    <tr>
	<td style="width: 75%;"><label for="activity_name">Activity name:</label>
    <br><input style="width: 55%"; type="text" id="activity_name" name="activity_name"><br></td>
	<td rowspan="2" style="width: 25%;"><label for="activty_note">Note:</label>
    <br><textarea type="text" id="activty_note" 
	name="activty_note" rows="5" cols="15" >Input Your Note Here</textarea><br></td>
	</tr>
    <tr>
	<td><label for="activity_date">Date:</label>
    <input type="date" id="activity_date" name="activity_date" min="2020-01-01" max="2025-12-31">
    <label for="hours_worked">Hours Worked:</label>
    <input type="number" id="hours_worked" name="hours_worked">
	</td></tr>
	</table><br>
    <textarea type="text" id="activity_details" 
	name="activity_details" rows="15" cols="40" >Input Your Activity Details Here</textarea><br>
    
<!--<input type="button" action="EditAct.php" value="Update New Activity">-->
    <input style="float: right;" type="submit" value="Add New Activity">
    
  </fieldset>
</form>

</body>
</html>