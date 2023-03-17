<?php


$Name=$_POST['person_name'];
$Username=$_POST['username'];
$Email=$_POST['email'];
$Pword=$_POST['psw'];
	
 	echo 'Name is'. $Name;
 	echo '<br>';
 	echo 'Username is ' .$Username;
 	echo '<br>';
	echo 'Email is ' .$Email;
    echo '<br>';
    echo 'Password is ' .$Pword;
	
	
	
	
$dbc = mysqli_connect('localhost','root','','users_details')
	or die("Error Connecting to MySQL server");

echo '<br>';	
	
$query="INSERT INTO `details_area` (`name`, `username`, `email`, `pword`) VALUES('$Name','$Username','$Email','$Pword')";

echo $query;
$result=mysqli_query($dbc,$query);
	
header("location:../home/mainpage.html");
?>