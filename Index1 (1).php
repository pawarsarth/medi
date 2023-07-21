<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <title>MediAI Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .hero_area {
            background-color: #f9f9f9;
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

        .a_section{
			padding:20px;
			margin-left:80px;
		}
		.a_section img{
			
			width:500px;
		}
		.a_section.container  h1{
			font-size: 28px;
            margin-bottom: 20px;
		}
	   
		.but{
			background-color:black;
			color:white;
			padding:20px;
			heignt:50px;
			width:120px;
		}
        .info_section {
            background-color: #333;
            color: #fff;
            padding: 20px;
            margin-top: auto;
        }

        .info_section .info_top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .info_section .info_logo img {
            height: 50px;
        }

        .info_contact {
            margin-top: 10px;
            padding: 10px;
        }

        .info_contact a {
            display: block;
            color: #FFF;
            text-decoration: none;
            margin-bottom: 10px;
        }

        .info_contact a i {
            margin-right: 10px;
        }

        .info_contact h5 {
            color: white;
        }

        .info_contact a span {
            vertical-align: middle;
        }

        .info_links {
            margin-top: 10px;
            padding: 20px;
        }

        .info_contact h5 {
            color: #fff;
            margin-bottom: 10px;
        }

        .info_links .info_links_menu a {
            display: block;
            color: #fff;
            text-decoration: none;
            margin-bottom: 3px;
        }

        .info_links .info_links_menu a.active {
            font-weight: bold;
        }

        .box {
            margin: 10px;
            display: flex;
            gap: 250px;
        }

        .footer_section {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .footer_section p {
            margin: 0;
        }

.content_section {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #f9f9f9;
}

.content_section .container {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
}

.content_section img {
  width: 400px;
 margin-right:500px;
}

.content_section .content {
  max-width: 400px;
  margin-right: 20px; 
  color: #333;
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
                    <a href="mediAIwelcome (2).php">LOGIN</a>
                    <a href="contact_us (1).php">CONTACT US</a>
                    <a href="Aboutus (1).php">ABOUT</a>
                </nav>
            </div>
        </header>
    </div>
	<section>
	<section class='a_section'>
	<div class='container'>
	<img align='right' src='img1.jpeg'>
	<h1>Welcome to MediAI</h1>
	  <p>
         MediAI is an innovative platform that utilizes artificial intelligence and cutting-edge technology
        to revolutionize the healthcare industry. Our mission is to improve patient care, accelerate
        diagnostics, and enhance medical research through advanced AI algorithms and data analysis.
       </p>
	<form method='POST'>
	<input type='submit' class='but' name='but'  id='but' value='Contact Us'><br><br><br><br><br><br><br><br><br><br><br>
	</form>
	<?php
	if(isset($_POST['but'])){
		header('location:contact_us (1).php');
	}
	?>
	</section>
    <section class="content_section">
        <div class="container">
			<img src='img2.jpeg'>
            <div class="content">
		
                <p>
                    Whether you are a healthcare professional, researcher, or someone interested in the intersection of
                    AI and healthcare, MediAI provides a comprehensive suite of tools and resources to assist you in
                    achieving your goals.
                </p>
                <p>
                    Explore our website to learn more about our services, access valuable information, and stay updated
                    with the latest advancements in AI-driven healthcare.
                </p>
            </div>
        </div>
		<br><br><br><br>
    </section>
    <section class="info_section">
        <div class="container">
            <div class="info_top">
                <div class="info_logo">
                    <img src="mi3.jpeg" alt="MediAI Logo">
                </div>
            </div>
            <div class="info_bottom">
                <div class="row">
                    <div class='box'>
                        <div class="col-md-6 col-lg-3">
                            <div class="info_contact">
                                <h5>ADDRESS</h5>
                                <a href="">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>
                                        Location
                                    </span>
                                </a>
                                <a href="">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>
                                        Call +01 1234567890
                                    </span>
                                </a>
                                <a href="">
                                    <i class="fa fa-envelope"></i>
                                    <span>
                                        MediAI09@gmail.com
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="info_links">
                                <h5>USEFUL LINKS</h5>
                                <div class="info_links_menu">
                                    <a href="home2.php">Home</a>
                                    <a href="mediaiwelcome.php">Login</a>
                                    <a href="contact_us.php">Contact Us</a>
                                    <a href="About.php">About</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <footer class="footer_section">
        <div class="container">
            <p>CopyRight &copy;2023 MediAI website. All rights are reserved.</p>
        </div>
    </footer>
</body>

</html>