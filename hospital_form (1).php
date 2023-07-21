<html>
<head>
  <style>
    .container {

            width: 30%;
            height:auto;
            margin:50px 35%;
            border-radius: 12px;
            background-color: skyblue;
            text-align: center;
        }	
	
	
		
   </style>
</head>   

  <div class="container">
	<form method="POST">
<h1><center>HOSPITAL ENTRY FORM</center></h1><form>
	<label name='hospital_name'><center>hospital_name:</center></label>
	<center><textarea id='hospital_id' name='hospital_name' row=8 column=12 ></textarea></center><br></br>
	<label name='address'><center>address:</center></label>
	<center><textarea id='address_id' name='address' row=6 column=10 ></textarea></center><br></br>
	<label name='services'><center>services:</center></label>
	<center><textarea id='services_id' name='services' row=6 column=10 ></textarea></center><br></br>
    <label name='contact'><center>contact:</center></label>
    <center><input type='number' id='contact_id' name='contact' ></center><br></br>
    <label name='doctors'><center>doctors:</center></label>
    <center><input type='text' id='doctors_id' name='doctors' ></center><br></br>
		<label name='diease'><center>diease:</center></label>
	<center><textarea id='diease_id' name='diease' row=6 column=10 ></textarea></center><br></br>
	<center><input type="submit" name="submit" ></center>
   </form>
  </div>
</html>
<?php
include 'con3 (1).php';
    if(isset($_POST['submit']))
{
	$a=$_POST['hospital_name'];
	$b=$_POST['address'];
	$c=$_POST['services'];
	$d=$_POST['contact'];
	$e=$_POST['doctors'];
	$f=$_POST['diease'];
	$q = "INSERT INTO  hospital (hospital_name,address,services,contact,doctors,diease) VALUES('$a ','$b','$c','$d','$e','$f')";
$s=(mysqli_query($A,$q));
if($s)
{
	 echo "<script>alert('Value is inserted successfully');
			window.location.href='hospital_table (2).php';</script>";
}
else{
	echo'<script>alert("value is not inserted successfully");</script>';
}
}
?>
