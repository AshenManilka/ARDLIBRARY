<?php
include_once('../DB2.php');










//this function to get product image
function viewproductimagebyid($id)
{
	global $con;
	$sql="SELECT * FROM `return_book` WHERE `member_id`='".($id)."' ";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			
			return $row;
			
		}
	}
	echo "erro";
}

//this function show all product in productpage






?>