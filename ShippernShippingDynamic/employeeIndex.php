<?php
//include auth.php file on all secure pages
include("employeeAuth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
<p><a href="employeeDashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>