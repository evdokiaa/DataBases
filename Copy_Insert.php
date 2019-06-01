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
$Shelf=$_GET['shelf'];




if ($ISBN==='' or $CopyNr==='' or $Shelf==='' ){
            header('Location:Copy_Insert.html');
            exit;
    }
	
$result = mysqli_query($conn, "INSERT INTO copies (ISBN,CopyNr,Shelf) VALUES ('$ISBN', '$CopyNr' , '$Shelf' )");
	if($result === FALSE) {
         die(mysqli_error($conn)); 
    }

echo "copy inserted!" ;
    

?>