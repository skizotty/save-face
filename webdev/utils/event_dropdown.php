					<?php
					require("./utils/dbconfig.php");			
					$sql = "SELECT id,name,date FROM events";
					$result = $conn->query($sql);
					
					echo "<select name='event'>";
					while ($row = mysqli_fetch_array($result)) {
        					echo "<option value='" . $row['id'] . "'>" . $row['name'] . " - " . $row['date'] . "</option>";
    					}
					echo "</select>";
					
					?>