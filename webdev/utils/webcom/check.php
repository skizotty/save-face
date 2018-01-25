<?php
	session_start();
	require("./utils/dbconfig.php");			
	if($_SESSION['loggedin'] == true){
	   echo "<div class='row' id='alert-banner'><div class='loggedinas'> Logged in as ".$_SESSION['loggedin']."</div></div>";
	}
	else {
	   header("location: login.php");
	}
?>