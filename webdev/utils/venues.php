<?php
	require("dbconfig.php");

$sql = "SELECT * FROM venues";
$result = $conn->query($sql);
$resultArr = array();

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $resultArr[$row['venue_name']] = array('id' => $row['id'], 
         'venue_name' => $row['venue_name'], 
         'url' => $row['url'],
         'address' => $row['address'],
         'city' => $row['city'],
         'state' => $row['state'],
         'phone' => $row['phone'],
         'img_url' => $row['img_url'],
         'id' => $row['id']);
        $sql2 = "SELECT `id`, `name`, `venue`, `artist`, `date` FROM `events` WHERE `venue` =".$row['id']." AND date > CURDATE()";
        $result2 = $conn->query($sql2);
        if($result2->num_rows > 0){
         while($row2 = mysqli_fetch_assoc($result2)) {
            $resultArr[$row['venue_name']]['events'][] = $row2;
         }
        }
        else {
          $resultArr[$row['venue_name']]['events'][] = "No Results";
          }
    }
    
} else {
    $resultArr = array('success' => false, 'total' => 0);
    echo "0 results";
}
echo json_encode($resultArr);   	
?>
