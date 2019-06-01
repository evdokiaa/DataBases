<!DOCTYPE html>
<html lang="el">
	<head>
		<title>Search</title>
	</head>
	
	<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "library";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $database);

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
			
		}
		
		mysqli_set_charset($conn, "utf8");
	
		
		$result = mysqli_query($conn, "SELECT member.MFirst, member.MLast, borrows.date_of_borrowing from member,borrows
								where (borrows.date_of_return = 'pending' and borrows.date_of_borrowing < (CURRENT_DATE - INTERVAL 30 day) 
										and borrows.memberID = member.memberID)");
			
			echo"<div style=\"margin:auto;\">";
 
			echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>They must return the books</strong></h1>";
			echo "<table align = 'center' border='8' >";
			echo "<tr>";
			echo "<td>";echo "<strong>";echo "First name";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "Last name";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "Borrowing date ";echo "</strong>";echo "</td>";
			echo "</tr>";
			
				
			while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['MFirst']; echo "</td>";
					echo "<td>"; echo $row['MLast']; echo "</td>";
					echo "<td>"; echo $row['date_of_borrowing']; echo "</td>";
					echo "</tr>";
			}
			echo "</table>";
		?>
	</body>
</html>