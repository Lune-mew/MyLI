<?php
include ("interndb.php");

extract ($_POST);

//Dapatkan Tarikh Dan Masa Masuk
$tarikh = date("d-m-Y", time());
$masa = date("H:i:s", time());

$query = "UPDATE activtybook SET Activity_Name = '$actname', 
Date = '$date', Hours_Worked = '$hours', Note = '$inputnote', 
Activity_Details = '$inputact' WHERE id = '$id'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in EditAct.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='papar.php' </script>";
}
?>