<?php 
	//starts a new web session
	// session_start();

	//check to see if the user wants to logout
	if(isset($_GET['action'])){
		if($_GET['action']=='logout'){
			unset($_SESSION['admin']);
		}
	}

	//checks to see that the username and password exist in the database
	if(isset($_POST['login'])){
		$login_sql = "SELECT * FROM user WHERE username='".$_POST['username']."' AND password='".sha1($_POST['password'])."' ";
		if($login_query = mysqli_query($dbconnect, $login_sql)){
			$login_rs = mysqli_fetch_assoc($login_query);
			$_SESSION['admin'] = $login_rs['username'];
		}
	}

	if(isset($_SESSION['admin'])){
		include("cpanel.php");

	}else{
		include("login.php");
	}

	// echo sha1("admin")."<br>";

	// echo "admin area";
?>