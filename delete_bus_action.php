<?php
          if(isset($_POST['submit']))
          {
            include "config.php";
            $bus_id=mysqli_real_escape_string($conn,$_POST['bus_id']);
            
            $sql1="SELECT bus_id FROM bus WHERE bus_id='{$bus_id}';";
            $sql2="DELETE FROM bus WHERE bus_id = '{$bus_id}';";
            $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");
            if(mysqli_num_rows($result1) == 0)
            {
              echo '<script>alert("BUS NOT EXIST")</script>';
            }
            else
            {
              echo '<script>alert("BUS DELETED SCUCESSFULLY")</script>';
              if(mysqli_query($conn,$sql2)){
                header("Location: {$hostname}/admin_dashboard.php");
              }
            }
          }
        ?>