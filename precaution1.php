
<?php
error_reporting(E_ALL & ~E_WARNING);
session_start();

$_SESSION['rf'];
$_SESSION['loc'];
error_reporting(0);

?>



<!DOCTYPE html>
<html>
<head>
    <title>Voice Assistance - Disease Precautions</title>
    <style>
        body {
            
            
            font-family: Arial, sans-serif;
            text-align: center;
        }
        body::after
        {
            content: "";
            
            
            position:absolute;
            top:0;
            bottom:0;
            left:0;
            right:0;
            z-index: -1;
            opacity: 0.7;
          background-image:url(hospplus.png);
           background-position: center;
           background-repeat: no-repeat;
           height: 650px;
           width: 100%;  
        }
        h3 {
            background-color: black;
            color: wheat;
            font-size: 30px;
            height: 50px;
            line-height: 50px;
            margin: 0;
        }

        .search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        #search-input {
            width: 400px;
            padding: 10px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
        }

        .audio-microphone {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-image: url('audio-microphone.png'); /* Replace with the path to your audio/microphone image */
            background-size: cover;
            cursor: pointer;
        }

        .feedback-button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }

        .feedback-button:hover {
            background-color: #555;
        }

        .error-message {
            font-size: 24px;
            color: red;
            margin-top: 50px;
        }
    </style>

    <script>
        window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
        var recognition = new SpeechRecognition();

        recognition.interimResults = true;
        recognition.lang = 'en-US';

        recognition.addEventListener('result', function(event) {
            var transcript = Array.from(event.results)
                .map(function(result) {
                    return result[0];
                })
                .map(function(result) {
                    return result.transcript;
                })
                .join('');

            document.getElementById('search-input').value = transcript;
        });

        recognition.addEventListener('end', function() {
            document.getElementById('search-form').submit();
        });

        function startVoiceAssistant() {
            recognition.start();
        }



        window.addEventListener('DOMContentLoaded', function() {
    startVoiceAssistant();
});

function startVoiceAssistant() {
    recognition.start();
    // Change the background color of the microphone icon to indicate it's active
    document.querySelector('.audio-microphone').style.backgroundColor = 'red';
}

recognition.addEventListener('end', function() {
    document.getElementById('search-form').submit();
    // Reset the background color of the microphone icon when recognition ends
    document.querySelector('.audio-microphone').style.backgroundColor = '';
});





        
    </script>

</head>
<body>
    <form id="search-form" action="" method="POST">
        <center>
            <h3 style="background-color: black; color:wheat; font-size: 30px; height:50px;">Speak Diseases Name  </h3>
        <input type="text" id="search-input" name="q" placeholder="Ask a question..." />
      <!--  <span class="audio-microphone" onclick="startVoiceAssistant()"> <img src="microphone.jpeg" alt=""
        style="height: 40px; width: 40px; position: relative;; top: 16px;
        " ></span> &nbsp; &nbsp; &nbsp;
           <input type="submit" name="but1" id="bt1" value="back" >
           <input type="submit" name="feedback" value="Feedback" class="feedback-button">-->
    </center>
    </form>

    <?php
        // Precautions data for various diseases
      /*  $precautions = [
            'COVID-19' => 'Wear a mask, practice social distancing, wash hands frequently, get vaccinated.',
            'Flu' => 'Cover your mouth when coughing or sneezing, wash hands regularly, get vaccinated.',
            'Common Cold' => 'Wash hands frequently, avoid close contact with sick people, get enough rest.',
            'Malaria' => 'Use mosquito nets while sleeping, wear long sleeves and pants, use insect repellents.',
            'Dengue Fever' => 'Eliminate stagnant water, use mosquito nets and repellents, wear protective clothing.',
        ];*/

        // Process the search query
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


          //  echo "hello";
			$a=$_POST['q'];
        

			$con=mysqli_connect("localhost","root","","main3");
            

			if(!$con)
			{
				echo" not done";
			}
            $aa=strtolower($a);


            // Check for the voice command "go back"
            if($aa=="go back")
            {
                echo"<script>
                window.location.href='firstlogin.php';
                </script>";
               
            }

       
         /*   if (($aa=="google")||($aa=="search")||($aa=="findinfo")||($aa=="information")) 
            {

               // echo "echo 23";
                echo "<script>
                    var searchTerm = '" . $_SESSION['rf'] ."';
                    var url = 'https://www.google.com/search?q=' + encodeURIComponent(searchTerm);
                    window.open(url, '_blank');
                 
                </script>";
            }*/



            //location code
          /*  $ma=$_SESSION['loc'];

            if (($aa == "location") || ($aa == "search location")) {
                echo "<script>
                  
                   window.open('$ma','_blank');
                 
                </script>";
            }*/
            
          //  echo"$aa";

			//$q="SELECT  * FROM `hospital3` WHERE diease='$a'";
            $q1="SELECT  * FROM `dis` WHERE disease='$a'";
			
		//	$rest=mysqli_query($con,$q);

            $re=mysqli_query($con,$q1);
			//$count=mysqli_num_rows($rest);
            $count1=mysqli_num_rows($re);

          //  echo $count;
          //  echo $count1;

            
            
        //   echo $count;
           if($count1>0)
           {
			if($re)
			{
				//echo " done ";
				

			$row=mysqli_fetch_assoc($re);
           // $row1=mysqli_fetch_assoc($re);

			echo  "<br><br><br><center>".$row['precaution']."<center>";
            echo  "<br><br><br><center>".$row['medicine']."<center>";
            
//$_SESSION['rf'];
//$_SESSION['loc'];
$_SESSION['rf']=$row['precaution'];
$_SESSION['loc']=$row['medicine'];
          //  echo  "<br><br><br><center>".$row1['precaution']."<center>";
          //  echo  "<br><br><br><center>".$row1['medicine']."<center>";





          //  $_SESSION['rf']=$row['hospital_name'];
             //   $_SESSION['loc']=$row['location'];

            }
            
            
			else
			{
				echo"not done";
			}

        }

        
        

        else
        {
            echo '<p style="font-size: 30px; background-color: #333; color: red; text-align: center;" >No precaution and medicine are  found for the given disease <br> please pronounce  diseases name properly </p>';
            echo  "<br><br><br><center>".$_SESSION['rf']."<center>";
            echo  "<br><br><br><center>". $_SESSION['loc']."<center>";
        }
        
        
			




            /*
            $query = $_POST['q'];
            $query = strtolower($query); // Convert the query to lowercase for case-insensitive matching

            // Find matching diseases and display their precautions
            $matchingDiseases = [];
            foreach ($precautions as $disease => $precaution) {
                if (strpos(strtolower($disease), $query) !== false) {
                    $matchingDiseases[] = $disease;
                    echo '<h2>Precautions for ' . $disease . ':</h2>';
                    echo '<p>' . $precaution . '</p>';
                }
            }

            if (empty($matchingDiseases)) {
                echo '<p>No precautions found for the given query.</p>';
            }*/
        }
    ?>
</body>
</html>



<?php

if(isset($_POST['but1']))
{
    echo "
    
    <script>
    window.location.href='firstlogin.php';
    </script>
    
    ";
}


if (isset($_POST['feedback'])) {
    echo "
    <script>
        window.location.href = 'feedback.php';
    </script>
    ";
}

?>