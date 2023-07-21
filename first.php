<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
        }
        .div1
        {
            display: inline-block;
    position: relative;
    top: 20px;
    left: 590px;
    color: wheat;
    left:30px;
            top:1px;

        }
        .nav{
            background-color: #008080;
            display: flex;
            flex-direction: row;
            width:1368px;
        }
        .div2{
            display: flex;
            flex-direction: row;
            align-self:center;  
            padding-left: 550px;
              
        }
        .div2 a 
        {
            display: inline-block;
            text-decoration: none;
            border: solid #479E4D  2px;
            color: wheat;
            background-color: black;
            border-radius: 15px;
            text-align: center;
            padding: 10px;
            padding-top: 23px;
            height:30px;
            margin:10px;
        }

        .change
        {
            height:500px;
            width: 700px; 
            
            
        }
        .change h2 
        {
            width: 1366px ;
            text-align: center;
            
            font-family: cursive;
            background-color: black;
            color: wheat;
            font-size: 30px;
            height:70px;
        }
        .lastdiv
        {
            display: flex;
            position:relative;
            top:42px;
            justify-content:space-evenly;
            align-items:center;
            border:solid red 3px;
            height:200px;
            background-color: #0392cf;

        }
        
    </style>

</head>
<body >
    <form action="" method="POST">
        <header class="nav" id="he1">
            <div class="div1">
            <img src="mi3.jpeg" alt="" height="90px"; width="180px";  style="position: relative;
    
    right: 0px;
    top: 3px; border-radius: 25px; ">
        </div>
        <div class="div2">
            <a href="precaution1.php"><center>PRECAUTION</center></a>
            <a href="hospital10.php"><center>HOSPITAL</center></a>
            <a href="feedback.php"><center>FEEDBACK</center></a>
            <a href="guide.php"><center>COMMANDS/GUIDE</center></a>
        </div>

    </header>


        
        <div class="change">
            <h2 class="h21">WELCOME TO MEDIAI</h2>
            <img src="voice1.jpeg" class="img1" alt="" style="height: 500px; width: 1366px;">
        </div>


      <!--  <div class="lastdiv">
            <div class="box1" style="border: solid red 3px; height:130px; width:170px;">
                <input type="submit" name="but1" value="PRECAUTION" id="bt1">
            </div>
            <div class="box2" style="border:  solid red 3px; height:130px; width:170px;">
                <input type="submit" name="but1" value="HOSPITALS" id="bt1">
            </div>
            <div class="box3" style="border: solid red 4px; height:130px; width:170px;">
                <input type="submit" name="but1" value="GUIDE/COMMANDS" id="bt1">
            </div>
            <div class="box4" style="border:solid rebeccapurple 4px; height:130px; width:170px;">
            <input type="submit" name="but1" value="LOGOUT" id="bt1">
            </div>
        </div>-->

    </form>
    <script>
  const images = [
    "ai.jpg",
    "voice1.jpeg",
    "ai2.webp",
    "ai3.jpg"
  ];

  let currentIndex = 0;
  const a = document.querySelector('.img1');

  function changeBackgroundImage() {
    a.src = images[currentIndex];
    currentIndex = (currentIndex + 1) % images.length;
  }

  setInterval(changeBackgroundImage, 4000);
</script>


  <!--  <script>
        var aa=prompt('where you want to use voice or not ');
        if(aa=='yes')
        {
            alert('hi');
        }else
        {
            alert('bye');
        }

        </script>-->

</body>
</html>


<?php
include"newaicss.php";
?>


