<html>
  <head>
    <title>Tickets</title>
    <?php include('utils/webcom/head.php'); ?>
  </head>
		<body>
			<?php
		    		include('utils/webcom/check.php');
				if(isset($_REQUEST["add"])) {
				   $name = $_POST["name"];
				   $price = $_POST["price"];
				   $description = $_POST["description"];
				   $event = $_POST["event"];
				   $user = $_SESSION['uid'];
				   $sql = "INSERT INTO `slopie_database_4lyfe`.`tickets` (`id`, `price`, `events`, `name`, `description`, `user_id`) VALUES (NULL, '".$price."', '".$event."', '".$name."', '".$description."', '".$user."');";
				   if ($conn->query($sql) === TRUE) {
					    echo "<script>alert('New Tickets Added!')</script>";
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
			  
			  <!-- adding form --> 
			  
			  <form action="tickets.php?add" method="post" class="adding-form">
				 <table>
				  <tr><td class="field-name"> Name </td><td class="field-value"> <input type="text" name="name" placeholder"Event Name" required> </td></tr>
				  <tr><td class="field-name"> Price </td><td class="field-value"><input type="price" name="price" required><br></td></tr>
				  <tr><td class="field-name"> Description </td><td class="field-value"><input type="text" name="description" required><br></td></tr>
				  <tr><td class="field-name"> Event  </td><td class="field-value">
					<?php
					require("./utils/event_dropdown.php");			
					?>
				  <br></td></tr>
				 </table>
				 <input class="button-large" type="submit" value="Post Tickets">
				</form>

			<!-- editing form -->
			
			  <form action="tickets.php?edit" method="post" class="editing-form">
				 <table>
				  <tr><td class="field-name"> Ticket ID </td><td class="field-value"><input type="text" name="eventID" readonly><br></td></tr>

				  <tr><td class="field-name"> Name </td><td class="field-value"> <input type="text" name="name" placeholder"Event Name" required> </td></tr>
				  <tr><td class="field-name"> Price </td><td class="field-value"><input type="price" name="price" required><br></td></tr>
				  <tr><td class="field-name"> Description </td><td class="field-value"><input type="text" name="description" required><br></td></tr>
				  <tr><td class="field-name"> Event  </td><td class="field-value">
					<?php
					require("./utils/event_dropdown.php");			
					?>
				  <br></td></tr>
				 </table>
				 <input class="button-large" type="submit" value="Save">
				</form>
				
			 <!-- select action form -->
			 
			 What would you like to do? 
			 <br>
			 <button class="button-large" onclick="showEditForm()">Edit Events</button> <!-- todo - hide buttons dynamically -->
			 <button class="button-large" onclick="showAddForm()">Add Events</button>
			 
			 <!-- once add button clicked, show add form -->
			 
			 <!-- once edit button clicked, show dropdown --> 
			 
			 <!-- edit dropdown listing events
			 <?php include('utils/webcom/eventselectdropdown.php'); ?>
			  <button class="button-large" onclick="showAddForm()" value="Add Events">

			 <!-- once button clicked request info for event, populate edit form -->

			 

			</div>
			</div>
			<br>
			<div id='footer'>
			</div>
		</body>
</html>