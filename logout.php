<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  .butt
  {
       
  }
</style>
</head>
<body>
    <form method="POST">
    
  <!--  <center> <input type="submit" name="but1" id="bt1" class="butt"></center>-->
    </form>
</body>
</html>


<?php
session_start(); // Start the session

 
   // echo "hello";
    include('con3 (1).php');
    
    // Check if the user is logged in
    if (isset($_SESSION['id'])) {
        $userid = $_SESSION['id'];
        
        // Update the logout time and status only if the user is logged in
        $q = "UPDATE loginhistory SET logouttime = NOW(), status = 'Offline' WHERE uid = $userid";
        mysqli_query($a, $q);
        
        // Destroy the session
        session_destroy();
        
      //  echo "hello2";
        
        // Redirect the user to the desired page
        header("location:mediAIwelcome (2).php");
        exit();
    }

?>
