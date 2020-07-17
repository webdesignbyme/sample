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
    $sql= "SELECT * from booking";
    $result= mysqli_query($con,$sql);
    ?>

<div class="content">
        <table class="table table-hover">
            <tr>
                <th>BOOKID</th>
                <th>NAME</th>
                <th>AGE</th>
                <th>CONTACT</th>
                <th>DEPARTURE FROM</th>
                <th>DESTINATION TO</th>
                <th>CLASS</th>
                <th>TOTAL</th>
                <th>DATE</th>
            </tr>
           
           <?php
            if(mysqli_num_rows($result)>0)
            {

                while($row=mysqli_fetch_array($result))
                {
            ?>
            <tr>
            <td><?php echo $row['bookid']; ?></td>
            <td><?php echo $row['Fname']; ?></td> 
            <td><?php echo $row['age']; ?></td> 
            <td><?php echo $row['contact']; ?></td> 
            <td><?php echo $row['departure']; ?></td> 
            <td><?php echo $row['destination']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['total']; ?></td>
            <td><?php echo $row['ddate']; ?></td>
            <td>
              
               
            <a href="delete.php?id=<?php echo $row['bookid'];?>">
            <i class="fas fa-minus-circle"></i></a>
                </td>
            <td> <a href="edit.php?id=<?php echo $row['bookid'];?>">
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