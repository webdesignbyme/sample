<?php
session_start();
include "connection.php";
$Paymentid=rand(100000,999999);
$Bookid=$_SESSION['bookid'];
$Cardtype=$_POST['cardtype'];
$BName=$_POST['Bname'];
$Cname=$_POST['cname'];
$Cno=$_POST['cno'];
$Cvv=$_POST['cvv'];
$EDate=$_POST['Edate'];
$sql="INSERT into payment (paymentid,bookid,cradtype,Bname,cname,cno,cvv,Edate) VALUES ('$Paymentid','$Bookid','$Cardtype','$BName','$Cname','$Cno','$Cvv','$EDate')";
$_SESSION['payid']=$Paymentid;
$_SESSION['bookid']=$Bookid;
mysqli_query($con,$sql);
/*if(!mysqli_query($con,$sql)){
    die('error insertinf record');}
else
echo"inserted";*/
$message = "Payment Done";
echo "<script type='text/javascript'>alert('$message');</script>";
header("location:endpage.php")
?>