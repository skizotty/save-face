<?php
require("dbconfig.php");
$sql = "SELECT * FROM events";
$result = $conn->query($sql);
$resultArr = array();

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $resultArr[$row['name']] = array(
         'id' => $row['id'], 
         'name' => $row['name'], 
         'date' => $row['date'],
         'sold_out' => $row['sold_out'],
         'event_price' => $row['event_price'],
         'venue' => $row['venue'],
         'artist' => $row['artist'],
         'event_time' => strtotime($row['event_time']) * 1000);
        $sql2 = "SELECT  `id` ,  `price` ,  `events` ,  `name` ,  `user_id` FROM `tickets` WHERE  `events` = ".$row['id'];
        $result2 = $conn->query($sql2);
        if($result2->num_rows > 0){
         while($row2 = mysqli_fetch_assoc($result2)) {
           $resultArr[$row['name']]['tickets'][] = $row2;
           /*$resultArr[$row['name']]['tickets'][]['name'] = $row2['name'];
           $resultArr[$row['name']]['tickets'][]['id'] = $row2['id'];          
           $resultArr[$row['name']]['tickets'][]['price'] = $row2['price'];          
           //$resultArr[$row['name']]['tickets']['description'] = $row2['description'];          
           $resultArr[$row['name']]['tickets'][]['user_id'] = $row2['user_id'];          
          */


         }
        }
        else {
           $resultArr[$row['name']]['tickets'][]['name'] = "No Tickets for this event available, try again later! Sorry!";

	    }
    }
    
} else {
    $resultArr = array('success' => false, 'total' => 0);
    echo "0 results";
}
echo json_encode($resultArr);   	
?>
