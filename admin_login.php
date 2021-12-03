<html>

<head>
  <title>Travel Mania | Login</title>
  <link rel="shortcut icon" href="css/icon.ico" type="image/x-icon">
  <style>
    .button {
      display: inline-block;
      padding: 10px 15px;
      font-size: 10px;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      outline: none;
      color: #fff;
      background-color: #000000;
      border: none;
      border-radius: 15px;

    }

    .button:hover {
      background-color: gold;
    }

    .button:active {
      background-color: #0f2e5cef;
      box-shadow: 0 5px #666;
      transform: translateY(4px);
    }


    form {
      font-size: 20px;
      font-family: Impact;
    }

    input {
      font-size: 20px;
      font-family: Impact;
    }

    option {
      font-size: 20px;
      font-family: Impact;
    }

    select {
      font-size: 20px;
      font-family: Impact;
    }

    fieldset {
      opacity: 0.8;
       filter: alpha(opacity=50); 
      display: block;
      margin-left: 500px;
      margin-right: 500px;
      margin-top: 92px;
      margin-bottom: 50px;
      padding-top: 4px;
      padding-bottom: 40px;
      padding-left: 40px;
      padding-right: 40px;
      border: 3px groove black;
      font-family: sans-serif;
      background: black;
      color: white;
      border-radius: 10px;
    }

    ul {
      opacity: 0.5;
      position: relative;
      list-style-type: none;
      top: 0px;
      background-color: #333;

    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;

    }

    li a:hover {
      color: white;
      background-color: black;
    }

    .active {
      background-color: #7F0914;
    }

    input[type=text],
    select {
      width: 100%;
      padding: 10px;
      margin: 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      color: black;
    }


    input[type=password],
    select {
      width: 100%;
      padding: 10px;
      margin: 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }


    input[type=number],
    select {
      width: 100%;
      padding: 10px;
      margin: 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {

      width: 120px;
      height: 50px;
      background-color: black;
      color: black;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: gold;
      width: 200px;
    }

    #bo {
      background: url(images/3.jpg);
      background-size: 100%;
    }

    #a {
      text-align: center;
      font-family: Agency FB;
      font-size: 30px;
    }
  </style>
</head>

<body id="bo">
  <div>
    <form id="a" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
      <fieldset id="f">
        <legend></legend>
        <h1 style="font-family:Impact">ADMIN LOGIN</h1>
        <input type="text" placeholder="Username" name="username" required><br><br>
        <input type="password" placeholder="Password" name="password" required><br><br>
        <!-- <p style="font-size: 50%;"><a href="#" style="text-decoration: none; color: white">Forgot Password?</a></p> -->
        <input style="color:white; font-family:Impact; font-size: 100%;" type="submit" class="button"
        name="submit" placeholder="submit">
      </fieldset>
    </form>
    <?php
if(isset($_POST['submit']))
{
    include "config.php";
    if(empty($_POST['username']) || empty($_POST['password']))
    {
        echo '<div class="alert alert-danger">All Fields must be entered.</div>';
        die();
    }
    else
    {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = md5($_POST['password']);

        $sql = "SELECT ID, user, name FROM admin, user WHERE user = '{$username}' AND username='{$username}' AND password = '{$password}'";

        $result = mysqli_query($conn, $sql) or die("Query Failed.");
        if(mysqli_num_rows($result) > 0)
        {

            while($row = mysqli_fetch_assoc($result))
            {
              session_start();
              $_SESSION["username"] = $row['username'];
              $_SESSION["ID"] = $row['ID'];
              $_SESSION["name"]=$row['name'];

              header("Location: {$hostname}/admin_dashboard.php");
            }
        }
        else
        {
            echo '<script>alert("USERNAME AND PASSWORD DOES NOT MATCH")</script>';
        }
        
    }
}
?>
  </div>
</body>

</html>