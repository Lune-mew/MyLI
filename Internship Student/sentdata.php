<!-- To insert data of NewAct.php into database. -->
<?php

include("interndb.php");

//Dapatkan Tarikh Dan Masa Masuk
extract( $_POST );
$tarikh = date("d-m-Y", time());
$masa = date("H:i:s", time());
$query = "INSERT INTO activitybook (Activity_Name,Date,Hours_Worked,Note,Activity_Details) 
VALUES('$actname','$date','$hours','$inputnote','$inputact')";

if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='ACtivtyList.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}




?>