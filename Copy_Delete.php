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
	$CopyNr=$_GET['CopyNr'];

	
	if ($ISBN==='' or $CopyNr===""){
            header('Location:Copy_Delete.html');
            exit;
    }
	
	$result = mysqli_query($conn, "DELETE FROM copies WHERE ISBN = $ISBN and CopyNr=$CopyNr");
	
	if($result === FALSE) {
         die(mysqli_error($con)); 
    }
	
	echo "Copy deleted";
	
	?>
