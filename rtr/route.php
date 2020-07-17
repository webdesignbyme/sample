<?php


include "connection.php";
session_start();
$bookid=rand(10000,99999);
$usename=$_POST['Fname'];
$age=$_POST['age'];
$contact=$_POST['contact'];
$departure=$_POST['departure'];
$destination=$_POST['destination'];
$class=$_POST['class'];
$total=$_POST['num'];
$ddate=$_POST['date'];
$_SESSION['bookid']=$bookid;
$sql="INSERT into booking (bookid,Fname,age,contact,departure,destination,class,total,ddate) VALUES ('$bookid','$usename','$age','$contact','$departure','$destination','$class','$total','$ddate')";
/*if(!mysqli_query($con,$sql)){
    die('error insertinf record');}
else
echo"inserted";*/
mysqli_query($con,$sql);
$message = "successfully booked, you can proceed to payment";
echo "<script type='text/javascript'>alert('$message');</script>";
header("location:bookinginfo.php")
?>