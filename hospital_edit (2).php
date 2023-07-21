<?php
include('Con3.php');
$id = $_GET['id'];
if (isset($_POST['update'])) {
 	$a=$_POST['hospital_name'];
	$b=$_POST['address'];
	$c=$_POST['services'];
	$d=$_POST['contact'];
	$e=$_POST['doctors'];
	$f=$_POST['diease'];
    $q = "UPDATE hospital SET hospital_name='$a', address='$b', services='$c', contact='$d', doctors='$e', diease='$f' WHERE id='$id'";
    $result = mysqli_query($a,$q);

    if ($result) {
        echo "<script>alert('Update data successfully');
		window.location.href='hospital_table.php'</script>";
    } else {
        echo "<script>alert('Data is not updated');</script>";
    }
}

$q = "SELECT * FROM hospital WHERE id='$id'";
$res = mysqli_query($A, $q);
while ($row = mysqli_fetch_assoc($res)) {
	$a=$row['hospital_name'];
	$b=$row['address'];
	$c=$row['services'];
	$d=$row['contact'];
	$e=$row['doctors'];
	$f=$row['diease'];
}
?>
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
	<center><input type="submit" name="update" ></center>
   </form>
  </div>
</html>