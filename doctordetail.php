<html>
<head>
<style>
   . table {
	
		width:100%;
		height:100%;
        border-collapse: collapse;
      
    }

    th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
</style>
</head>
<body><center>
<h1>Doctors INFO</h1></center>
<center>
<table>
<thead>
<tr>
<th>doctorname</th>
<th>specialization</th>
<th>qualification</th>
<th>experience</th>
<th>hospital</th>
<th>availability</th>
<th>Inssurance_acceptance</th>
<th>delete</th>
<th>edit</th>
</tr>
</thead>
<?php
include 'con3.php';
$q = "SELECT * FROM doctor";
$res = mysqli_query($a, $q);
while ($row = mysqli_fetch_assoc($res)) {
	?>
	<tr>
	<td><?php echo $row['doctorname'];?></td>
   <td><?php echo $row['specialization']; ?></td>
   <td><?php echo $row['qualification'];?></td>
   <td><?php echo $row['experience']; ?></td>
   <td><?php echo $row['hospital'];?></td>
    <td><?php echo $row['availability'];?></td>
	 <td><?php echo $row['Inssurance_acceptance'];?></td>
  <td><a href="doctordelete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
   <td><a href="doctor_edit.php?id=<?php echo $row['id']; ?>">edit</a></td>
  </tr>
  <?php
}?>
</table>
</center>
</body>
<form method="POST">
<br><br><br> <label name='ADD_DATA'><center>ADD_DATA:</center></label>
<center><input type="submit" id ="Add" name="Add" value='ADD' ></center>
</form>
</body>
</html>
<?php
    if(isset($_POST['Add']))
{
		 header("location:hospital_form.php");
	
}
?>	