<?php
include 'con3.php';
if(isset($_GET['id']))
{
$id=$_GET['id'];
$q="DELETE FROM hospital where id='$id'";
if(mysqli_query($A,$q)){
	echo"<script>alert('value deleted successfully');
	window.location.href='hospital_table.php';</script>";
	
}
else
{
	echo"<script>alert('value is not deleted ');<script>";
}
}?>