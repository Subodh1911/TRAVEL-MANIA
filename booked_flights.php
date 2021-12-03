<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Mania | Booked Flights</title>
    <link rel="shortcut icon" href="css/icon.ico" type="image/x-icon">
    <style>
        body{
    font:16px arial;
    margin: 0;
    padding: 0;
    background: #d1d1d1;
}
#main-content{
     padding: 25px;
    min-height: 400px;
}
#main-content table{
    width: 100%;
    background-color: #555;
    margin: 0 0 20px;
}
#main-content table th{
    color: #fff;
    background-color: #333;
    text-transform: uppercase;
}
#main-content table th:last-child{
    width: 150px;
}
#main-content table td{
    background-color: #fff;
}
#main-content table td a{
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    padding: 3px 7px;
    color: #fff;
    background-color: #e67e22;
    text-decoration: none;
    border-radius: 3px;
}
#main-content table td a:nth-child(2){
    background-color: #e74c3c;
    margin: 0 0 0 5px;
}
#main-content h2{
    margin: 0 0 10px;
    text-transform: capitalize;
    text-align: center;
}
    </style>
</head>
<body>
    <div id="main-content">
        <h2>BOOKED FLIGHTS</h2>
        <?php
        include "config.php";
        $sql="SELECT * FROM flight_booking WHERE username='{$_SESSION["username"]}'";
        $result=mysqli_query($conn,$sql) or die("Query Unsucessful");
    
        if(mysqli_num_rows($result) > 0)
        {
        ?>
        <table cellpadding="7px">
            <thead>
                <th>BOOKING Id</th>
                <th>OPERATOR</th>
                <th>ORIGIN</th>
                <th>DESTINATION</th>
                <th>DATE</th>
                <th>ARRIVAL TIME</th>
                <th>PAYMENT ID</th>
                <th>Action</th>
            </thead>
            <tbody>
            <?php
                while($row=mysqli_fetch_assoc($result))
                {
                    include "config.php";
                    $sql1="SELECT operator,arrival FROM flight WHERE flight_id={$row['Flight_id']}";
                    $result1=mysqli_query($conn,$sql1);
                    $row1=mysqli_fetch_assoc($result1);
                    $sql2="SELECT transcation_id FROM flight_payment WHERE flightbooking_id={$row['flightbooking_id']}";
                    $result2=mysqli_query($conn,$sql2);
                    $row2=mysqli_fetch_assoc($result2);
                ?>
                <tr>
                    <td><?php echo $row['flightbooking_id']?></td>
                    <td><?php echo $row1['operator']?></td>
                    <td><?php echo $row['origin']?></td>
                    <td><?php echo $row['destination']?></td>
                    <td><?php echo $row['date']?></td>
                    <td><?php echo $row1['arrival']?></td>
                    <td><?php echo $row2['transcation_id']?></td>
                    <?php
                    if($row['cancelled']==="NO")
                    {
                    ?>
                    <td>
                        <a href='cancelledflight.php?id=<?php echo $row['flightbooking_id']?>'>CANCEL</a>
                        <a href='flight_ticket.php?id=<?php echo $row['flightbooking_id']?>'>TICKET</a>
                    </td>
                    <?php
                    }
                    else
                    {
                    ?>
                    <td>
                        <a href='#'>CANCELLED</a>
                    </td>
                    <?php
                    }
                    ?>
                </tr>
                <?php }
                ?>
            </tbody>
        </table>
        <!-- <?php
        }
        else
        {
            echo "NO Record Found";
        }
        mysqli_close($conn);
        ?> -->
    </div>
    </div>
</body>
</html>