<!doctype html>
<html>

<head>
    <title>Admin page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="admin.css">
</head>

<body>
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
            <li><a href="mainpage.html">Home</li>
            
        </ul>
    </nav>
    <div class=sidebar>
        <a href="search.php">Search</a>
        <a href="bookingadmin.php">Booking Info</a>
        <a href="paymentadmin.php">Payment Info</a>
        
        
    </div>
    
    <?php
    require("connection.php");
    $sql= "SELECT * from payment";
    $result= mysqli_query($con,$sql);
    ?>

<div class="content">
        <table class="table table-hover">
            <tr>
                <th>PAYMENT ID</th>
                <th>BOOKING ID</th>
                <th>CARD TYPE</th>
                <th>BANK NAME</th>
                <th>HOLDER NAME</th>
                <th>CARD NO</th>
                <th>CVV</th>
                <th>EXPIRY DATE</th>
            </tr>
           
           <?php
            if(mysqli_num_rows($result)>0)
            {

                while($row=mysqli_fetch_array($result))
                {
            ?>
            <tr>
            <td><?php echo $row['paymentid']; ?></td>
            <td><?php echo $row['bookid']; ?></td> 
            <td><?php echo $row['cradtype']; ?></td> 
            <td><?php echo $row['Bname']; ?></td> 
            <td><?php echo $row['cname']; ?></td> 
            <td><?php echo $row['cno']; ?></td> 
            <td><?php echo $row['cvv']; ?></td>
            <td><?php echo $row['Edate']; ?></td>
            <td>
              
               
            <a href="delete1.php?id=<?php echo $row['paymentid'];?>">
            <i class="fas fa-minus-circle"></i></a>
                </td>
            <td> <a href="edit1.php?id=<?php echo $row['paymentid'];?>">
            <i class="fas fa-edit"></i></a></td>
            </tr>
            <?php
            }
        }
        
        else{
            echo"0 rows";
        }
    
        ?>

            

        </table>
    </div>
</body>

</html>