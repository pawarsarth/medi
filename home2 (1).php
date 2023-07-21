<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <title>MediAI Website - Home</title>
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

        .content_section {
            padding: 40px;
            text-align: center;
        }

        .content_section h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .content_section p {
            margin-bottom: 15px;
        }

        .content_section .cta_button {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .content_section .cta_button:hover {
            background-color: #555;
        }
       .content_section img{
		   width:500px;
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

        .info_links .info_links_menu a {
            text-align: center;
            display: block;
            color: #fff;
            text-decoration: none;
            margin-bottom: 3px;
        }

        .info_links .info_links_menu a.active {
            font-weight: bold;
        }

        .info_links {
            margin-top: 6px;
            padding: 10px;
            text-align: center;
        }

        .footer_section {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
			bottom:0;
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
    <section class="content_section">
        <div class="container">
		<img align='right' src='mi3.jpeg'>
            <h2>Welcome to Medi AI Home Page</h2>
            <p>
                MediAI is an innovative platform that utilizes artificial intelligence and cutting-edge technology
                to revolutionize the healthcare industry. Our mission is to improve patient care, accelerate
                diagnostics, and enhance medical research through advanced AI algorithms and data analysis.
            </p>
            <p>
                Whether you are a healthcare professional, researcher, or someone interested in the intersection of
                AI and healthcare, MediAI provides a comprehensive suite of tools and resources to assist you in
                achieving your goals.
            </p>
            <p>
                Explore our website to learn more about our services, access valuable information, and stay updated
                with the latest advancements in AI-driven healthcare.
            </p>
            <a href="Index1 (1).php" class="cta_button">Back</a>
        </div>
    </section>
    <section class="info_section">
        <div class="container">
            <div class="info_top">
                <div class="info_logo">
                    <img src="mi3.jpeg" alt="MediAI Logo">
                </div>
            </div>
            <div class="info_links">
                <h5>USEFUL LINKS</h5>
                <div class="info_links_menu">
                    <a href="home2(1).php">Home</a>
                    <a href="mediaiwelcome(2).php">Login</a>
                    <a href="contact_us(1).php">Contact Us</a>
                    <a href="Aboutus (1).php">About</a>
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