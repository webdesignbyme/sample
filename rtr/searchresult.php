<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Search Result</title>
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
        	<h1>SEARCH RESULT</h1>
                <?php
                require("connection.php");
                $srh=$_POST['search1'];
                $sql= "SELECT * from booking Where bookid=$srh";
                $result= mysqli_query($con,$sql);
                
                 
            if(mysqli_num_rows($result)>0)
            {

                while($row=mysqli_fetch_array($result))
                {
            ?>
            <div id="leftbox">
                <div class="content">
                <h2>Booking Information</h2>
                    <table>
                        <tr>
                            <td>BOOKID:</td>
                            <td><p><?php echo $row['bookid']; ?></p></td>
                        </tr>
                        <tr>
                            <td>NAME:</td>
                            <td><p><?php echo $row['Fname']; ?></p></td>
                        </tr>
                        <tr>
                            <td>AGE:</td>
                            <td><p><?php echo $row['age']; ?></p></td>
                        </tr>
                        <tr>
                            <td>CONTACT:</td>
                            <td><p><?php echo $row['contact']; ?></p></td>
                        </tr>
                        <tr>
                            <td>DEPARTURE FROM:</td>
                            <td><p><?php echo $row['departure']; ?></p></td>
                        </tr>
                        <tr>
                            <td>DESTINATION TO:</td>
                            <td><p><?php echo $row['destination']; ?></p></td>
                        </tr>
                        <tr>
                            <td>CLASS:</td>
                            <td><p><?php echo $row['class']; ?></p></td>
                        </tr>
                        <tr>
                            <td>TOTAL:</td>
                            <td><p><?php echo $row['total']; ?></p></td>
                        </tr>
                        <tr>
                            <td>DATE:</td>
                            <td><p><?php echo $row['ddate']; ?></P></td>
                        </tr>
                    </table>
                </div>

                </div> 
                <?php
            }
        }
        
        else{
            echo"0 rows";
        }
    
        ?>  
           
        </div>
        <div class="box">
        	
            <?php
            
            $sql1= "SELECT * from payment Where bookid=$srh";
            $result1= mysqli_query($con,$sql1);
            
             
        if(mysqli_num_rows($result1)>0)
        {

            while($row=mysqli_fetch_array($result1))
            {
        ?>
        <div id="rightbox">
            <div class="content">
            <h2>Payment Information</h2>
                <table>
                    <tr>
                        <td>PAYMENT ID:</td>
                        <td><p><?php echo $row['paymentid']; ?></p></td>
                    </tr>
                    <tr>
                        <td>BOOKID:</td>
                        <td><p><?php echo $row['bookid']; ?></p></td>
                    </tr>
                    <tr>
                        <td>CARD TYPE:</td>
                        <td><p><?php echo $row['cradtype']; ?></p></td>
                    </tr>
                    <tr>
                        <td>BANK NAME:</td>
                        <td><p><?php echo $row['Bname']; ?></p></td>
                    </tr>
                    <tr>
                        <td>HOLDER NAME:</td>
                        <td><p><?php echo $row['cname']; ?></p></td>
                    </tr>
                    <tr>
                        <td>CARD NUMBER:</td>
                        <td><p><?php echo $row['cno']; ?></p></td>
                    </tr>
                    <tr>
                        <td>CVV:</td>
                        <td><p><?php echo $row['cvv']; ?></p></td>
                    </tr>
                    <tr>
                        <td>EXPIRY DATE:</td>
                        <td><p><?php echo $row['Edate']; ?></p></td>
                    </tr>
                   
                </table>

            </div>
            </div> 
            <?php
        }
    }
    
    else{
        echo"0 rows";
    }

    ?>  
       
    </div>    
</body>
</html>