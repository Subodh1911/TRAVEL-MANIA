<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Mania | Payment page</title>
  <link rel="shortcut icon" href="css/icon.ico" type="image/x-icon">
</head>
<style>
  body {
    margin: 0;
    background-image: url(images/6.jpg);
    background-size: 100%;
  }

  .payment {
    opacity: 0.8;
    color: white;
    height: auto;
    width: auto;
    margin: 100px 30% auto 30%;
    padding: 30px 10px 50px 60px;
    background-color: black;
    border-radius: 10px;
  }

  .c_num {
    width: 50px;
  }

  .exp {
    width: 50px;
  }

  input[type=submit] {
    margin-left: 175px;
    padding: 5px 10px 5px 10px;
    border-radius: 7px;
    background-color: grey;
    color: white;
  }
  input[type=submit]:hover{
    color:black;
    background-color: gold;
    cursor: pointer;
  } 
</style>

<body>
  <?php
  if(isset($_POST['pay']))
  {
    include "config.php";
    $id=$_GET['id'];
    $name=mysqli_real_escape_string($conn,$_POST['holder']);
    $first=mysqli_real_escape_string($conn,$_POST['first']);
    $second=mysqli_real_escape_string($conn,$_POST['second']);
    $third=mysqli_real_escape_string($conn,$_POST['third']);
    $fourth=mysqli_real_escape_string($conn,$_POST['fourth']);
    $number=$first.$second.$third.$fourth;
    $sql1="SELECT * FROM hotel WHERE hotel_id={$id};";
    $result1=mysqli_query($conn,$sql1) or die("Query Unsucessful");
    $row1=mysqli_fetch_assoc($result1);
    // echo $_SESSION["username"];
    // echo $_SESSION["passengers"];
  
    $sql3 = "INSERT INTO hotel_booking (username,checkin, checkout, rooms,hotel_name,city,hotel_id)
    VALUES ('{$_SESSION["username"]}','{$_SESSION["checkin"]}','{$_SESSION["checkout"]}',{$_SESSION["rooms"]},'{$row1['hotel_name']}','{$row1['city']}',{$id})";
    $result3=mysqli_query($conn,$sql3) or die("Query Unsucessful");
    $sql2="SELECT hotelbooking_id FROM hotel_booking WHERE username='{$_SESSION["username"]}' AND hotel_id={$id} AND checkin='{$_SESSION["checkin"]}' AND checkout='{$_SESSION["checkout"]}'";
    $result2=mysqli_query($conn,$sql2) or die("Query Unsucessful");
    $row2=mysqli_fetch_assoc($result2);
    $sql = "INSERT INTO hotel_payment (card_number,holder_name, amount, hotelbooking_id)
    VALUES ('{$number}','{$name}',{$_SESSION["rooms"]}*{$row1['price']},{$row2['hotelbooking_id']})";
    $result=mysqli_query($conn,$sql) or die("Query Unsucessful");
    $sql4="UPDATE hotel SET available_room={$row1['available_room']}-{$_SESSION['rooms']}";
    $result4=mysqli_query($conn,$sql4) or die("Query Unsucessful");
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('PAYMENT SUCCESSFULLY');
    window.location.href='http://localhost/Dbms/dashboard.php';
    </script>");
    

  }
  ?>
  <h1 style="text-align: center;">Payment Page</h1>
  <div class="payment">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" >

      <label for="first">Card Number</label><br>
      <input type="text" class="c_num" maxlength="4" placeholder=" • • • •" name="first" required>-
      <input type="text" class="c_num" maxlength="4" placeholder=" • • • •" name="second" required>-
      <input type="text" class="c_num" maxlength="4" placeholder=" • • • •" name="third" required>-
      <input type="text" class="c_num" maxlength="4" placeholder=" • • • •" name="fourth" required>
      <br><br><br>

      <label for="name">Card Holder's Name</label><br>
      <input type="text" maxlength="20" placeholder="Name Surname" name="holder" required>

      <br><br><br>
      <div>
        <div style="display: inline;">
          <label for="expiry">Expiry Date : </label>
          <select name="exp_month" id="" required>
            <option value="" disabled selected>mm</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          <select name="exp_year" id="">
            <option value="" disabled selected>yy</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
          </select>

          <label for="cvv" style="padding-left: 30px;">CVV :</label>
          <input type="password" maxlength="3" minlength="3" placeholder=" • • •" required style="width: 40px;">
        </div>
        <br><br><br>
        <input name="pay" type="submit" class="submit" value="Pay Now">
    </form>
  </div>
</body>

</html>