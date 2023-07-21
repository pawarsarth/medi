<?php
session_start();
include("con3 (1).php");
if (isset($_POST['but1'])) {
    $username = $_POST["text1"];
    $password = $_POST["pass1"];
    $res = mysqli_query($a, "SELECT * FROM user WHERE uname='$username' AND pass='$password'");
    $num = mysqli_num_rows($res);
    if ($num > 0) {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $row['id'];
        $userid = $_SESSION['id'];
        $ip = getHostByName(getHostName());
        $q = "INSERT INTO loginhistory(uid, date, logintime, ipaddress, status) VALUES ($userid, NOW(), NOW(), '$ip','Online')";
        mysqli_query($a, $q);
        header("location:firstlogin.php");
       
       
        exit();
    } else {

        echo
        "
        <script>
        alert('invalid username and password !!');
        window.location.href='mediaiwelcome (2).php';
        </script>
        ";
     //   header("location:mediaiwelcome.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        body {
            background-color:white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header{
			background-color:#333;
			color:white;
			padding:20px;
			text-align:center;
		}
		.header a{
			text-decoration:none;
			color:white;
			margin-right:20px;
		}
        .container {
            width: 400px;
            margin: 0 auto;
			margin-top:10px;
			margin-bottom:50px;
            border-radius: 12px;
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            left: 45%;
			border:1px solid #ccc;
            animation: fade 1s ease-in-out;
        }

        @keyframes fade {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form {
            display: grid;
            gap: 10px;
            justify-item: flex-start;
        }

        .form input[type="text"],
        .form input[type="password"] {
            padding: 4px;
            outline: none;
            width: 100%;
            border: none;
            border-bottom: 1px solid #ccc;
        }

        .form label {
            display: inline-block;
            text-align: left;
            margin-bottom: 5px;
        }

        .submit {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 10px;
            transition: background-color 0.3s;
        }

        .form h2 {
            color: rgb(0, 229, 255);
            text-align: left;
        }

        .submit:hover {
            background-color: #45a049;
        }

        .form-icon {
            display: inline-block;
            margin-right: 5px;
            font-size: 10px;
        }
		   .h {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        .h a {
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
        
        .footer p {
            margin: 0;
        }
		
    </style>
</head>

<body>
  <div class="header">
        <a href='home2 (1).php'>HOME</a>
		<a href='mediaiwelcome (2).php'>LOGIN</a>
		<a href='contact_us (1).php'>CONTACT US</a>
		<a href='Aboutus (1).php'>ABOUT</a>
    </div>
    <form method="POST">
        <div class="container">
            <div class='form'>
                <img style="display: block; margin: 0 auto; padding: 4px; border-radius: 50%; width: 130px;" src="mi3.jpeg"><br><br>
                <a href='signup (1).php'>Don't have an account?</a>
                <h2><i class='fas fa-sign-in-alt form-icon'></i>LOGIN</h2>
                <label for="t1"><i class='fas fa-user form-icon'></i>ENTER USERNAME</label>
                <input type="text" name="text1" id="t1"><br><br>

                <label for="t2"><i class='fas fa-lock form-icon'></i>ENTER PASSWORD</label>
                <input type="password" name="pass1" id="t2"><br>

                <input class="submit" type="submit" value="LOGIN" name="but1">
                <a href='help (1).txt'>Help?</a>
				<a href='for.php'>Forgot password</a>
            </div>
        </div>
		<br><br>
    </form>
	    <div class="footer">
        <p>Copyright  &copy;2023 MediAI website. All rights are reserved.</p>
    </div>
	</body>
	</html>