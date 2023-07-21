<html>

<head>
    <title>Contact Us</title>
    <style>
        body {
            background-color: #F2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: aqua;
        }
       .header_section {
            background-color: #333;
            color: #fff;
        }

        .header_section a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
        }

        .header_section a:hover {
            color: #aaa;
        }

        .header_section .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header_section .logo img {
            height: 50px;
        }
        .contact-button {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .contact-button:hover {
            background-color: #45a049;
        }

        h2 {
            text-align: center;
            top: 10px;
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

        .box {
            margin: 20px;
            display: flex;
            gap: 250px;
        }
		.sub{
			  position: absolute;
              bottom: 100px;
			  background-color:aqua;
			  padding:10px 20px;
			  border-radius:4px;
			  color:white;
		}
    </style>
</head>

<body>
   <div class="hero_area">
        <header class="header_section">
            <div class="container">
                <div class="logo">
                    <img src="mi3.jpeg" alt="MediAI Logo">
                </div>
                <nav>
                    <a href="home2 (1).php">HOME</a>
                    <a href="mediaiwelcome (2).php">LOGIN</a>
                    <a href="contact_us (1).php">CONTACT US</a>
                    <a href="Aboutus (1).php">ABOUT</a>
                </nav>
            </div>
        </header>
    <h1> Contact Us</h1>
    <h2><b> For any inquiries, contact us from the provided information below:</b></h2><br>
    <div class='box'>
        <div class='container'>
            <h3>Contanct info of Admin1</h3>
            <p><strong>E-mail:</strong>infowebsite@gmail.com</p>
            <p><strong>Phone:</strong>8421890567</p>
            <p><strong>Address:</strong>Street Lane,Berlin, Germany</p><br>
            <a href='mailto:infowebsite@gmail.com' class='contact-button'>Contact now</a><br><br>
        </div>
        <div class='container2'>
            <h3>Contanct info of Admin2</h3>
            <p><strong>E-mail:</strong>infowebsite10@gmail.com</p>
            <p><strong>Phone:</strong>7987345670</p>
            <p><strong>Address:</strong>London, UK</p><br>
            <a href='mailto:infowebsite10@gmail.com' class='contact-button'>Contact now</a><br>
        </div>
        <div class='container3'>
            <h3>Contanct info of Admin3</h3>
            <p><strong>E-mail:</strong>infowebsite01@gmail.com</p>
            <p><strong>Phone:</strong>9385956073</p>
            <p><strong>Address:</strong>Mumbai,India</p><br>
            <a href='mailto:infowebsite01@gmail.com' class='contact-button'>Contact now</a><br>
        </div>
    </div>
	<form method='POST'>
	<center><input class='sub' type='submit' name='Back' id='Back' value='Back'></center>
	</form>
	<?php
	if(isset($_POST['Back'])){
		header('location:Index1 (1).php');
	}
	?>
    <footer>
        <P>&copy; MediAI 2023.All rights reserved</p>
    </footer>
</body>
</html>