<?php
	require("utils/dbconfig.php");
	session_start();
	if(isset($_POST['usr'])) {
	   $user = $_POST['usr'];
	   $pswd = md5($_POST['pwd']);
	}
	else {
	   $user = $_SESSION['username'];
	   $pswd = $_SESSION['password'];
	}
	$sql = "SELECT * FROM users WHERE user= '".$user."' AND password = '".$pswd."'";
	$result = $conn->query($sql);
	if( mysqli_num_rows($result) > 0) {
	   while ($row = mysqli_fetch_array ($result)) {
	   	$_SESSION['loggedin'] = $row['email'];
	   	$_SESSION['auth'] = $row['permissions'];
	   	$_SESSION['uid'] = $row['uid'];
	   }
	   header("location: dashboard.php");
	}
	else {
	   header("location: http://webdev.scottsorci.com/#/login?attempt");
 	}
?>	 

