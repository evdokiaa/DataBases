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
echo "connected ";

$ISBN= $_GET['ISBN'];

echo $ISBN;



$result = mysqli_query($conn, "SELECT AFirst FROM `author` WHERE authID=12 ");
while($row = mysqli_fetch_array($result)){
      echo $row['AFirst'];
    
}
?>