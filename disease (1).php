<?php
include("con3.php");
if ($a) {
if(isset($_POST['submit']))
	
	{
    $b = $_POST['name1'];
    $d = $_POST['name3'];

   $q = "insert into dis (disease,precaution) values('$b','$d')";
    mysqli_query($a,$q);
	} 
	}
?>

<html>
<head>
<style>
body{
	 background-color: white;
}
input[type=textarea]
{
	width:300px;
	height:80px;
	padding:12px 20px;
	margin:8px 0;
	box-sizing:border-box;
}

.container {

            width: 400px;
            height: 450px;
          
             float: center;
            border-radius: 12px;
            background-color: #27f4af;
            text-align: center;
			overflow:visible;
        }
		.container h1{
	        color:#333;
        	font-size:22px;
		}
		    .sub {

            background-color: #1877f2;
            color: white;
            padding: 15px, 30px;
            font-size: 20px;
			border-radius:4px;
        }
		
    img
	{
		border-radius:50%;
		padding:5px;
		width:70px;
	}
	
</style>
</head>
<body>
 <div class="container">
	<form method='POST'>
	<img src="mediailogo1.jpeg">
<center>	<h1> SOLUTION   </h1>   </center><br>

    <center>
        <label>Disease Name</label>
		
        <input type='textarea' id='name1' name='name1'  ><br><br>
		       
		        <label>Precautions</label>
         <input type='textarea' id='name3' name='name3' ><br><br>
		  
        <input type='submit' class='sub' name='submit' value='Submit'>
        <input type='submit' class='sub'  name='submit' value='Delete'>
    </center>
	</div>
	 
</form>
</body>
</html>
