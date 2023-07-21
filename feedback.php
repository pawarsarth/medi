<!DOCTYPE html>
<html>
<head>
  <title>Feedback Form</title>

  

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
    
    .container {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    
    textarea {
      height: 100px;
    }
    
    .smiley-rating {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
    .smiley-rating input[type="radio"] {
      display: none;
    }
    
    .smiley-rating label {
      font-size: 24px;
      cursor: pointer;
    }
    
    .smiley-rating label .smiley {
      transition: transform 0.3s;
    }
    
    .smiley-rating label:hover .smiley,
    .smiley-rating input[type="radio"]:checked + label .smiley {
      transform: scale(1.2);
    }
    
    input[type="submit"] {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: #555;
    }

    .home-button {
      text-align: center;
      margin-top: 20px;
    }

    .home-button a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .home-button a:hover {
      background-color: #555;
    }
  </style>

</head>
<body>
<form method="POST">
  <h1>Feedback Form</h1>
  <div class="container">
    
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="rating">Rating</label>
        <div class="smiley-rating">
          <input type="radio" id="smiley5" name="rating" value="5" required>
          <label for="smiley5">&#128515;</label>
          <input type="radio" id="smiley4" name="rating" value="4">
          <label for="smiley4">&#128516;</label>
          <input type="radio" id="smiley3" name="rating" value="3">
          <label for="smiley3">&#128528;</label>
          <input type="radio" id="smiley2" name="rating" value="2">
          <label for="smiley2">&#128532;</label>
          <input type="radio" id="smiley1" name="rating" value="1">
          <label for="smiley1">&#128542;</label>
        </div>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>
      </div>
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" id="date" name="date">
      </div>
      <input type="submit" value="Submit" name="sub1" id="id1" onclick="ok()">
      </div>
      
<script> 
const head= document.getElementById('id1');   

         function ok()
         {
          alert("Thank you for giving feedback!!");
          window.open("firstlogin.php","_blank");
         }
      head.onclick=ok;  
      </script>    
    </form>
  
 <!-- <div class="home-button">
    <input type="submit" name="but1" value="submit">
  </div>-->





</body>
</html>

<?php



if(isset($_POST['sub1']))
{
      $a=$_POST['name'];
      $b=$_POST['email'];
      $c=$_POST['rating'];
      $d=$_POST['message'];
      $e=$_POST['date'];
      

      $con=mysqli_connect("localhost","root","","main3");

    if(!$con)
    {
      echo "not done ";
    }

    $q="INSERT INTO `feedback`(`name`, `email`, `rating`, `message`,`date1`) VALUES ('$a','$b','$c','$d','$e')";
    $res=mysqli_query($con,$q);
    

    echo "
    
";



   // echo "hello";




    if(!$res)
    {
      echo"not done ";
    }
echo "<br>hello1";



  
}
?>