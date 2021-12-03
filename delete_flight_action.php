<?php
          if(isset($_POST['submit']))
          {
            include "config.php";
            $flight_id=mysqli_real_escape_string($conn,$_POST['flight_id']);
            
            $sql1="SELECT flight_id FROM flight WHERE flight_id='{$flight_id}';";
            $sql2="DELETE FROM flight WHERE flight_id = '{$flight_id}';";
            $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");
            if(mysqli_num_rows($result1) == 0)
            {
              echo '<script>alert("FLIGHT NOT EXIST")</script>';
            }
            else
            {
              echo '<script>alert("FLIGHT DELETED SCUCESSFULLY")</script>';
              if(mysqli_query($conn,$sql2)){
                header("Location: {$hostname}/admin_dashboard.php");
              }
            }
          }
        ?>