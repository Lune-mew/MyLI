<!DOCTYPE html>
<!-- To display all information of database. -->
<html>
<head>
	<link rel="stylesheet" href="ActivityListStyle.css">
</head>
<body>
<?php
include("interndb.php");

$query = "SELECT Activity_Name, Date, Hours_Worked, Note FROM activitybook";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
    $id = $row["id"];
	$actname = $row["Activity_Name"];
	$date = $row["Date"];
	$hours = $row["Hours_Worked"];
	$inputnote = $row["Note"];
	?>
<form method="POST" >
  <fieldset>
  <table id="tableact" style="width:100%">
  <tr>
    <th>Daily ACtivity List Page</th>
  </tr>
  <tr>
    <td><input type="text" id="searchinput" onkeyup="searchfunction()" 
	placeholder="Search for names.." title="Type in a name"></td>
  </tr>
  <tr>
    <td>Date</td>
    <td>Hours Worked</td>
    <td>Activity Name</td>
	<td>Note</td>
	<td>Edit Activity</td>
  </tr>
  <tr>
    <td><?php echo $date; ?></td>
    <td><?php echo $hours; ?></td>
    <td><?php echo $actname; ?></td>
	<td><?php echo $inputnote; ?></td>
	<td><a href="EditAct.php?id=<?php echo $id; ?>">Edit</a> | 
	<a href="DeleteAct.php?id=<?php echo $id; ?>">Delete</a></td>
  </tr>
  </table>
  
  </fieldset>
</form>
<?php
    }
} else {
    echo "0 results";

}
?>

<hr>
<div align="right"><button type="button" onclick="MainPage.php">Main Page</button>
&emsp;
<button type="button" onclick="NewAct.php">Add New Activity</button></div>

</body>
</html>