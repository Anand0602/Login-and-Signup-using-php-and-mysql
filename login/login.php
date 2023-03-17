<?php
   $dbc = mysqli_connect('localhost','root','','users_details')
	or die("Error Connecting to MySQL server");
   
   echo '<br>';
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($dbc,$_POST['username']);
      $pword = mysqli_real_escape_string($dbc,$_POST['psw']); 
      
      $sql = "SELECT `username`, `pword` FROM `details_area` WHERE username = '$username' and pword = '$pword'";
      
      $result = mysqli_query($dbc,$sql);
      $row = mysqli_fetch_array($result);
      /*$active = $row['active'];*/
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['Username'] = $username;
         
         header("location:../home/mainpage.html");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
   }
?>