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
            height: 350px;
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
        <?php
        session_start();
        ?>
    <div class="header1">
        <img src="css/logo.png" class="tourImage" alt="logo">
        <h1 class="header">Travel Mania</h1>
        <nav class="navigation">
            <!-- <a href=""> HI </a> -->
            <a href="index.php">LOGOUT</a>
        </nav>
    </div>
    <p style="text-align: center;font-size: 200%;margin-top: 80px;color: rgb(226, 215, 215);"><strong><em>We are happy to have you with us!!</em></strong>😀
    </p>
    </div>
    <div class="boxes">
        <div class="box"><img src="images/20.jpg" alt=""height="200px" width="200px" style="margin-top: 10px; border-radius: 5px;"><a href="add_bus.php" class="book">Add Bus</a>
        <a href="delete_bus.php" class="book">Delete Bus</a><a href="edit_bus.php" class="book">Edit Bus</a>
        </div>
        <div class="box"><img src="images/22.jpg" alt=""height="200px" width="200px" style="margin-top: 10px; border-radius: 5px;"><a href="add_hotel.php" class="book">Add Hotel</a><a href="delete_hotel.php" class="book">Delete Hotel</a><a href="edit_hotel.php" class="book">Edit Hotel</a></div>
        <div class="box"><img src="images/21.jpg" alt=""height="200px" width="200px" style="margin-top: 10px; border-radius: 5px;"><a href="add_flight.php" class="book">Add Flight</a><a href="delete_flight.php" class="book">Delete Flight</a><a href="edit_flight.php" class="book">Edit Flight</a></div>
        <!-- <div class="box"><img src="images/23.jpg" alt=""height="200px" width="200px" style="margin-top: 10px; border-radius: 5px;"><a href="recent_package_booking.html" class="book">Add Package</a></div> -->
    </div>
</body>

</html>