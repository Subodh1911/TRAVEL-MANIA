<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Mania | Suggested Flights</title>
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
    width: 130px;
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
        <h2>SUGGESTED FLIGHTS</h2>
        <?php
        include "config.php";
if(isset($_POST['search_flight']))
{
    $origin=mysqli_real_escape_string($conn,$_POST['origin']);
    $destination=mysqli_real_escape_string($conn,$_POST['destination']);
    $passengers=mysqli_real_escape_string($conn,$_POST['passengers']);
    $date=mysqli_real_escape_string($conn,$_POST['departure_date']);
    $timestamp = mysqli_real_escape_string($conn,date("Y/m/d", strtotime($date)));
    $_SESSION["timestamp"]=$timestamp;
    $_SESSION["passengers"]=$passengers;
    $sql1="SELECT place_name FROM place WHERE place_id={$origin}";
    $sql2="SELECT place_name FROM place WHERE place_id={$destination}";
    $result1=mysqli_query($conn,$sql1);
    $row1=mysqli_fetch_assoc($result1);
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_assoc($result2);
    $sql="SELECT * FROM flight WHERE origin='{$row1['place_name']}' AND destination='{$row2['place_name']}'";
    $result=mysqli_query($conn,$sql) or die("Query Unsucessful");
    if(mysqli_num_rows($result) > 0)
    {
?>
 <table cellpadding="7px">
            <thead>
            <th>OPERATOR</th>
            <th>TYPE</th>
            <th>FARE</th>
            <th>ARRIVAL TIME</th>
            <th>DEPARTURE TIME</th>
            <th>ACTION</th>
            </thead>
            <tbody>
            <?php
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <tr>
                <td><?php echo $row['operator']?></td>
                <td><?php echo $row['type']?></td>
                <td><?php echo $row['fare']?></td>
                <td><?php echo $row['arrival']?></td>
                <td><?php echo $row['departure']?></td>
                <td>
                    <a href='flight_payment.php?id=<?php echo $row['flight_id']?>'>Book</a>
                </td>
            </tr>
            <?php }
            ?>
        </tbody>
    </table>
    <?php
    }
    else
    {
        echo "NO Record Found";
    }
    mysqli_close($conn);
}
    ?>
</body>
</html>
