<?php 

function getFromDB($value){
	$sql = "SELECT * FROM $value";
	$sql_query = mysqli_query($dbconnect, $sql);
	$sql_rs = mysqli_fetch_assoc($sql_query);

	return $sql_rs;
}

?>