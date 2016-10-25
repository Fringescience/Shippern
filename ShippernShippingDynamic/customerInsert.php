<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d H:i:s");
    $toPort =$_REQUEST['toPort'];
    $fromPort = $_REQUEST['fromPort'];
    $submittedby = $_SESSION["username"];
    $ins_query="insert into orders
    (`orderDate`,`toPort`,`fromPort`,`orderedBy`)values
    ('$trn_date','$toPort','$fromPort','$submittedby')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='customerView.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Place new order</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="customerDashboard.php">Dashboard</a> 
| <a href="customerView.php">View Records</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="toPort" placeholder="Enter port for departure" required /></p>
<p><input type="text" name="fromPort" placeholder="Enter destinationport" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>