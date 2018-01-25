<?php 
     if(isset($_GET['vid'])){
      $vid = $_GET['vid'];
      $sql = "SELECT * FROM events e JOIN venues v ON e.venue = v.id WHERE venue ='".$vid."' AND date > CURDATE()";
     }
     else if(isset($_GET['aid'])){
      $aid = $_GET['aid'];
      $sql = "SELECT * FROM events e JOIN venues v ON e.venue = v.id WHERE artist ='".$aid."' AND date > CURDATE()";
     }
     else if(isset($_GET['aid']) && isset($_GET['aid'])){
      $aid = $_GET['aid'];
      $vid = $_GET['vid'];
      $sql = "SELECT * FROM events e JOIN venues v ON e.venue = v.id WHERE artist ='".$aid."' AND venue ='".$vid."' AND date > CURDATE()";
     }
     else {
      $sql = "SELECT * FROM events e JOIN venues v ON e.venue = v.id WHERE date > CURDATE() ORDER BY date asc";
     }

	require("dbconfig.php");
	
	$result = $conn->query($sql);
	$rows = array();
	while($r = mysqli_fetch_assoc($result)) {
	  	 $datetime = $r[event_time];
   		 $r[time] = strtotime($datetime) * 1000;
   		 $rows[] = $r;

	}
	$printer = json_encode($rows);
	echo $printer;
?>