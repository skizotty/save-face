<?php
	require("dbconfig.php");
	$sql = "SELECT * FROM users WHERE permissions = 200";
	$result = $conn->query($sql);
	$rows = array();
	while($r = mysqli_fetch_assoc($result)) {
   		 $rows[] = $r;
	}
	$printer = json_encode($rows);
	echo $printer;
?>
