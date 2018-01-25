					<?php
					require("./utils/dbconfig.php");			
					$sql = "SELECT id,venue_name FROM venues";
					$result = $conn->query($sql);
					
					echo "<select name='venue'>";
					while ($row = mysqli_fetch_array($result)) {
        					echo "<option value='" . $row['id'] . "'>" . $row['venue_name'] . "</option>";
    					}
					echo "</select>";
					
					?>