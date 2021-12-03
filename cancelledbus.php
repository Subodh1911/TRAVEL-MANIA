<?php
$id=$_GET['id'];
include "config.php";
$sql="UPDATE bus_booking SET cancelled='YES' WHERE busbooking_id={$id}";
$result=mysqli_query($conn,$sql);
echo ("<script LANGUAGE='JavaScript'>
    window.alert('CANCELLED SUCCESSFULLY');
    window.location.href='http://localhost/Dbms/booked_buses.php';
    </script>");
?>