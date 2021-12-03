<?php
$id=$_GET['id'];
include "config.php";
$sql="UPDATE flight_booking SET cancelled='YES' WHERE flightbooking_id={$id}";
$result=mysqli_query($conn,$sql);
echo ("<script LANGUAGE='JavaScript'>
    window.alert('CANCELLED SUCCESSFULLY');
    window.location.href='http://localhost/Dbms/booked_flights.php';
    </script>");
?>