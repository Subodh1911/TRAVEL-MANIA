<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Mania | Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="css/icon.ico" type="image/x-icon">
    <style>
        body{
            background-image: url(images/50.jpg);
            background-size: 100% 100%;
        }
        .box {
            height: 300px;
            width: 300px;
            margin: auto;
            margin-top: 60px;
            text-align: center;
            background-color: #C2FFF9;
            box-shadow: 10px rgb(96, 16, 172);
            border-radius: 30px;
        }

        .boxes {
            display: flex;
            margin-top: 30px;
        }

        .book {
            font-size: 1.3em;
            display: inline-block;
            margin-top: 30px;
            color: black;
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
            <a href=""> HI_<?php echo strtoupper($_SESSION["name"]); ?></a>
            <a href="logout.php">LOGOUT</a>
        </nav>
    </div>
    <p style="text-align: center;font-size: 200%;margin-top: 80px;color: rgb(226, 215, 215);"><strong><em>We are happy to have you with us!!</em></strong>😀
    </p>
    </div>
    <div class="boxes">
        <div class="box"><img src="images/20.jpg" alt=""height="200px" width="200px" style="margin-top: 10px; border-radius: 5px;"><a href="booked_buses.php" class="book">My Buses Bookings</a></div>
        <div class="box"><img src="images/22.jpg" alt=""height="200px" width="200px" style="margin-top: 10px; border-radius: 5px;"><a href="booked_hotels.php" class="book">My Hotel Bookings</a></div>
        <div class="box"><img src="images/21.jpg" alt=""height="200px" width="200px" style="margin-top: 10px; border-radius: 5px;"><a href="booked_flights.php" class="book">My Flight Bookings</a></div>
    </div>
    <p style="text-align: center;font-size: 200%;margin-top: 80px;color: rgb(226, 215, 215);">Want to have new Bookings !</p>
    <div style=" margin-left: 39%;margin-bottom: 30px;"><a href="services_book.php" style="color: rgb(49, 160, 73); background-color: whitesmoke;border-radius: 4px;">Click here to do a booking</a></div>
</body>

</html>