<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>Shippern shipping</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="normalize.css">
<link rel="stylesheet" type="text/css" href="main.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
</head>
<body>
<?php include 'header.php';?>
        <aside>
         <div class="dropdown">
                    <a href="CargoOrder.php"><button class="dropbtn">Cargo Order &raquo</button></a>
                     <div class="dropdown-content">
                        <a href="EditOrder.php">Edit Order</a>
                        <a href="AddNewOrder.php">Add New Order</a>
                     </div>
                </div>
                <div class="dropdown">
                    <a href="Customer.php"><button class="dropbtn">Customer &raquo</button></a>
                     <div class="dropdown-content">
                        <a href="ViewCustomer.php">View Customer</a>
                        <a href="EditCustomer.php">Edit Customer</a>
                        <a href="AddNewCustomer.php">Add New Customer</a>
                     </div>
                </div>
                <div class="dropdown">
                    <a href="Ship.php"><button class="dropbtn">Ship &raquo</button></a>
                     <div class="dropdown-content">
                        <a href="ViewShip.php">View Ship</a>
                        <a href="Crew.php">Crew</a>
                        <a href="Cargo.php">Cargo</a>
                        <a href="Route.php">Route</a>
                     </div>
                </div>
                <div class="dropdown">
                    <a href="Employee.php"><button class="dropbtn">Employee &raquo</button></a>
                     <div class="dropdown-content">
                        <a href="ViewEmployee.php">View Employee</a>
                        <a href="EditEmployee.php">Edit Employee</a>
                        <a href="AddEmployee.php">Add Employee</a>
                        </div>
        </aside>
        <section>
          <!-- Gives an overview of all orders, can be sorted(needs to fix sort button!) -->
          <?php 
           $query = "SELECT * FROM Orders";
           $result = mysql_query($query);
           
           echo "<table>";
           
           while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
           	echo "<tr><td>" . $row['OrderNr'] . "</td><td>" . $row['CustomerNr'] . "</td><td>" . $row['ShipID'] . "</td><td>" . $row['DestinationID'] . "</td>
		         <td>" . $row['Weight'] . "</td><td>" . $row['OrderDate'] . "</td><td>" . $row['SentDate'] . "</td><td>" . $row['Paid'] . "</td><td>" . $row['Category'] . "</td></tr>";
           }
            sort($result); //Sort ascending alphabetical
            rsort($result); //Sort descending alphabetical
            ksort($result); //Sort ascending key
            krsort($result); //Sort descending key
           
           	echo "<table>";
          ?>
          
        </section>
        <?php include 'footer.php';?>
    </body>
</html>
