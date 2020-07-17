<?php
session_start();
include("connection.php");
$id=$_GET['id'];
$sql= "SELECT * from booking WHERE bookid=$id";
$result= mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
        {
            $_SESSION['paymentid1']=$row['paymentid'];
            $_SESSION['bookid1']=$row['bookid'];
            $_SESSION['cardtype1']=$row['cardtype'];
            $_SESSION['Bname1']=$row['Bname'];
            $_SESSION['cname1']=$row['cname'];
            $_SESSION['cno1']=$row['cno'];
            $_SESSION['cvv1']=$row['cvv'];
            $_SESSION['Edate1']=$row['Edate'];
        }
    }

   
    $del="DELETE FROM payment where paymentid=$id ";
    mysqli_query($con,$del);
    header("location:editentry1.php");
?>