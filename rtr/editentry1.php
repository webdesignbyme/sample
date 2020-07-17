<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Update</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="payment.css">
		
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
					<h1>Updating Payment Portal</h1>
					<form  action="update1.php" method="POST">
						<div class="content">
							
					<div class="col-25">
							<label for="">Card Type:</label>
					</div>
					<div class="col-75">
							<select name="cardtype">
                                    <option value="<?php echo $_SESSION['cardtype1']; ?>"><?php echo $_SESSION['cardtype1']; ?>  </option>
									<option value="Credit card">Credit card  </option>
									<option value="Debit card"> Debit card </option>
									
									</select>
					</div>
							
							<div class="col-25">
								<label for="">Bank Name:</label>
							</div>
							<div class="col-75">
								<select name="Bname">
                                    <option value="<?php echo $_SESSION['Bname1']; ?>"><?php echo $_SESSION['Bname1']; ?></option>
									<option value="Canara Bank">Canara Bank   </option>
									<option value="Axis Bank">Axis Bank  </option>
									<option value="Bank of Baroda ">Bank of Baroda   </option>
									<option value="HDFC Bank ">HDFC Bank   </option>
									<option value="Karnataka Bank">Karnataka Bank </option>
									</select>
							</div>
								
							<br>
							<div class="col-25">
								<label for="">Card Holder Name:</label>
							</div>
							<div class="col-75">
									<input type="text" id="" name="cname" value="<?php echo $_SESSION['cname1']; ?>">
							</div>
							
							<br>
							<div class="col-25">
								<label for="">Card No:</label>
							</div>
							<div class="col-75">
									<input type="number" id="" name="cno" value="<?php echo $_SESSION['cno1']; ?>">
							</div>
							<br>
							<div class="col-25">
								<label for="">CVV:</label>
							</div>
							<div class="col-75">
									<input type="number" id="" name="cvv" value="<?php echo $_SESSION['cvv1']; ?>">
							</div>

							<br>
							<div class="col-25">
								<label for="">Exp date:</label>
							</div>
							<div class="col-75">
								<input type="date"  name="Edate" value="<?php echo $_SESSION['Edate1']; ?>" >
							</div>

							<button type="submit"  class="btn">UPDATE
    </body>
</html>