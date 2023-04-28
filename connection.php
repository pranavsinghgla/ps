<?php
$con=mysqli_connect("localhost","root","","project");

if(
	mysqli_connect_error()
)
{
	echo "caanot";
}
else
{
	echo "coonected";
}
?>