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
	
	$result = mysqli_query($conn, "SELECT ISBN FROM Book WHERE ISBN = $ISBN");
	
	if (mysqli_num_rows($result)==0) {
		echo "The given ISBN does not refer to any book of the Library";
	}
	
	else {
	  $result = mysqli_query($conn, "DELETE FROM Book WHERE ISBN = $ISBN");
	
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	
	echo "Book deleted";
	}
	
	?>
