<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Mania | Services</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="css/icon.ico" type="image/x-icon">
    <style>
        body{
            background-image: url(images/7.jpg);
            background-size: 100% 100%;
        }
        .box {
            height: 300px;
            width: 300px;
            margin: auto;
            margin-top: 60px;
            text-align: center;
            background-color: rgb(172, 146, 194);
            box-shadow: 10px rgb(96, 16, 172);
            border-radius: 30px;
        }

        .boxes {
            display: flex;
            margin-top: 30px;
        }

        .book {
            font-size: 1.5em;
            display: inline-block;
            margin-top: 30px;
        }

        .logout {
            font-size: 1.4em;
        }

        .admin-logout {
            position: absolute;
            right: 50px;
        }
    </style>
</head>

<body>
    <div class="header1">
        <img src="css/logo.png" class="tourImage" alt="logo">
        <h1 class="header">Travel Mania</h1>
        <nav class="navigation">
            <a href="index.php">HOME</a>
            <a href="about_us.php">ABOUT US</a>
            <a href="services.php">SERVICES</a>
            <a href="contactus.php">CONTACT US</a>
        <a href="admin_login.php">ADMIN LOGIN</a>
            <a href="login_page.php">LOGIN</a>
        </nav>
    </div>
    <p style="text-align: center;font-size: 200%;margin-top: 80px;color: white;"><strong><em>Our greatest expertise is in the regions we visit with our tours as well as most of India, where we live. We are also happy to assist other travel needs</em></strong>
    </p>
    </div>
    <div class="boxes">
        <div class="box"><img src="images/20.jpg" alt=""height="200px" width="200px" style="margin-top: 10px; border-radius: 5px;"><a href="login_page.php" class="book">Buses Bookings</a></div>
        <div class="box"><img src="images/22.jpg" alt=""height="200px" width="200px" style="margin-top: 10px; border-radius: 5px;"><a href="login_page.php" class="book">Hotel Bookings</a></div>
        <div class="box"><img src="images/21.jpg" alt=""height="200px" width="200px" style="margin-top: 10px; border-radius: 5px;"><a href="login_page.php" class="book">Flight Bookings</a></div>
    </div>
</body>

</html>