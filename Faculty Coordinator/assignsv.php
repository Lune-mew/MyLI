 <!DOCTYPE html>
<html>
<head>
	<title>updatecomp</title>
	<link rel="stylesheet" type="text/css" href="nav.css">
</head>
<body>
   <div class="topnav">
	<img src="logo.png" class="logo"> 
	  <a href="index.php">Assign Supervisor</a>
	  <a href="#">Schedule Presentation</a>
	  <a href="#">Update company</a>
	  <a href="#">Announcement</a>
          <a href="#">Student Report</a>
	  <div class="logout">
	  <a href="logout.php">LOGOUT</a>
	  </div>
	<form>
</div>
	<h2>supervisor Detail</h2>


	<table>
		
		<tr>
		<th>Supervisor name: </th>
		<td><input type="text" name="name"></td>
	    </tr>

        <tr>
		<th>Matric Number:</th>
		<td><input type="text" name="matricid"></td>
	    </tr>

	    <tr>
		<th>Course:</th>
		<td><input type="text" name="course"></td>
	    </tr>

	    <tr>
		<th>Address:</th>
		<td><textarea name="Address"></textarea></td>
	    </tr>

	    <tr>
		<th>Faculty:</th>
		<td><select>
			<option>FSKKP</option>
			<option>FIM</option>
			<option>FKASA</option>
		    </select>

		</td>
	    </tr>

	    <tr>
		<th>Gender:</th>
		<td><input type="radio" name="male">
			<label>Male</label>
			<input type="radio" name="Female">
			<label>Female</label>

		</td>
	    </tr>

	    <tr>
		<th>My hobby:</th>
		<td><input type="checkbox" name="Reading">
            <label>Reading</label>
            <input type="checkbox" name="Outdoor">
            <label>Outdoor activities</label>
		</td>
	    </tr>

	    <tr>
		<th>Insert Your Comment</th>
		<td><textarea name="Comment"></textarea></td>
	    </tr>

	    <tr>
		<th style="padding-left: 20px;"><button type="Submit" name="Submit">Submit</button>
			<button type="Reset" name="Reset">Reset</button>
		</th>
	    </tr>



	</table>



	</form>

</body>
</html>
	</div>
</body>
</html>