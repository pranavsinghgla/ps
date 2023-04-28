<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border="2">
<th>name</th>
<th>mobile no</th>
<th>email</th>
<th>checkin</th>

<?php
include("booking.php");
error_reporting(0);
header("refresh:10000,url=admin.php");
$query= "select * from book";
$data= mysqli_query($con,$query);
$total= mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);



if($total!=0)
{
while($result=mysqli_fetch_assoc($data))
{
      echo "
       <tr>
<td>".$result['Sname']."</td>
<td>".$result['Semail']."</td>
<td>".$result['Smobile']."</td>
<td>".$result['from']."</td>

</tr>
";}

}

else{
echo"no record";
} 
?>
</table>


  
</body>
</html>