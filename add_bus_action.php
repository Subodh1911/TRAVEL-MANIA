      <?php
          if(isset($_POST['submit']))
          {
            include "config.php";
            $operator=mysqli_real_escape_string($conn,$_POST['operator']);
            $type=mysqli_real_escape_string($conn,$_POST['type']);
            $origin=mysqli_real_escape_string($conn,$_POST['origin']);
            $destination=mysqli_real_escape_string($conn,$_POST['destination']);
            $fare=mysqli_real_escape_string($conn,$_POST['fare']);
            $departure_time=mysqli_real_escape_string($conn,$_POST['departure_time']);
            $arrival_time=mysqli_real_escape_string($conn,$_POST['arrival_time']);
            
            $sql1="SELECT bus_id FROM bus WHERE bus_id='{$bus_id}';";
            $sql2="INSERT INTO bus (operator, type, origin, destination, fare, arrival_time, departure_time)
                    VALUES ('{$operator}','{$type}','{$origin}','{$destination}',{$fare},'{$arrival_time}', '{$departure_time}');";
            $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");
            if(mysqli_num_rows($result1) > 0)
            {
              echo '<script>alert("BUS ALREADY EXIST")</script>';
            }
            else
            {
              echo '<script>alert("BUS ADDED SCUCESSFULLY")</script>';
              if(mysqli_query($conn,$sql2)){
                header("Location: {$hostname}/admin_dashboard.php");
              }
            }
          }
        ?>