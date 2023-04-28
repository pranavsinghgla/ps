<?php

require("connection.php");



?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="admin.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>

<form action="panel.php" method="post">
  <div class="form-field">
    <input type="text" placeholder="Admin Name" required/ name="adminname">
  </div>
  
  <div class="form-field">
    <input type="password" placeholder="Password" required/ name="password">                         </div>
  
  <div class="form-field">
    <button class="btn" type="submit" name="login">Log in</button>
  </div>
</form>
<?php
  if(isset($_POST['login']))
  {


    $query= "Select * FROM `admin_login` WHERE `Admin_name`='$_POST[adminname]' AND `Admin_Password`='$POST[password]'";
     $result=mysqli_query($con,$query);
     if(mysqli_num_rows($result)==1)
     {
     header("location:panel.php");
         session_start();
         $_SESSION['admin_login']=$_POST['adminname'];
         header("location:panel.php");
     }
     }
     else{
      echo"inccorect";
     }
  
  
?>
  
</body>
</html>

