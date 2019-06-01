<?php 


$uname= $_POST['uname'];
$psw= $_POST['psw'];

if ($uname=='stelina' and $psw=='souri') {
	        header('Location:Admin.html');
            exit;
}
else {
	echo ' <br><br><br><br><br><br><br><br><br><br><br><h1 style="text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;"><big>POULO</big></h1> ' ;
}


?>
