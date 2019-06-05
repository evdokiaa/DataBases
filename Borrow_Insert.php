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


$memberID= $_GET['memberID'];
$ISBN=$_GET['ISBN'];
$copyNr=$_GET['copyNr'];
$date_of_borrowing=$_GET['date_of_borrowing'];
$date_of_return=$_GET['date_of_return'];




if ($ISBN==='' or $memberID==='' or $copyNr==='' or $date_of_borrowing==='' or $date_of_return==='' ){
            header('Location:Borrows_Insert.html');
            exit;
    }
	
	
$result1 = mysqli_query($conn, "SELECT COUNT(book.title) as res FROM book, borrows WHERE borrows.memberID=$memberID AND borrows.ISBN = book.ISBN");
$row = mysqli_fetch_assoc($result1);
if($row['res'] >= 5) {
	echo "The member already has 5 books" ;
}
else {


	
$result = mysqli_query($conn, "INSERT INTO borrows (memberID,ISBN,copyNr,date_of_borrowing,date_of_return) VALUES ('$memberID', '$ISBN' , '$copyNr' , '$date_of_borrowing' , '$date_of_return')");
	if($result === FALSE) {
         die(mysqli_error($conn)); 
    }

echo "borrows inserted!" ;
}

?>