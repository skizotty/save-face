	<?php			
				$servername = "localhost";
				$username = "slopie_user_name";
				$passworddb = "password";
				$dbname = "slopie_database_4lyfe";
				$conn = new mysqli($servername, $username, $passworddb, $dbname);
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 

				?>