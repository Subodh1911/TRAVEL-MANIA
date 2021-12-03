<?php
          if(isset($_POST['submit']))
          {
            include "config.php";
            $flight_id=mysqli_real_escape_string($conn,$_POST['flight_id']);
            $operator=mysqli_real_escape_string($conn,$_POST['operator']);
            $type=mysqli_real_escape_string($conn,$_POST['type']);
            $origin=mysqli_real_escape_string($conn,$_POST['origin']);
            $destination=mysqli_real_escape_string($conn,$_POST['destination']);
            $fare=mysqli_real_escape_string($conn,$_POST['fare']);
            $available_seats=mysqli_real_escape_string($conn,$_POST['available_seats']);
            $departure_time=mysqli_real_escape_string($conn,$_POST['departure_time']);
            $arrival_time=mysqli_real_escape_string($conn,$_POST['arrival_time']);
            
            $sql1="SELECT flight_id FROM flight WHERE flight_id='{$flight_id}';";
            $sql2="INSERT INTO flight ( operator, origin, destination, arrival, departure, type, fare)
                    VALUES ('{$operator}','{$origin}','{$destination}','{$arrival_time}', '{$departure_time}', '{$type}',{$fare});";
            $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");
            if(mysqli_num_rows($result1) > 0)
            {
              echo '<script>alert("Flight ALREADY EXIST")</script>';
            }
            else
            {
              echo '<script>alert("FLIGHT ADDED SCUCESSFULLY")</script>';
              if(mysqli_query($conn,$sql2)){
                header("Location: {$hostname}/admin_dashboard.php");
              }
            }
          }
        ?>