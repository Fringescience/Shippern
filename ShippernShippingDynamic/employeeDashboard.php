<?php
require('db.php');
include("employeeAuth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome to Dashboard.</p>
<p><a href="employeeIndex.php">Home</a><p>
<p><a href="employeeView.php">View orders</a><p>
<p><a href="employeeSchedule.php">View schedule</a><p>
<p><a href="employees.php">View employees</a><p>

<p><a href="logout.php">Logout</a></p>
</div>
</body>
</html>