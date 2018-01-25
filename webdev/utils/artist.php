<?php
	require("dbconfig.php");
	$sql = "SELECT * FROM artists";
	$result = $conn->query($sql);
	$resultArr = array();
	while($row = mysqli_fetch_assoc($result)) {
   	 $resultArr[$row['name']] = array('id' => $row['id'], 
         'name' => $row['name'], 
         'url' => $row['url'],
         'img_url' => $row['img_url']);
	}
echo json_encode($resultArr);   	
?>
