
<?php

$con=mysqli_connect("localhost","root","","uslogin");

if(!$con)
{
  echo"not done ";
}

$q="SELECT `name`, `email`, `rating`, `message`,`date1` FROM `feedback`";

$res=mysqli_query($con,$q);
if(!$res)
{
  echo "not done ";
}


?>







<!DOCTYPE html>
<html>
<head>
  <title>Feedback Display</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
    }
    
    h1 {
      text-align: center;
      color: #333;
    }
    
    .feedback-container {
      max-width: 800px;
      margin: 0 auto;
    }
    
    .feedback {
      background-color: #fff;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .feedback-header {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }
    
    .feedback-name {
      font-weight: bold;
      margin-right: 10px;
    }
    
    .feedback-rating {
      color: #ff9800;
      font-size: 24px;
      margin-right: 10px;
    }
    
    .feedback-date {
      color: #999;
      font-size: 14px;
    }
    
    .feedback-message {
      color: #333;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

  <h1>Feedback Display</h1>
  <?php  while($row=mysqli_fetch_assoc($res))

{
?>
  <div class="feedback-container">
    <div class="feedback">
      <div class="feedback-header">
        <span class="feedback-name"><?php  echo $row['name'];  ?></span>
        <span class="feedback-rating"><!--&#9733;&#9733;&#9733;&#9733;&#9733;-->

        <?php  
        $rat=$row['rating'];
        if($rat==1)
        {
           echo"&#9733;&#9734;&#9734;&#9734;&#9734;" ;
        }
        else if($rat==2)
        {
           echo"&#9733;&#9733;&#9734;&#9734;&#9734;" ;
        }
        else if($rat==3)
        {
           echo"&#9733;&#9733;&#9733;&#9734;&#9734;" ;
        }
        else if($rat==4)
        {
           echo"&#9733;&#9733;&#9733;&#9733;&#9734;" ;
        }
        else if($rat==5)
        {
           echo"&#9733;&#9733;&#9733;&#9733;&#9733;" ;
        }
        else
        {
          echo "&#9734;&#9734;&#9734;&#9734;&#9734;";
        }
        ?>


        </span>
        <span class="feedback-date">  <?php  echo $row['date1']; ?></span>
      </div>
      <div class="feedback-message">
        
      <?php  echo $row['message']; ?>
      </div>
    </div>
    <!--
    <div class="feedback">
      <div class="feedback-header">
        <span class="feedback-name">Jane Smith</span>
        <span class="feedback-rating">&#9733;&#9733;&#9733;&#9734;&#9734;</span>
        <span class="feedback-date">June 28, 2023</span>
      </div>
      <div class="feedback-message">
        Aliquam rhoncus sem nec metus ultricies tincidunt. Donec vel libero vel turpis placerat bibendum at nec orci. Nulla iaculis erat vitae pharetra sodales. Maecenas nec metus non dui ullamcorper tristique. Fusce id felis et odio interdum aliquet id in enim. Nullam ac cursus turpis. Quisque tincidunt metus ac orci fringilla, non viverra justo pellentesque.
      </div>
    </div>-->


    <?php  }?>
    
    <!-- Add more feedback items here -->
    
  </div>
</body>
</html>
