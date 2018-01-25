					<?php
					require("./utils/dbconfig.php");			
					$sql = "SELECT id,name FROM artists";
					$result = $conn->query($sql);
					
					echo "<select name='artist'>";
					while ($row = mysqli_fetch_array($result)) {
        					echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
    					}
					echo "</select>";
					
					?>