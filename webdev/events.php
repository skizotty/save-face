<html>
  <head>
    <title>Events</title>
    <?php include('utils/webcom/head.php'); ?>
  </head>
		<body>

			<?php
			    session_start();
				require("./utils/dbconfig.php");			
				if($_SESSION['loggedin'] == true){
				   echo "<div id='alert-banner'>logged in as ".$_SESSION['loggedin']."</div>";
				}
				else {
				   header("location: login.php");
				}
				if(isset($_REQUEST["add"])) {
				   $name = $_POST["name"];
				   $date = $_POST["date"];
				   $venue = $_POST["venue"];
				   $artist = $_POST["artist"];
				   $sql = "INSERT INTO `slopie_database_4lyfe`.`events` (`id`, `name`, `venue`, `artist`, `date`) VALUES (NULL, '".$name."', '".$venue."', '".$artist."', '".$date."');";
				   if ($conn->query($sql) === TRUE) {
					    echo "<script>alert('new event added!')</script>";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
					
					$conn->close();
				}
			?>
			<div class="row" id='top-menu'></div>
			<div class="row">
			  <div class="col-md-3" id='side-menu'></div>
			  <div class='dashboard'>
				<form action="events.php?add" method="post" class="adding-form">
				 <table>
				  <tr><td class="field-name"> Name </td><td class="field-value"> <input type="text" name="name" placeholder"Event Name" required> </td></tr>
				  <tr><td class="field-name"> Date </td><td class="field-value"><input type="date" name="date" placeholder"Event Date" required><br></td></tr>
				  <tr><td class="field-name"> Venue  </td><td class="field-value">
					<?php
					require("./utils/venue_dropdown.php");			
					?>
				  <br></td></tr>
				  <tr><td class="field-name"> Artist  </td><td class="field-value">
					<?php
					require("./utils/artist_dropdown.php");			
					?>
				  <br></td></tr>
				
				 </table>
				 <input class="button-large" type="submit" value="Add Event">
				</form>

			</div>
			</div>
			<br>
			<div id='footer'>
			</div>
		</body>
</html>