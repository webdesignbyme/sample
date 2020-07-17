<?php
include("connection.php");

$id=$_GET['id'];
$del="DELETE FROM booking where bookid=$id ";
mysqli_query($con,$del);
/*if (mysqli_query($con,$del)) {
    echo "deleted";
}
else
    echo "not deleted";*/
header("location:bookingadmin.php");
?>