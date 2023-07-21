<html>
<head>
<style>
*{
	margin:0;
	padding:0;
}
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
		.submit{
			position:absolute;
			bottom:30px;
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
<h1>User INFO</h1></center>
<center>
<table>
<thead>
<tr>
<th>id</th>
<th>uname</th>
<th>pass</th>
<th>lastna</th>
<th>dob</th>
<th>addr</th>
<th>gen</th>
<th>color</th>
<th>school</th>
</tr>
</thead>
<?php
include 'con3 (1).php';
$q = "SELECT * FROM user";
$res = mysqli_query($a, $q);
while ($row = mysqli_fetch_assoc($res)) {
	?>
	<tr>
	<td><?php echo $row['id'];?></td>
   <td><?php echo $row['uname']; ?></td>
   <td><?php echo $row['pass'];?></td>
   <td><?php echo $row['lastna']; ?></td>
   <td><?php echo $row['dob'];?></td>
   <td><?php echo $row['addr'];?></td>
   <td><?php echo $row['gen'];?></td>
   <td><?php echo $row['color'];?></td>
   <td><?php echo $row['school'];?></td>
  </tr>
  <?php
}?>
</table>
</center>
<form method='POST'>
<center><input class='submit' type='submit' name='Back' value='Back'></center>
</form>
<?php
if(isset($_POST['Back'])){
	header('location:main (1).php');
}
?>
<footer>
<p>copyright &copy; 2023 Medi AI.All rights reserved</p> 
</footer>
</body>
</html>

