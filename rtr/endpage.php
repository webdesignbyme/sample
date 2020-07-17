<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Endpage</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="endpage.css">
		
	</head>
	<body >
			<nav>
					<ul>
						<li><a href="#" class="logo">Online Ticket Reservation</a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li> <a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="mainpage.html"><h3>Home</h3></a></li>
						<li> <a href="login.html"><h3>Login</h3></a></li>
					</ul>
                </nav>
                <?php session_start(); ?>
                <div class="box">
                <form  action="mainpage.html" method="POST">
                    <p>!!Payment Successfull</p>
                    <p>Your Booking ID is:<?php echo $_SESSION['bookid']; ?> </p>
                    <p>Your Payment ID is:<?php echo $_SESSION['payid']; ?> </p>
                    <h1>THANK YOU BOOKING</h1>
                    <h1>VISIT AGAIN</h1>
                    <button type="submit"  class="btn">Home Page
                </form>
                </div>
        </body>
</html>