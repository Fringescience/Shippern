<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="employeeIndex.php">Home</a> 
| <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Order number</strong></th>
<th><strong>From port</strong></th>
<th><strong>To port</strong></th>
<th><strong>Order date</strong></th>
<th><strong>submitted by</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from orders";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $row["orderId"]; ?></td>
<td align="center"><?php echo $row["fromPort"]; ?></td>
<td align="center"><?php echo $row["toPort"]; ?></td>
<td align="center"><?php echo $row["orderDate"]; ?></td>
<td align="center"><?php echo $row["orderedBy"]; ?></td>

</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>