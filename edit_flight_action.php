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
            $sql2="update flight set operator='{$operator}', type='{$type}',origin = '{$origin}', destination='{$destination}', fare ='{$fare}', arrival= '{$arrival_time}', departure='{$departure_time}' where flight_id='{$flight_id}'; ";
            $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");
            if(mysqli_num_rows($result1) == 0)
            {
              echo '<script>alert("BUS NOT EXIST")</script>';
            }
            else
            {
              echo '<script>alert("BUS UPDATED SCUCESSFULLY")</script>';
              if(mysqli_query($conn,$sql2)){
                header("Location: {$hostname}/admin_dashboard.php");
              }
            }
          }
        ?>