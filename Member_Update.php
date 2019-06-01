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
    die("Connection failed: " . mysqli_connect_error());
}


$memberID= $_GET['memberID'];


if ($memberID===''){
            header('Location:Copy_Insert.html');
            exit;
    }
	
$result1 = mysqli_query($conn, "SELECT MFirst FROM member WHERE memberID=$memberID ");
	if($result1 === FALSE) {
         die(mysqli_error($conn)); 
    }

$result2 = mysqli_query($conn, "SELECT MLast FROM member WHERE memberID=$memberID ");
	if($result2 === FALSE) {
         die(mysqli_error($conn)); 
    }
	
	$result3 = mysqli_query($conn, "SELECT Street FROM member WHERE memberID=$memberID ");
	if($result3 === FALSE) {
         die(mysqli_error($conn)); 
    }
	
	$result4 = mysqli_query($conn, "SELECT number FROM member WHERE memberID=$memberID ");
	if($result4 === FALSE) {
         die(mysqli_error($conn)); 
    }
	
	$result5 = mysqli_query($conn, "SELECT postalCode FROM member  WHERE memberID=$memberID ");
	if($result5 === FALSE) {
         die(mysqli_error($conn)); 
    }
	
	$result6= mysqli_query($conn, "SELECT Mbirthdate  FROM member WHERE memberID=$memberID ");
	if($result6 === FALSE) {
         die(mysqli_error($conn)); 
		 
		 
    }

$_SESSION['memberID'] = $memberID;
	  
	  ?>
	  
	 
	  
	  <form action="Member_Update2.php">
	  First Name<br>
			<input type="text" name="MFirst" value="<?php while($row = mysqli_fetch_array($result1)){
																echo $row['MFirst'];
																} 
																?>" >
			<br>
			
			Last Name<br>
			<input type="text" name="MLast" value="<?php while($row = mysqli_fetch_array($result2)){
																echo $row['MLast'];
																} 
																?>  ">
			<br>
			
			Street<br>
			<input type="text" name="Street" value="<?php while($row = mysqli_fetch_array($result3)){
																echo $row['Street'];
																} 
																?>  ">
			<br>
			
			
			Number<br>
			<input type="number" name="number" value=<?php while($row = mysqli_fetch_array($result4)){
																echo $row['number'];
																} 
																?>  >
			<br>
			
			
			Postal Code<br>
			<input type="number" min="0" name="postalCode" value=<?php while($row = mysqli_fetch_array($result5)){
																echo $row['postalCode'];
																} 
																?> >
			<br>
			
			Date of Birth <br>
			<input type="date" name="Mbirthdate" value=<?php while($row = mysqli_fetch_array($result6)){
																echo $row['Mbirthdate'];
																} 
																?>  >
			<br>
			<br>
			
			
			<input type="submit" value="Submit">
			
			</form>
			
	  

    

    

