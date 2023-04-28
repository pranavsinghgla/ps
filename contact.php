<?php


$con = mysqli_connect('localhost', 'root', '','project');

// get the post records
$name = $_POST['name'];
$mail = $_POST['email'];
$msg= $_POST['msg'];



$sql = "INSERT INTO `message` (`name`, `email`, `msg`) VALUES ('$name', '$mail', '$msg')";


$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "we will contact you shortly ";
	
	
		header("refresh:1,url=index.html");
}
else{
	echo"booking not done";
}


?>