<?php
require('db.php');
include("auth.php");
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
<p><a href="customerIndex.php">Home</a><p>
<p><a href="customerInsert.php">Insert New Record</a></p>
<p><a href="customerView.php">View Records</a><p>
<p><a href="shedule.php">View schedule</a><p>
<p><a href="logout.php">Logout</a></p>
</div>
</body>
</html>