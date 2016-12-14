<?php 
	// session_start();

	//check to see if the user is logged in, else redirect to admin page
	if(!isset($_SESSION['admin'])){
		header("Location:index.php");
	}
?>
<h1>Add new category</h1>