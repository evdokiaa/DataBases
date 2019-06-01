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
$title=$_GET['title'];
$pubYear=$_GET['pubYear'];
$numpages=$_GET['numpages'];
$pubName=$_GET['pubName'];




if ($ISBN==='' or $title==='' or $pubYear==='' or $numpages==='' or $pubName==='' ){
            header('Location:Book_Insert.html');
            exit;
    }
	
$result = mysqli_query($conn, "INSERT INTO Book (ISBN,title,pubYear,numpages,pubName) VALUES ('$ISBN', '$title' , '$pubYear' , '$numpages' , '$pubName')");
	if($result === FALSE) {
         die(mysqli_error($conn)); 
    }

echo "book inserted!" ;
    

?>