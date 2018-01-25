<?php
require("dbconfig.php");
        $sql2 = "SELECT  `id` ,  `price` ,  `events` ,  `name` ,  `description` ,  `user_id` FROM `tickets` WHERE  `events` = 34";
        $result2 = $conn->query($sql2);
         while($row2 = mysqli_fetch_assoc($result2)) {
            $resultArr[] = $row2;
         }

echo json_encode($resultArr);   	
?>
