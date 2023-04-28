<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','project');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$from = $_POST['from'];
$last_date = $_POST['last_date'];
$package = $_POST['package'];
$member = $_POST['member'];
$choice = $_POST['choice'];


// database insert SQL code
$sql = "INSERT INTO `book` (`Sname`, `Semail`, `Smobile`, `Sfrom`, `Slast_date`,`Spackage`,`Smember`,`schoice`) VALUES ('$name', '$email', '$mobile', '$from', '$last_date','$package','$member','$choice')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "refreshing......... ";
	
	
		header("refresh:1,url=payment.html");
}
else{
	echo"booking not done";
}


?>