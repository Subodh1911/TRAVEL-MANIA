<html>
<head>
  <title>Travel Mania | Signup</title>
  <link rel="shortcut icon" href="css/icon.ico" type="image/x-icon">
</head>
<style>
  .rcorners1 {
    color: white;
    border-radius: 25px;
    padding: 20px;
    background-image: linear-gradient(to bottom right, black, white);
  }

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
    background-color: gold
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
    margin-left: 30%;
    margin-right: 30%;
    margin-top: 2.5%;
    padding-top: 10px;
    padding-bottom: 40px;
    padding-left: 40px;
    padding-right: 40px;
    border: 3px groove black;
    font-family: sans-serif;
    background: black;
    color: white;
    border-radius: 10px;
    background-size: 100%;
  }

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }

  li {
    float: left;
  }

  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  li a:hover {
    background-color: #4f0505;
  }

  .active {
    background-color: crimson;
  }

  input[type=text],
  select {
    width: 100%;
    padding: 10px;
    margin: 0;
    color: black;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=password],
  select {
    width: 100%;
    padding: 10px;
    margin: 0;
    color: black;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=email],
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

  input[type=tel],
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
    width: 100px;
    height: 50px;
    background-color: black;
    color: black;
    padding: 14px 20px;
    margin: 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #cf3b3b;
    width: 150px;
  }

  body {
    background-image: url(images/3.jpg);
    background-size: 100%;
  }
</style>

<body style="text-align:center">
<form action="add_flight_action.php" method="POST" autocomplete="off">
    <fieldset>
      <h2 style="font-family:Impact">ENTER FLIGHT DETAILS</h2>
      <br>
     

      <input type="text" name="operator" placeholder="Operator Full Name"><br><br>
      <input type="text" name="type" placeholder="Type of Flight"><br><br>
      <input type="text" name="origin" placeholder="Origin City"><br><br>
      <input type="text" name="destination" placeholder="Destination City"><br><br>
      <input type="number" name="fare" placeholder="Fare per passenger"><br><br>
      <!-- <input type="text" name="departure_time" placeholder="Origin City"><br><br>
      <input type="text" name="arrival_time" placeholder="Origin City"><br><br> -->
      <p>Departure Time
      <input type="time" name="departure_time">&nbsp;
      Arrival Time
      <input type="time" name="arrival_time"></p><br>

      <input style="color:white; font-family:Impact; font-size: 100%;" type="submit" class="button"
        name="submit" placeholder="submit">
        </form>
      <br>
    </fieldset>

 
</body>

</html>