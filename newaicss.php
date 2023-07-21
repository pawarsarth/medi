<!DOCTYPE html>
<html>
<head>
  <title>voice</title>
</head>
<style>


.div1 {
  
  display: inline-block;
  position: relative;
  top: 20px;
  left: 590px;
  
  color: wheat;
  
}


button {
  background-color: black;
  color: wheat;
  height: 40px;
  width: 100px;
  font-size: 20px;
  position: relative;
  top: -20px;
  border: none;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: rgba(0, 0, 0, 0.527);
  color: red;
  cursor: pointer;
}
</style>

<body onload="ok()">
    

    <div class="div1" ><center>
  <button id="start-btn">Start</button></center>
  </div>

  <script>
    const recognition = new webkitSpeechRecognition() || new SpeechRecognition();
    recognition.continuous = true;
    recognition.lang = 'en-US';

    const startButton = document.getElementById('start-btn');

    startButton.addEventListener('click', () => {
      recognition.start();
      startButton.disabled = true;
      console.log('Voice assistant started');
    });

    recognition.onresult = (event) => {
      const command = event.results[event.results.length - 1][0].transcript.toLowerCase();
      console.log('Command:', command);

      // Add your commands and corresponding actions here
      if (command.includes('hello')) {
        saySomething('Hello');
      } else if (command.includes('goodbye')) {
        saySomething('Goodbye!');
      } else if (command.includes('open google')) {
        window.open('https://www.google.com', '_blank');
      }

      else if(command.includes('good afternoon')) {
        saySomething('Good afternoon');
      } else if(command.includes('good morning')) {
        saySomething('Good morning');
      } else if(command.includes('good evening')) {
        saySomething('Good evening');
      } else if(command.includes('how are you')) {
        saySomething('I am fine, and what about you?');
      } else if(command.includes('i am fine') || command.includes('fine')) {
        saySomething('Okay, good!');
      } else if(command.includes('hi')) {
        saySomething('Hello, welcome!');
      } else if(command.includes('please find hospitals')) {
        saySomething('Why not! Just wait for a few seconds while we load the page.');
        window.open('precaution1.php');
      } else if(command.includes('guide me') || command.includes('help me')) {
        saySomething('Why not! Here, I can search for precautions and hospitals for diseases. Would you like me to search?');
      } else if(command.includes('yes') || command.includes('definitely') || command.includes('why not')) {
        saySomething('Please wait. You need to speak the disease name, and later the information will be displayed.');
        window.open('precaution1.php');
      } else if(command.includes('tell me your limitations') || command.includes('limitations') || command.includes('show me limitations')) {
        saySomething('The limitations of this program are that it can only show hospitals present in Ahmednagar up to the year 2018.');
      } else if(command.includes('search hospital') || command.includes('search precaution') || command.includes('precaution')) {
        saySomething('Please wait and speak the disease name.');
      //  window.open('precaution1.php');
      window.location.href="precaution1.php";
      }
       else if(command.includes('logout') || command.includes('please logout')) {
        saySomething('Okay, we are doing process .');
        window.location.href = "logout.php";
      }  else if(command.includes('ok') || command.includes('understand')) {
        saySomething('Thanks!');
      } else if(command.includes('go back') || command.includes('previous tab')) {
        saySomething('Please wait.');
        window.open(firstlogin.php);
      } 
      
      else if(command.includes('find hospital') || command.includes('hospitals')|| command.includes('please find hospitals')) {
        saySomething('ok please speak disease name and relative hospital will get searched !');
        window.location.href="hospital10.php";
      } 
      
      else if (command.includes('feedback') || command.includes('open feedback') || command.includes('kindly open feedback')) {
    saySomething('OK, please fill out the form completely');
    window.open('feedback.php', '_self');
}



      else if(command.includes('commands') || command.includes('open guide')|| command.includes('show me commands')) {
        saySomething('ok! here are some commands please read carefully');
        window.location.href="guide.php";
      } 
      
      else {
        saySomething('Sorry, I cannot understand. You can read the chatbot manual for better communication.');
      }
    };

    function ok() {
      recognition.start();
    }

    recognition.onend = () => {
      startButton.disabled = false;
      console.log('Voice assistant stopped');
    };

    function saySomething(message) {
      const speech = new SpeechSynthesisUtterance(message);
      speech.lang = 'en-US';
      speechSynthesis.speak(speech);
    }
  </script>
</body>
</html>
