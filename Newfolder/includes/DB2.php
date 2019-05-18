<?php
  $con = mysqli_connect('localhost','root','','ardl');
 

 if($con->connect_error)
 {
 	echo "Db Connection Error".$con->connect_error;
 }
?>