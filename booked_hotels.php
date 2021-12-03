<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Mania | Booked Hotels</title>
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
    width: 160px;
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
        <h2>BOOKED HOTELS</h2>
        <?php
        include "config.php";
        $sql="SELECT * FROM hotel_booking WHERE username='{$_SESSION["username"]}'";
        $result=mysqli_query($conn,$sql) or die("Query Unsucessful");
    
        if(mysqli_num_rows($result) > 0)
        {
        ?>
        <table cellpadding="7px">
            <thead>
            <th>BOOKING Id</th>
            <th>HOTEL NAME</th>
            <th>CHECK IN</th>
            <th>CHECK OUT</th>
            <th>ROOMS</th>
            <th>CITY</th>
            <th>PAYMENT ID</th>
            <th>Action</th>
            </thead>
            <tbody>
            <?php
                while($row=mysqli_fetch_assoc($result))
                {
                    include "config.php";
                    $sql1="SELECT hotel_name FROM hotel WHERE hotel_id={$row['hotel_id']}";
                    $result1=mysqli_query($conn,$sql1);
                    $row1=mysqli_fetch_assoc($result1);
                    $sql2="SELECT transaction_id FROM hotel_payment WHERE hotelbooking_id={$row['hotelbooking_id']}";
                    $result2=mysqli_query($conn,$sql2);
                    $row2=mysqli_fetch_assoc($result2);
                ?>
                <tr>
                    <td><?php echo $row['hotelbooking_id']?></td>
                    <td><?php echo $row1['hotel_name']?></td>
                    <td><?php echo $row['checkin']?></td>
                    <td><?php echo $row['checkout']?></td>
                    <td><?php echo $row['rooms']?></td>
                    <td><?php echo $row['city']?></td>
                    <td><?php echo $row2['transaction_id']?></td>
                    <?php
                    if($row['cancelled']==="NO")
                    {
                    ?>
                    <td>
                        <a href='cancelledhotel.php?id=<?php echo $row['hotelbooking_id']?>'>CANCEL</a>
                        <a href='hotel_booking_receipt.php?id=<?php echo $row['hotelbooking_id']?>'>RECEIPT</a>
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
        <?php
        }
        else
        {
            echo "NO Record Found";
        }
        mysqli_close($conn);
        ?>
    </div>
    </div>
</body>
</html>