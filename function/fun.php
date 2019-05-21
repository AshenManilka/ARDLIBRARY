<?php
include_once('DBs.php');










//this function to get product image
function viewproductimagebyid($id)
{
	global $con;
	$sql="SELECT * FROM `return_books` WHERE `member_id`='".($id)."' ";
	//$sql="SELECT * FROM `issus_book` WHERE `no`='".($id)."' ";
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