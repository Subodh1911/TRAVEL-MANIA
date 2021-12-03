<?php
          if(isset($_POST['submit']))
          {
            include "config.php";
            $hotel=mysqli_real_escape_string($conn,$_POST['hotel']);
            
            $sql1="SELECT hotel_name FROM hotel WHERE hotel_name='{$hotel}';";
            $sql2="DELETE FROM hotel WHERE hotel_name = '{$hotel}';";
            $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");
            if(mysqli_num_rows($result1) == 0)
            {
              echo '<script>alert("HOTEL NOT EXIST")</script>';
            }
            else
            {
              echo '<script>alert("HOTEL DELETED SCUCESSFULLY")</script>';
              if(mysqli_query($conn,$sql2)){
                header("Location: {$hostname}/admin_dashboard.php");
              }
            }
          }
        ?>