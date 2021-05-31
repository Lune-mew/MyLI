<?php
   include("config.php");
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
     
      $myusername = mysqli_real_escape_string($db,$_POST['UserUsername']);
      $mypassword = mysqli_real_escape_string($db,$_POST['UserPassword']);
      
      
      $sql = "SELECT UserID FROM User WHERE UserUsername = '$myusername' and patientPassword = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['patientUsername'] = $myusername;
         
         
         header("location: home.php");
      }else {
      	 $message = "Username or Password are wrong";
      	 echo
      	 " <script>
      	    alert('$message'); 
      	    window.location.replace('formPatient.php');
         </script>";

      }
   }
?>