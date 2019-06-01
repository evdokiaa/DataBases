<!DOCTYPE html>
<html lang="el">
	<head>
		<title>Info</title>
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
		$categoryName= $_GET['categoryName'];
		
		$result = mysqli_query($conn, "SELECT title,pubYear from book , belongs_to WHERE book.ISBN=belongs_to.ISBN and belongs_to.categoryName='$categoryName' ");
			
			echo"<div style=\"margin:auto;\">";
 
			echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Our Books</strong></h1>";
			echo "<table align = 'center' border='8' >";
			echo "<tr>";
			echo "<td>";echo "<strong>";echo "Title";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "Year";echo "</strong>";echo "</td>";
			echo "</tr>";
			
				
			while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['title']; echo "</td>";
					echo "<td>"; echo $row['pubYear']; echo "</td>";
					echo "</tr>";
			}
			echo "</table>";
		?>
	</body>
</html>