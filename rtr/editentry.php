<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Update</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="route.css">
		
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
			<h1>Updating Booking Information</h1>
			<form  action="update.php" method="POST">
				<div class="content">
					
					
					<div class="col-25">
						<label for="">Name:</label>
					</div>
					<div class="col-75">
							<input type="text"  name="Fname"   value="<?php echo $_SESSION['Fname1']; ?>">
					</div>
						
					<br>
					<div class="col-25">
						<label for="">Age:</label>
					</div>
					<div class="col-75">
							<input type="number" id="" name="age" value="<?php echo $_SESSION['age1']; ?>" >
					</div>
					
					
					<br>
					<div class="col-25">
							<label for="name">Contact:</label>
					</div>
					<div class="col-75">
							<input type="number" id="" name="contact" value="<?php echo $_SESSION['contact1']; ?>">
					</div>
						
					
					<br>
					<div class="col-25">
							<label for="departure">Departure From:</label>
					</div>
					<div class="col-75">
							<select name="departure">
									<option value="<?php echo $_SESSION['departure1']; ?>" seleted ><?php echo $_SESSION['departure1']; ?></option> 
									<option value="Allahabad">Allahabad   </option>
									<option value="Bangalore">Bangalore   </option>
									<option value="Bhubaneshwar">Bhubaneshwar   </option>
									<option value="Bombay">Bombay   </option>
									<option value="Chennai">Chennai   </option>
									<option value="Chennai">Mangalore   </option>
									<option value="Noida">Noida   </option>
									<option value="Delhi">Delhi  </option>
									<option value="Goa">Goa   </option>
									<option value="Hyderabad">Hyderabad   </option>
									<option value="Puri">Puri   </option>
									<option value="Orissa">Orissa   </option>
									<option value="Ooty">Ooty   </option>
									<option value="Patna">Patna   </option> 
									<option value="Mysore">Mysore   </option>
									<option value="Shimla">Shimla   </option>
									<option value="Kanpur">Kanpur   </option>
									<option value="Kolkata">Kolkata   </option>
									</select>
					</div>
					
					
					
					<br>
					<div class="col-25">
						<label for="destination">Destination:</label>
					</div>
					<div class="col-75">
							<select name="destination">
									<option value="<?php echo $_SESSION['destination1']; ?>"><?php echo $_SESSION['destination1']; ?>   </option>
									<option value="Bangalore">Bangalore   </option>
									<option value="Bhubaneshwar">Bhubaneshwar   </option>
									<option value="Bombay">Bombay   </option>
									<option value="Chennai">Chennai   </option>
									<option value="Noida">Noida   </option>
									<option value="Delhi">Delhi  </option>
									<option value="Goa">Goa   </option>
									<option value="Hyderabad">Hyderabad   </option>
									<option value="Puri">Puri   </option>
									<option value="Orissa">Orissa   </option>
									<option value="Ooty">Ooty   </option>
									<option value="Patna">Patna   </option> 
									<option value="Mysore">Mysore   </option>
									<option value="Shimla">Shimla   </option>
									<option value="Kanpur">Kanpur   </option>
									<option value="Kolkata">Kolkata   </option>
									</select>
					</div>
					
					
					
					<br>
					<div class="col-25">
							<label for="class">Class:</label>
					</div>
					<div class="col-75">
							<input type="radio" name="class" value="general" checked>General (Rs.300)<br>
							<input type="radio" name="class" value="sleeper" >Sleeper (Rs.400)<br>
							<input type="radio" name="class" value="ac" >AC (Rs.500)<br>
							<input type="radio" name="class" value="delux" >Delux (Rs.750)<br>
					</div>
					
					<br>
					<div class="col-25">
							<label for="num">Total pasenger:</label>
					</div>
					<div class="col-75">
							<input type="text" id="" name="num" value="<?php echo $_SESSION['total1']; ?>">
					</div>
					
					<br>
					<div class="col-25">
							<label for="">Departure Date:</label>
					</div>
					<div class="col-75">
							<input type="date"  name="date" value="<?php echo $_SESSION['ddate1']; ?>" >
					</div>
					
					<br>

					<button type="submit"  class="btn">UPDATE

				</div>
				
			</form>
			
		</div>
		
	</body>
</html>