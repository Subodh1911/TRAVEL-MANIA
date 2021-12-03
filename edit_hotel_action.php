<?php
          if(isset($_POST['submit']))
          {
            include "config.php";
            if($_POST['wifi']) { $wifi = $_POST['wifi']; } else { $wifi = "no"; }
            if($_POST['parking']) { $parking = $_POST['parking']; } else { $parking = "no"; } 
            if($_POST['laundary']) { $laundary = $_POST['laundary']; } else { $laundary = "no"; } 
            if($_POST['restaurant']) { $restaurant = $_POST['restaurant']; } else { $restaurant = "no"; }  
            $hotel_name=mysqli_real_escape_string($conn,$_POST['hotel_name']);
            $city=mysqli_real_escape_string($conn,$_POST['city']);
            $locality=mysqli_real_escape_string($conn,$_POST['locality']);
            $stars=mysqli_real_escape_string($conn,$_POST['stars']);
            $price=mysqli_real_escape_string($conn,$_POST['price']);
            
            $sql1="SELECT hotel_name FROM hotel WHERE hotel_name='{$hotel_name}';";
            $sql2="update hotel set city = '{$city}',locality= '{$locality}',stars = {$stars},price = {$price},wifi = '{$wifi}',parking =  '{$parking}',restaurant='{$restaurant}',laundary='{$laundary}' where hotel_name='{$hotel_name}';";
            $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");
            if(mysqli_num_rows($result1) == 0)
            {
              echo '<script>alert("HOTEL NOT EXIST")</script>';
            }
            else
            {
              echo '<script>alert("HOTEL UPDATED SCUCESSFULLY")</script>';
              if(mysqli_query($conn,$sql2)){
                header("Location: {$hostname}/admin_dashboard.php");
              }
            }
          }
        ?>