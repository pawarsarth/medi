<html>
<head>
<style>
*{
	margin:0;
	padding:0;
}
.sub{
	posistion:absolute;
	bottom:100px;
	padding:15px;
	width:100px;
	background-color:black;
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
<table border='1'>
    <thead>
    <h1>Disease Table</h1>
    <th>Disease Name</th>
	<th>Precaution</th>
    <th>Edit</th>
	<th>Delete</th>


    </tr>
    </thead>

    <?php
	include('con3 (1).php');

    $q = "SELECT * from dis  ";
    $result = mysqli_query($a, $q);
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            
            <td>
                <?php echo $row['disease'] ?></td>
			<td> <?php echo $row['precaution'] ?>
                <?php echo $row['edit'] ?>
				 <?php echo $row['delete'] ?>
				</td>
            
            <td>
                <a href="editdetail.php?id=<?php echo $row['id']; ?>">Edit</a>
			 <td> <a href="deletedetail.php?id=<?php echo $row['id']; ?>">Delete</a></td>


            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
<form method="POST">
<br><br><br> <label name='ADD_DATA'><center>ADD_DATA:    </label><input class='sub' type="submit" name="ADD" value="ADD"></center><br><br><br><br><br><br><br><br>
</form>
<?php
    if(isset($_POST['ADD']))
{
	echo"<script>
	window.location.href='disease.php';</script>";	
}
?> 
<footer>
<p>Copyright &copy; 2023 Medi AI website.All rights reserved</p>
</footer>
</body>
</html>
