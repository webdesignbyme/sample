<?php
include("connection.php");

$id=$_GET['id'];
$del="DELETE FROM payment where paymentid=$id ";
mysqli_query($con,$del);
/*if (mysqli_query($con,$del)) {
    echo "deleted";
}
else
    echo "not deleted";*/
header("location:paymentadmin.php");
?>