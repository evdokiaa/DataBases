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
	
	$ISBN= $_GET['ISBN'];
	
	if ($ISBN===''){
            header('Location:Book_Delete.html');
            exit;
    }
	
	$result = mysqli_query($conn, "DELETE FROM Book WHERE ISBN = $ISBN");
	
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	
	echo "Book deleted";
	
	?>
