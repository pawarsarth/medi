<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         *{
			 margin:0;
			 padding:0;
		 }
       
        .submit {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .submit:hover {
            background-color: #45a049;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header a {
            text-decoration: none;
            margin-right: 20px;
            color: white;
        }
       
        .container {
            width: 90%;
            margin: 0 auto;
            margin-top: 10px;
            border-radius: 12px;
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #ccc;
        }

        .form {
            display: grid;
            gap: 10px;
            justify-items: flex-start;
        }

        .form input[type="text"] {
            margin-top: 10px;
            outline: none;
            width: 100%;
            border: none;
            border-bottom: 1px solid #ccc;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        p {
            text-align: center;
        }

        .form img {
            align: center;
        }

        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <header>
        <a href='home2 (1).php'>HOME</a>
        <a href='mediaiwelcome (2).php'>LOGIN</a>
        <a href='contact_us (1).php'>CONTACT US</a>
        <a href='Aboutus (1).php'>ABOUT</a>
    </header>
    <form method="POST">
        <div class="container">
            <div class='form'>
                <legend>
                    <img style="padding: 5px; width: 130px; border-radius: 8px; background-color: white;" src="mi3.jpeg">
                </legend>

                <label for="t2">FIRST SCHOOLNAME</label>
                <input type="text" name="text2" id="t2" placeholder="schoolname" required><br>

                <label for="t1">COLOR</label>
                <input type="text" name="text1" id="t1" placeholder="colorname" required><br>

                <input class='submit' type="submit" name="but1" id="bt1" value="CLICK HERE">
            </div>
        </div>
    </form>
    <footer>
        <p>Copyright &copy; 2023 Medi ai website. All rights reserved</p>
    </footer>
</body>
</html>

<?php

if(isset($_POST['but1']))
{
        $a=$_POST['text2'];     //schoolname;
        $b=$_POST['text1'];     //color
        $c=0;

        $con=mysqli_connect("localhost","root","","main3");

        if($con)
        {
           // echo"done";
        }

        $qe="SELECT * FROM `user`";

        $res=mysqli_query($con,$qe);
        while($row=mysqli_fetch_assoc($res))
        {
                if($a==$row['school'] && $b==$row['color'])
                {
                    $c=1; // checking whether record is present or not 
                    break;
                }
        }
        if($c==1)
        {
           // echo $c;
           
            echo"
            <script>
            alert('you can change the password');
            window.location.href='up.php?rn={$row['id']}';
            </script>
            
          
           
            ";
        }
        else
        {
            echo"
            <script>
            alert('please signup again');   
            window.location.href='signup (1).php';    
            </script>
            

            
            ";
        }
         //thing should be done on above program display alert for specific period of time  
         //  window.location.href='update.php'?rn=$row['id'];
        // <a href="update.php?rn=<?php echo $row['id'];
        //  <a href='update.php?rn=" . $row['id'] . "' target='_blank'>click here </a>
}

?>