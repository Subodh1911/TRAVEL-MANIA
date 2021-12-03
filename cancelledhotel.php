<?php
$id=$_GET['id'];
include "config.php";
$sql="UPDATE hotel_booking SET cancelled='YES' WHERE hotelbooking_id={$id}";
$result=mysqli_query($conn,$sql);
echo ("<script LANGUAGE='JavaScript'>
    window.alert('CANCELLED SUCCESSFULLY');
    window.location.href='http://localhost/Dbms/booked_hotels.php';
    </script>");
?>