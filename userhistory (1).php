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
		.sub{
			position:absolute;
			bottom:20px;
			background-color:aqua;
			color:white;
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
<h1>Login history INFO</h1></center>
<center>
<table>
<thead>
<tr>
<th>id</th>
<th>uid</th>
<th>date</th>
<th>logintime</th>
<th>logouttime</th>
<th>ipaddress</th>
<th>status</th>
</tr>
</thead>
<?php
include 'con3 (1).php';
$q = "SELECT * FROM loginhistory";
$res = mysqli_query($a, $q);
while ($row = mysqli_fetch_assoc($res)) {
	?>
	<tr>
	<td><?php echo $row['id'];?></td>
   <td><?php echo $row['uid']; ?></td>
   <td><?php echo $row['date'];?></td>
   <td><?php echo $row['logintime']; ?></td>
   <td><?php echo $row['logouttime'];?></td>
    <td><?php echo $row['ipaddress'];?></td>
	<td><?php echo $row['status'];?></td>
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
<!--<center><input class='sub' type='submit' name='Back' value='Back'></center>-->
</form>
<!--<footer>
<p>Copyright &copy; 2023 Medi AI website.All rights reserved</p>
</footer>-->
</body>
</html>
<?php

if(isset($_POST['Back'])){
	header('location:main (1).php');
}
?>	