<html>
  <head>
    <title>Venues</title>
    <?php include('utils/webcom/head.php'); ?>
  </head>
		<body>
			<?php
				include('utils/webcom/check.php');
				if(isset($_REQUEST["add"])) {
				  $venue_name = $_POST["name"];
				   $url = $_POST["url"];
				   $address = $_POST["address"];
				   $city = $_POST["city"];
				   $state = $_POST["state"];
				   $phone = $_POST["phone"];
				   $img_url = $_POST["img"];
				   $sql = "INSERT INTO `slopie_database_4lyfe`.`venues` (`venue_name`, `url`, `address`, `city`, `state`, `phone`, `img_url`, `id`) VALUES ('".$venue_name."', '".$url."', '".$address."', '".$city."', '".$state."', '".$phone."', '".$img_url."', NULL);";
				   if ($conn->query($sql) === TRUE) {
					    echo "<script>alert('new venue added!')</script>";
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
				<form action="venues.php?add" method="post" class="adding-form">
				 <table>
				  <tr><td class="field-name"> Name </td><td class="field-value"> <input type="text" name="name" placeholder"Venue Name" required> </td></tr>
				  <tr><td class="field-name"> Website URL </td><td class="field-value"><input type="text" name="url" placeholder"Venue Website" required><br></td></tr>
				  <tr><td class="field-name"> Address </td><td class="field-value"><input type="text"  name="address" placeholder"Venue Address" required><br></td></tr>
				  <tr><td class="field-name"> City </td><td class="field-value"><input type="text" name="city" placeholder"Venue City" required><br></td></tr>
				  <tr><td class="field-name"> State </td><td class="field-value"><input type="text"  name="state" placeholder"Venue State" required><br></td></tr>
				  <tr><td class="field-name"> Phone </td><td class="field-value"><input type="text" name="phone" placeholder"Venue Phone" required><br></td></tr>
				  <tr><td class="field-name"> Venue Img </td><td class="field-value"><input type="text" name="img" placeholder"Venue Lead Image" required><br></td></tr>
				 </table>
				 <input class="button-large" type="submit" value="Add Venue">
				</form>
			</div>
			</div>
			<br>
			<div id='footer'>
			</div>
		</body>
</html>