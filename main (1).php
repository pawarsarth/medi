<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        .logo {
            width: 130px;
            display: inline-block;
        }

        .menu-icon {
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .horizontal-bar {
                flex-direction: row-reverse;
            }

            .nav {
                display: none;
            }
        }

        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: white;
        }

        .nav {
            display: none;
            background-color: #8ed5d9;
            color: white;
            padding: 20px;
            font-size: 20px;
            width: 15%;
            position: fixed;
            left:0;
            border-radius: 8px;
        }

        img {
            display: block;
            margin: 0 auto;
            border-radius: 8px;
            width: 100px;
        }

        .nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .nav li {
            display: block;
            margin-bottom: 10px;
        }

        .nav a {
            color: white;
            text-decoration: none;
        }

        .cont {
            background-color: black;
            height: 3vh;
            padding: 20px;
            color: white;
        }

       .cont h2 {
            text-align: center;
        }

        .footer_section {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
           .container{
			     text-align:center;
				 
		   }
		   .container img{
			   width:200px;
		   }
        .footer_section p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="cont">
        <i class="fas fa-bars menu-icon"></i>
        <h2>Medi AI</h2>
    </div>

    <div class="nav">
        <img src="admin.jpeg" class="logo">
        <h2>Admin</h2><br>
        <ul>
            <li><a href="user1 (1).php">User Details</a></li>
            <li><a href="hospital_table (2).php">Hospital Details</a></li>
            <li><a href="diseasedetailadd (1).php">Disease Details</a></li>
            <li><a href="userhistory (1).php">User Login History</a></li>
            <li><a href="log1.php">Logout</a></li>
        </ul>
    </div>
	<br><br><br>
    <div class='container'>
	<img src='admin.jpeg'>
	<h2>Welcome Admin</h2>
	</div>
    <footer class="footer_section">
        <div class="container">
            <p>CopyRight &copy;2023 MediAI website. All rights are reserved.</p>
        </div>
    </footer>

    <script>
        var menuIcon = document.querySelector('.menu-icon');
        var nav = document.querySelector('.nav');

        menuIcon.addEventListener('click', function () {
            if (nav.style.display === 'none') {
                nav.style.display = 'block';
            } else {
                nav.style.display = 'none';
            }
        });
    </script>
</body>
</html>