<html>
 <form method="POST">
   <body bgcolor="lightblue">
   </body> 

    
 
   
   <label>Disease </label>
		
        <input type='text' id='name1' name='name1'  ><br><br>
		        <label>Symptoms</label>
         <input type='textarea' id='name2' name='name2' ><br><br>
		        <label>Precautions</label>
         <input type='textarea' id='name3' name='name3' ><br><br>
		       
 
<h3> <center> <input type='submit' name="submit" value='EDIT'onClick="myfunction()"/h3> </center>
</form>
</html>
<?PHP
include('con3.php');
if($a)
{
	
	$id=$_GET["id"];
	$b=$_POST['name1'];
	$c=$_POST['name2'];
	$d=$_POST['name3'];
	$q="update dis set disease='$b' where id='$id'";
	
	mysqli_query($B,$q);
	
	}


?>
</form>
<table border='1'>

 <thead>
    <h1> Disease table</h1>
    <th>id</th>
    <th> Disease name</th>
    <th>Symtoms</th>
	<th>Precautions</th>
</tr>
 <?php
    $q = "SELECT * from dis  ";
    $result = mysqli_query($a, $q);
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td>
                <?php echo $row['id'] ?>
            </td>
            <td>
                <?php echo $row['disease'] ?></td>
			<td>	 <?php echo $row['Symptoms'] ?></td>
			<td> <?php echo $row['precaution'] ?>
              
				</td>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>
