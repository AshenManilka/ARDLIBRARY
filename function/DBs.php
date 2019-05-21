<?php



	
	
	 $con = mysqli_connect('localhost','root','','ard_lib');
 

 if($con->connect_error)
 {
 	echo "Db Connection Error".$con->connect_error;
 }
?>