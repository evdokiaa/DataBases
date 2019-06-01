<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "library";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}

$MFirst= $_GET['MFirst'];
$MLast= $_GET['MLast'];
$Street= $_GET['Street'];
$number= $_GET['number'];
$postalCode= $_GET['postalCode'];
$Mbirthdate= $_GET['Mbirthdate'];
$memberID = $_SESSION['memberID'];

 



if ($MFirst==='' or $MLast==='' or $Street==='' or $number==='' or $postalCode==='' or $Mbirthdate==='' ){
            header('Location:Member_Update.html');
            exit;
    }
	
	$result = mysqli_query($conn, "UPDATE member SET MFirst = '$MFirst' , MLast='$MLast', Street='$Street', number=$number, postalCode=$postalCode, Mbirthdate='$Mbirthdate' WHERE memberID = $memberID ");
	if($result === FALSE) {
         die(mysqli_error($conn)); 
    }
	
	echo "Member updated!";
	?>