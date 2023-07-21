<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0px;
            padding: 0;
            background-color:white;
        }
        .container {
            width: 400px;
            margin:0 auto;
			margin-top:10px;
            border-radius: 12px;
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            animation: fade 1s ease-in-out;
			border:1px solid #ccc;
        }
        .form {
            display: grid;
            gap: 10px;
            justify-items: flex-start;
        }
        .form input[type="text"],
        .form input[type="password"],
        .form input[type="date"] {
            margin-top: 10px;
            padding: 6px;
            outline: none;
            width: 100%;
            border: none;
            border-bottom: 1px solid #ccc;
        }
        .form fieldset {
            margin-top: 20px;
            border: none;
        }
        .form label {
            display: inline-block;
            text-align: left;
            margin-bottom: 5px;
        }
        .form .submit {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            margin-top: 20px;
        }
        .form h2 {
            color: rgb(0, 229, 255);
            text-align: left;
        }
        .form .submit:hover {
            background-color: #45a049;
        }
        
        .form .logo {
            display: block;
            margin: 0 auto;
            padding: 20px;
            border-radius: 50%;
            width: 130px;
        }
        .form a:link {
            text-decoration: none;
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
    </div>
    <div class="container">
        <form method="POST" class="form">
            <a href='Login (1).php'>Already have an account?</a>
            <img class="logo" src="mi3.jpeg" alt="Logo">
            <h2>SIGN UP</h2>
            <label for="t1">FIRST NAME</label>
            <input type="text" name="text1" id="t1" placeholder="Sarthak" required>
            <label for="t3">LAST NAME</label>
            <input type="text" name="text3" id="t3" placeholder="Pawar" required>
            <label for="pt1">PASSWORD</label>
            <input type="password" name="pass1" id="pt1" placeholder="Alphanumeric" required>
            <label for="d1">DOB</label>
            <input type="date" name="dt1" id="d1" required>
            <label for="t2">ADDRESS</label>
            <input type="text" name="text2" id="t2" placeholder="Street, City, State, Postal Code" required>
            <fieldset>
                <legend>SELECT GENDER</legend>
                <input type="radio" name="rad1" id="r1" value="male">
                <label for="r1">MALE</label>
                <input type="radio" name="rad1" id="r2" value="female">
                <label for="r2">FEMALE</label>
                <input type="radio" name="rad1" id="r3" value="other">
                <label for="r3">OTHER</label>
            </fieldset>
            <fieldset>
                <legend>INFO USED FOR SETTING PASSWORD</legend>
                <label for="f1">FAVOURITE COLOR</label>
                <input type="text" name="ft1" id="f1" placeholder="red" required><br><br>
                <label for="f2">FIRST SCHOOL</label>
                <input type="text" name="ft2" id="f2" placeholder="single word like lotus" required>
            </fieldset>
            <input class='submit' type="submit" name="but1" id="bt1" value="SIGN UP"><br>               
            <a href='help (1).txt'>Help?</a>
        </form>
    </div>
    <div class="footer">
        <p>Copyright  &copy;2023 MediAI website. All rights are reserved.</p>
    </div>
</body>
</html>

<?php
if (isset($_POST['but1'])) {
    $na1 = $_POST['text1'];
    $na2 = $_POST['text3'];
    $pa1 = $_POST['pass1'];
    $dat = $_POST['dt1'];  //date
    $add = $_POST['text2']; //add
    $g = $_POST['rad1'];
    $fc = $_POST['ft1'];
    $fs = $_POST['ft2'];
    include('con3 (1).php');     //connection 
    if ($a) {
        //  echo"done";
    } else {
        echo "not done";
    }
    $q = "INSERT INTO `user`(`uname`, `pass`, `lastna`, `dob`, `addr`, `gen`, `color`, `school`) 
    VALUES ('$na1','$pa1','$na2','$dat','$add','$g','$fc','$fs')";
    $res = mysqli_query($a, $q);
    if ($res) {
        echo "<script>
        alert('data inserted successfully');
        window.location.href='Login (1).php';</script>";
    } else {
        echo "<script>
        alert('username already exist');</script>";
    }
}
?>