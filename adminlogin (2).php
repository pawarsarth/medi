<?php   
include("con3 (1).php");
if(isset($_POST['login'])) {
    $res = mysqli_query($a,
    "SELECT * FROM admin WHERE adminname='"
    . $_POST["username"] . "' AND
    password='" . $_POST["pwd"] . "'    ");
    $num = mysqli_num_rows($res);
    if($num > 0) {
        $row = mysqli_fetch_assoc($res);
        header("location:main (1).php");
    }
	else
	{
		header("mediaiwelcome (2).php");
	}
}
?>
<!doctype html>
<head>
<title>Admin login</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<style>
 body {
            font-family: Arial, sans-serif;
            margin: 0px;
            padding: 0;
            background-color: #f2f2f2;
        }
 .container {
            width: 400px;
            height: 220px;
            position: absolute;
            top: 35%;
            left: 45%;
            transform: translate(-35%, -45%);
            border-radius: 12px;
            text-align: center;
        }
    .form {
            background-color: white;
            padding: 10px;
            border-radius: 8px;
        }

    .form input {
            margin-top: 30px;
            padding: 10px;
			outline:none;
            width: 75%;
		    border:none;
			border-bottom:1px solid #ccc;
        }
	.submit{
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
		 .form h2{
			 color: rgb(0, 229, 255);
			 text-align:left;
		}
		.logo{
	        margin-bottom:40px;
			margin-left:-23px;
		    width:150px;
		    height:100px;
		    border-radius:40%;
			position:absolute;
			margin-top:-30px;
		    box-sizing:border-box;
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
 
       footer{
			background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
			position:fixed;
			bottom:0;
			width:100%;
         
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
		<div class='container'>
		<div class='form'>
		<img src='mi3.jpeg' class='logo'>
		<h2>Login</h2>
		<form method='POST'>
		<label></label>
		<input  type='text' id='an' name='username' placeholder='Admin name'required>
		<label></label>
		<input type='password' id='pw' name='pwd' placeholder='Password'required>
		<input class ='submit' type= 'submit'id ='submit' name='login' value='Login'><br><br>
		</div>
		</div>
		</form>
		<footer>
	  <p>Copyright &copy;2023 MediAI website. All rights are reserved.</p>
	</footer>
		</body>
		</html>