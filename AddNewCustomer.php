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
                        </div>
        </aside>
        <section>
          <!-- Allows you to add a new customer -->
          <form method="post">
           CustomerNr: <input type="number" name="CustomerNr"><br>
           PostNr: <input type="number" name="PostNr"><br>
           Company: <input type="text" name="Company"><br>
           Email: <input type="email" name="Email"><br>
           Password: <input type="password" name="Password"><br>
           <input type="submit">
          </form>
          <?php 
           $sql = "INSERT INTO Customer (CustomerNr, PostNr, Company, Email, Password)
           VALUES ($_POST[CustomerNr] , $_POST[PostNr] , $_POST[Company] , $_POST[Email] , $_POST[Password])";
             
           
           if ($conn->query($sql) === TRUE) {
            echo "Customer successfully added";
             } else {
              echo "Error adding new customer: " . $conn->error;
              }
          ?>
        </section>
        <?php include 'footer.php';?>
    </body>
</html>