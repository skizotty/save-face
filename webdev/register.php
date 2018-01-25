<?php
	require("utils/dbconfig.php");
	$user = $_POST['display_name'];
	$pswd = md5($_POST['password']);
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$email = $_POST['email'];
	$sql = "SELECT * FROM users WHERE user = '".$user."' AND password = '".$pswd."'";
	$result = $conn->query($sql);
	if( mysqli_num_rows($result) > 0) {
	   session_start();
	   while ($row = mysqli_fetch_array ($result)) {
	   	$_SESSION['loggedin'] = $row['email'];
	   	$_SESSION['auth'] = $row['permissions'];
	   	$_SESSION['uid'] = $row['uid'];

	   }
	}
	else {
		    $sql2 = "INSERT INTO `slopie_database_4lyfe`.`users` (`uid`, `user`, `password`, `email`, `permissions`, `headshot_url`, `fname`, `lname`) VALUES (NULL, '".$user."', '".$pswd."', '".$email."', '100','www.nothing.com', '".$fname."', '".$lname."');";
	 	    if($conn->query($sql2)) {
	 	    	session_start();
	 	    	$_SESSION['username'] = $user;
			$_SESSION['password'] = $pswd;
	   		header("location: login.php");
    		    }
   		    else {
    			echo $conn->error;
    			}
  	}
	
?>	 


