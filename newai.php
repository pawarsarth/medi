
<?php
/*session_start();

echo  $_SESSION['username'];
$upper=strtoupper($_SESSION['username']);*/

?>

<!DOCTYPE html>
<html>
<head>
  <title>voice</title>
</head>
<style>
body {
  background-color: #00004d; /* Neon blue background color */
  font-family: Arial, sans-serif; /* Change font family if desired */
  margin: 0;
  padding: 0;
}

.div1 {
  border: solid 3px rgb(49, 45, 45);
  display: inline-block;
  position: relative;
  top: -200px;
  left: -0px;
  background-color: black;
  color: wheat;
  animation: neon-border 1.5s infinite alternate;
}

@keyframes neon-border {
  0% {
    box-shadow: 0 0 5px 5px rgb(57, 255, 20);
  }
  100% {
    box-shadow: 0 0 5px 5px rgb(57, 255, 20), 0 0 20px 10px rgb(57, 255, 20);
  }
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
    
<center>
    <div class="div1" >
  <h1>VOICE ASSISTANCE</h1>
<img src="robotimg.png" alt="" style="height: 80px; width: 80px;" >
  <button id="start-btn">Start</button></center>
  </div>

  const recognition = new webkitSpeechRecognition() || new SpeechRecognition();
recognition.continuous = true;
recognition.lang = 'en-US';

const startButton = document.getElementById('start-btn');

startButton.addEventListener('click', () => {
  recognition.start();
  startButton.disabled = true;
  console.log('Voice assistant started');
  recognition.onresult = (event) => {
    const command = event.results[event.results.length - 1][0].transcript.toLowerCase();
    console.log('Command:', command);

    // Add your commands and corresponding actions here
    // ...

    // Example: Greeting response
    if (command.includes('hello')) {
      saySomething('Hello <?php echo $upper; ?> ');
    }
  };
});

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