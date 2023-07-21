<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('Presentation1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
        }
        
        .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 50px;
            padding: 9px;
        }
        
        .top-container h1 {
            color: black;
        }
        
        #btn1,
        #btn2 {
            background-color: #f2f2f2;
            height: 35px;
        }
        
        #btn1:hover,
        #btn2:hover {
            background-color: red;
            color: white;
        }
        
        h1 {
            font-family: 'Courier New', Courier, monospace;
            color: #f2f2f2;
            margin: 5px;
            padding: 9px;
        }
        
        .top-container {
            background-color:white;
           display:inline-block;
           
            height: 50px;
            display: flex;
            
            justify-content: center;
            align-items: center;
            

        }
        
        .bottom-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            
            border: solid black 3px;
            height: 118px;
            margin: 65px;
            background-color: #f2f2f2;
           
        }
        
        .box {
            border: solid black 1px;
           
        }
        
        .button {
            background-color: black;
            color: white;
            text-align: center;
            height: 50px;
            width: 170px;
            border: none;
        }
        
        .button:hover {
            color:red;
            background-color:white;
        }
        
        #guide-button {
            position: relative;
            left: 1000px;
            top: 200px;
            font-size: 25px;
            height: 40px;
            width: 200px;
            background-color: white;
            color: white;
            box-shadow: 10px 10px 10px;
            border: none;
        }
        
        .logout-button {
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            position: relative;
            right: 200px;
            top: 219px;
        }
        
        .logout-button input {
            position: fixed;
            right: 10px;
            height: 40px;
            background-color: black;
            color: white;
            border: none;
        }
        
        footer {
            background-color: #f2f2f2;
            color: black;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        
        p {
            text-align: center;
        }
        
        /* Animation */
        @keyframes bgAnimation {
            0% {
                background-color: #f2f2f2;
            }
            50% {
                background-color: #f2f2f2;
            }
            100% {
                background-color: #f2f2f2;
            }
        }
        
        .animated-bg {
            animation: bgAnimation 5s infinite;
        }
        .top-right-link {
    margin-right: 10px;
}

.top-right-links {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    background-color: black;
    
}

.top-right-links a {
    text-decoration: none;
    color: orange;
    padding: 5px;
    margin-left: 10px;
    background-color: white;
    border: solid red 3px;
}

.top-right-links a:hover {
    color: red;
}



.top-right-links {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    background-color: black;
    border-top: 3px solid #39ff14; /* Neon color border */
}

.top-right-links a {
    text-decoration: none;
    color:black;
    padding: 5px;
    margin-left: 10px;
    background-color: white;
    border-radius:15px;
    font-size:25px;
    
    box-shadow: 20px,20px,4px,red;
}

.top-right-links a:hover {
    color: red;
}

 
.img1
{
    position: relative;
    left: -280px;

    
}
.img1 img 
{
    border-radius:20px;
}

h1 {
    font-family: cursive; /* Set font family to cursive */
}




        
    </style>

     <script>
    alert('where you want to use voice or not ');
        </script>
</head>
<body>

<div class="top-right-links">
    <div class="img1">
        <img src="mi3.jpeg" alt="" height="90px"; width="180px";>
        </div>

          <img src="pre.png" alt="cannot load image"height="40px";width="40px";>  
          <a href="precaution1.php">PRECAUTION</a>

            <img src="hos.png" alt="" height="40px"; width="40px";>
            <a href="hospital10.php">HOSPITAL</a>

            <img src="feedgvie.png" alt="" height="40px"; width="40px";>
            <a href="feedback.php">FEEDBACK</a>

            <img src="guide.png" alt="" height="40px"; width="40px";>
            <a href="guide.php">COMMANDS/GUIDE</a>
            
        
            
        
        </div>


    <form method="POST">
        <div class="top-container" style="position:relative;top:30px;">
            <h1>WELCOME TO MEDIAI</h1>
        </div>       
      

      
        <div class="logout-button" style="font-size:40px;" >
            <input type="submit" name="log" value="Logout" style="position: relative; right: 370px; top:-180px;
            width:90px;height:40px; border-radius:5px; color:wheat;font-size:22px; ">
        </div>
    </form>
 
    <footer>
        <p>&copy; 2023 Medi AI. All rights reserved.</p>
    </footer> 
</body>
</html>

<?php
include "newaicss.php";


if(isset($_POST['log']))
{
    
    echo "
    <script>
    window.location.href='logout.php';
    </script>
    
    
    ";

}


?>