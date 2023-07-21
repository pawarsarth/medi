<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset
        {
            text-align: center;
            border:none;
            margin:100px;
            padding:30px;
            font-family: cursive;
            font-size: 30px;
        }
        body
        {
            background-color: #808080b9;
        }
        #bt1:hover
        {
            color: white;
            background-color: black;
        }
        input
        {
            height:40px;
        }
        img 
        {
            position: relative;
            
            top:0;
            animation:  im  5s linear  1  ;
        }
        @keyframes im {
            
            0%
            {
                
                top:-117px;
            }
            100%
            {
                
                transform : translateX(204px);
                transform: translateY(0px);
            }
        }
        body
        {
            animation: back 5s linear  1 ;
        }
        @keyframes back {

            
            
                0% 
            {
                background-color: black
            }
            50%
            {
                background-color: grey;
            }
            100%
            {
                background-color:rgb(196, 103, 103);
            }
         
            
            
        }
    </style>
</head>
<body>
    
    <form method="POST">
        <div class="div1">

            <fieldset >
                <legend style="text-align: center ; font-family: cursive; font-size: 25px;">
                    <img style="padding: 5px; height:100px; width: 190px; border-radius: 50px; background-color: white;
                    " src="mi4.jpeg"></legend>

                <label for="t2"> FIRST SCHOOLNAME</label>
                <input type="text" name="text2" id="t2" placeholder="schoolname"><br><br><br>

                <label for="t1"> COLOR  &nbsp; &nbsp;  </label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="text" name="text1" id="t1" placeholder="colorname"><br><br><br>


                <input type="submit" name="but1" id="bt1" value="CLICK HERE" style="height: 40px;">

<br><br>
            </fieldset>
            

        </div>




    </form>
</body>
</html>

<?php

if(isset($_POST['but1']))
{
        $a=$_POST['text2'];     //schoolname;
        $b=$_POST['text1'];     //color
        $c=0;

        $con=mysqli_connect("localhost","root","","uslogin");

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
            window.location.href='update.php?rn={$row['id']}';
            </script>
            
          
           
            ";
        }
        else
        {
            echo"
            <script>
            alert('please signup again');   
            window.location.href='signup.php';    
            </script>
            

            
            ";
        }
         //thing should be done on above program display alert for specific period of time  
         //  window.location.href='update.php'?rn=$row['id'];
        // <a href="update.php?rn=<?php echo $row['id'];
        //  <a href='update.php?rn=" . $row['id'] . "' target='_blank'>click here </a>
}

?>