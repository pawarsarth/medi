<!DOCTYPE html>
<html>
<head>
    <title>Medi AI Welcome</title>
    <style>
        body {
            background-color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            margin-top: 10%;
        }

        .logo {
            display: block;
            margin: 0 auto;
            padding: 20px;
            border-radius: 50%;
            width: 130px;
        }

        h2 {
            color: #a52a2a;
            text-align: center;
            margin-top: 30px;
        }

        h3 {
            color: #555555;
            text-align: center;
            margin-top: 20px;
        }

        .form-container {
            text-align: center;
            margin-top: 40px;
        }

        .submit {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .submit:hover {
            background-color: #45a049;
        }
	
	   .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        .header a {
               text-decoration:none;
			   color:white;
			   margin-right:20px;
        }
        
        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
			bottom:0;
			position:fixed;
			width:100%;
        }
        .but{
			background-color:#333;
			color:white;
		
			padding:20px;
			bottom:60px;
			position:fixed;
		}
	
        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>
  <div class="header">
        <a href='home2 (1).php'>HOME</a>
		<a href='mediaiwelcome (2).php'>LOGIN</a>
		<a href='Aboutus (1).php'>ABOUT</a>
		<a href='contact_us (1).php'>CONTACT US</a>
        <a href='feed1.php'>FEEDBACK</a>

    </div>
    <div class="container">
        <img class="logo" src="mi3.jpeg" alt="Medi AI Logo">
        <h2>Welcome to Medi AI</h2>
        <h3>Log in to your MediAI Account to continue</h3>
        <div class="form-container">
            <form method="POST">
                <input class="submit" name="sub1" type="submit" value="Login">
                <input class="submit" name="sub2" type="submit" value="Login as Admin">
                <input class="submit" name="sub3" type="submit" value="Signup">
            </form>
        </div>
    </div>
     	    <div class="footer">
        <p>Copyright  &copy;2023 MediAI website. All rights are reserved.</p>
    </div>
    <?php
if(isset($_POST['sub1'])){
	header('location:Login (1).php');
}
    if (isset($_POST['sub2'])) {
        echo "<script> window.location.href='adminlogin (2).php';</script>";
    }
    
    if (isset($_POST['sub3'])) {
        echo "<script> window.location.href='signup (1).php';</script>"; 
    }
    ?>
<form method='POST'>
	<center><input type='submit' name='but' class='but' value='Back'></center>
	</form>
</body>
</html>

	<?php
	   if(isset($_POST['but'])){
		  echo"<script> window.location.href='Index1 (1).php';</script>";
	   }
	?>