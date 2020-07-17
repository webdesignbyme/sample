<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Search</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="search.css">
        
		
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
                <div class=sidebar>
        <a href="search.php">Search</a>
        <a href="bookingadmin.php">Booking Info</a>
        <a href="paymentadmin.php">Payment Info</a>
        
        
    </div>
        <div class="box">
			
			<form  action="searchresult.php" method="POST">
                <h3>SEARCH BY BooK ID</h3>
				<div class="content">
                    <div class="col-25">
                        <input type="text" id="" name="search1" placeholder="Enter your bookid">
                    </div>
                    <div class="col-75">
                        <button type="submit"  class="btn">Search		
                    </div>
                </div>

                <!--<h3>SEARCH BY Phone number</h3>
				<div class="content">
                    <div class="col-25">
                        <input type="text" id="" name="search2" placeholder="Enter your phone number">
                    </div>
                    <div class="col-75">
                        <button type="submit"  class="btn">Search		
                    </div>
                </div>-->
               
            </form>
        </div>    
</body>
</html>