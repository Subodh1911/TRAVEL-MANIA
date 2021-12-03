<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="css/icon.ico" type="image/x-icon">
    <title>Travel Mania | Contact Us</title>
    <style>
        body
        {
            background-image: url(images/3.jpg);
        }
        .heading
        {
            text-align: center;
            font-size: 2em;
            color: white;
        }
        .box1
        {
            width: 700px;
            height: 450px;
            margin: 10px;
            
        }
        .box{
            display: flex;
            margin: 20px;
            padding: 10px;
        }
        .mai{
           background-color: black ;
           color:white;
           border: 2px solid white;
           border-radius: 4px;
           width: 10rem;
           height: 2rem;
           margin: 0 0 50px 50px;
           font-size: 20px;
        }
        .mai:hover
       {
           cursor: pointer;
           color: black;
        background-color: gold;                }
        .hello
        {
            width: 75%;
            height: 25pt;
               left: 30%;
               color: black;
               background-color: white;
               padding: 4px;
               margin: 4px;
               border-radius: 10px;
        }
        .message
        {
            text-align: center;
            padding: 50px 150px 50px 0 ;
            font-size: 1.4em;
            color: white;
        }
        #query
        {
            height: 50pt;
        }
        .address
        {
            padding: 50px;
            font-size: 1.5em;
            color: white;
        }
        .location
        {
            width: 500px;
            height:300px;
            padding-left: 70px;
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
    </div>
    <section>
        <div class="heading">
            Contact Us
        </div>
        <div class="box">
            <div class="box1">
                <div class="address">
                    Address: National Institute of Technology Delhi Sector A-7, Institutional Area, Narela, Delhi – 110040
                </div>
                <div>
                    <iframe class="location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3494.8616138652105!2d77.10235421482875!3d28.842979782335245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b1923ada2e3%3A0x1169930518add2fe!2sNational%20Institute%20of%20Technology%20Delhi!5e0!3m2!1sen!2sin!4v1636352859588!5m2!1sen!2sin" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="box2">
            <div class="box1">
               
                <form action="mailto:201210028@nitdelhi.ac.in" method="post" enctype="text/plain">
                    <div class="message">
                        Message Us
                    </div>
                    <input type="text" placeholder="Name" name="Name " class="hello"><br>
                    <input type="email" placeholder="E-mail" name="Email id " class="hello"><br>
                    <input type="text" placeholder="Queries" name="Queries " class="hello" id="query"><br>
                    <button type="submit" class="mai">Submit</button>
                    <button type="reset" class="mai">Reset</button>
                </form>
                    
            </div>
        </div>
    </div>
    </section>
</body>
</html>