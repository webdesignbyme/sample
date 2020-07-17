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
            $_SESSION['bookid1']=$row['bookid'];
            $_SESSION['Fname1']=$row['Fname'];
            $_SESSION['age1']=$row['age'];
            $_SESSION['contact1']=$row['contact'];
            $_SESSION['departure1']=$row['departure'];
            $_SESSION['destination1']=$row['destination'];
            $_SESSION['class1']=$row['class'];
            $_SESSION['total1']=$row['total'];
            $_SESSION['ddate1']=$row['ddate'];
        }
    }

   
    $del="DELETE FROM booking where bookid=$id ";
    mysqli_query($con,$del);
    header("location:editentry.php");
?>