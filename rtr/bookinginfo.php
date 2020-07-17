<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Booking info</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="bookinginfo.css">
		
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
                <?php
				session_start();
				require("connection.php");
				$a=$_SESSION['bookid'];
                $sql= "SELECT * from booking Where bookid= '$a'";
                $result= mysqli_query($con,$sql);
    
            
                    if(mysqli_num_rows($result)>0)
                    {

                        while($row=mysqli_fetch_array($result))
						{ ?>
				<h1>Booking Information</h1>
				<div class="box">
				
					<form  action="payment.html" method="POST">
					<div class="content">
						<table >
						
						<tr><td>Booking ID:</td><td><?php echo $row['bookid'];  $_SESSION['bookid']=$row['bookid'];?></td></tr>	
						<tr> <td>Name:</td><td><?php echo $row['Fname']; ?></td></tr>
						<tr> <td>Age:</td><td><?php echo $row['age']; ?></td></tr>
						<tr> <td>Contact:</td><td><?php echo $row['contact']; ?></td></tr>
						<tr> <td>Departure From:</td><td><?php echo $row['departure']; ?></td></tr>
						<tr> <td>Destination To:</td><td><?php echo $row['destination']; ?> </td></tr>
						<tr> <td>Class:</td><td><?php echo $row['class']; ?></td></tr>
						<tr> <td>Total no of seat:</td><td><?php echo $row['total']; ?> </td></tr>
						<tr> <td>Departure Date:</td><td><?php echo $row['ddate']; ?></td></tr>
						
						
						
						<?php $rate=$row['total'];
							$nn=$row['class'];
							if ($nn=="general") {
								$amt=300*$rate;
							}
							if ($nn=="sleeper") {
								$amt=400*$rate;
							}
							if ($nn=="ac") {
								$amt=500*$rate;
							}
							if ($nn=="delux") {
								$amt=750*$rate;
							} ?>
						<tr> <td>Total amount:</td><td><?php echo $amt; ?></td></tr>
						</table>
						<button type="submit"  class="btn">Book
						
					</div>
					</form>
				</div>

                    <?php   }
                    }
                    
                    else{
                        echo"0 rows";
                    }
					
        			?>

    </body>
</html>