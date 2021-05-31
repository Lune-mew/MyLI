 <!DOCTYPE html>
<html>
<head>
	<title>Student report</title>
	<link rel="stylesheet" type="text/css" href="nav.css">
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

	  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
	<div>
		
	</div>
	<table>
  <tr>
    <th>Assessment</th>
    <th>Mark</th>
    
  </tr>
  <tr>
    <td>WeeklyMark</td>
    <td>50</td>
   
  </tr>
  <tr>
    <td>SemesterMark</td>
    <td>34</td>
   
  </tr>
  <tr>
    <td>PresentationMark</td>
    <td>54</td>
    
  </tr>
  <tr>
    <td>Total</td>
    <td>95</td>
    
  </tr>
  
</table>

</body>


<script>

	var m1,m2,m3,m4;
	var calc1, calc2,calc3,calc4;
	var total1,total2,total3,total4,totalGrade;

	function average(){
		if (document.getElementById("mark1").value) {
		m1 = document.getElementById("mark1").value;
		calc1 = (25/100) * m1;
		total1 = calc;
	    }

	    else if(document.getElementById("mark2").value){
	    	m2 = document.getElementById("mark3").value;
	    	calc2 = (20/100) * m2;
	    	total2 = calc;

	    }

	    else if (document.getElementById("mark3").value)
	    {
	    	m3 = document.getElementById("mark3").value;
	    	calc3 = (25/100) * m3;
	    	total3 = calc;
	    }

	    else if (document.getElementById("mark4").value)
	    {
	    	m4 = document.getElementById("mark4").value;
	    	calc4 = (30/100) * m4;
	    	total4 = calc;

	    }


        totalGrade = total1 + total2 + total3 + total4;
        document.getElementById("result").innerHTML = totalGrade;

	}
	

</script>
</html>
	</div>
</body>
</html>