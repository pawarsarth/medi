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
		*{
			margin:0;
			padding:0;
		}
	    header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        header li{
			display:inline;
		}
        header a {
               text-decoration:none;
			   color:white;
			   margin-right:20px;
        }
		footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
			bottom:0;
			position:fixed;
			width:100%;
        }
        
        footer p {
            margin: 0;
        }
		.submit{
			background-color:black;
			color:white;
			width:100px;
            height:40px;
            font-size:20px;			
		}
</style>
</head>
<body>
<header>
<nav>
<ul>
<li><a href='user1 (1).php'>User Details</a></li>
<li><a href='hospital_table (2).php'>Hospital Details</a></li>
<li><a href='diseasedetailadd (1).php'>Disease Details</a></li>
<li><a href='userhistory (1).php'>Login History Details </a></li>
<li><a href='log1 (1).php'>Logout</a></li>
</ul>
</nav>
</header>
<center>
<h1>HOSPITALS INFO</h1></center>
<center>
<table border=1>
<thead>
<tr>
<th>hospital_name</th>
<th>address</th>
<th>services</th>
<th>contact</th>
<th>doctors</th>
<th>diease</th>
<th>delete</th>
<th>edit</th>
</tr>
</thead>
<?php
include 'con3 (1).php';
$q = "SELECT * FROM hospital3";
$res = mysqli_query($a, $q);
while ($row = mysqli_fetch_assoc($res)) {
	?>
	<tr>
	<td><?php echo $row['hospital_name'];?></td>
   
   <td><?php echo $row['services'];?></td>
   <td><?php echo $row['contact']; ?></td>
   <td><?php echo $row['doctors'];?></td>
    <td><?php echo $row['diease'];?></td>
  <td><a href="hospital_delete (2).php?id=<?php echo $row['id']; ?>">Delete</a></td>
   <td><a href="hospital_edit (2).php?id=<?php echo $row['id']; ?>">edit</a></td>
  </tr>
  <?php
}
?>
</table>
</center>
</body>
</html>

<html>
<body>
<form method="POST">
<br><br><br> <label name='ADD_DATA'><center>ADD_DATA:  </label><input class='submit' type="submit" name="ADD" value="ADD"></center><br>
</form>
</body>
<footer>
<p>Copyright &copy; 2023 Medi AI website.All rights reserved</p>
</footer>
</html>
<?php
    if(isset($_POST['ADD']))
{
	echo"<script>
	window.location.href='hospital_form (1).php';</script>";	
}

	