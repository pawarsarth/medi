<?php


$roll=$_GET['rn'];
//echo $roll;

$con=mysqli_connect("localhost","root","","main3");

$qe="SELECT * FROM `user` WHERE id='$roll'; ";

$res=mysqli_query($con,$qe);
$row=mysqli_fetch_assoc($res);

//$count=mysqli_num_rows($res);    //count number of row return from a given table 

/*if($count==1)
{
    //echo "done";      //checking whether row is return or not.
}
else
{
   // echo "not done ";
}*/



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
	*{
		margin:0;
		padding:0;
	}
    header{
		background-color:#333;
		color:white;
		padding:20px;
		text-align:center;
	}      
	header a{
	    margin-right:20px;
		color:white;
		text-decoration:none;
	}
	  .container {
            width: 400px;
            margin:0 auto;
			margin-top:10px;
            border-radius: 12px;
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
			border:1px solid #ccc;
        }
        .form {
            display: grid;
            gap: 10px;
            justify-items: flex-start;
        }
        .form input[type="text"],
        .form input[type="password"]{
            margin-top: 10px;
            padding: 6px;
            outline: none;
            width: 100%;
            border: none;
            border-bottom: 1px solid #ccc;
        } 
     footer{
		 background-color:#333;
		 color:white;
		 padding:20px;
		 bottom:0;
		 position:fixed;
		 width:100%;
	 }
	 footer p{
		 text-align:center;
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

    </style>
</head>
<body>
    <header>
	<a href='home2.php'>HOME</a>
	<a href='Login.php'>LOGIN</a>
	<a href ='contact_us.php'>CONTACT US</a>
	<a href='Aboutus.php'>ABOUT</a>
	</header>
<form method="POST">
 <div class="container">
 <div class='form'>
            <img style="padding: 20px; width: 130px; border-radius: 8px;
            " src="mi3.jpeg"></legend>
        <label for="t1">ENTER NEW USERNAME</label>
        <input type="text" name="text1" id="t1" value="<?php echo $row['uname']; ?>"><br><br>
        <label for="t1">ENTER NEW PASSWORD</label>
        <input type="password" name="text2" id="t2" value="<?php echo $row['pass']; ?>"><br><br>
        <input type="submit" value="click here" name="but1" class='submit'>
    </div>
	</div>
</form>
<footer>
<p>Copyright &copy; 2023 Medi AI.All right reserved</p>
</footer>
</body>
</html>

<?php
if(isset($_POST['but1']))
{
    $a=$_POST['text1'];
    $b=$_POST['text2'];
   // echo $roll;

    $qe1="UPDATE `user` SET `uname`='$a' ,`pass`='$b' WHERE `id`='$roll';";
    


    $res1=mysqli_query($con,$qe1);

    if($res1)
    {
        echo "<script>
        alert('DETAILS ARE UPDATED');
        window.location.href='Login (1).php';


        </script>";
    }
    else
    {
        echo "<script>
        
        alert('USERNAME IS ALREDY EXIST ');
        
        
        </script>";
    }
}


?>