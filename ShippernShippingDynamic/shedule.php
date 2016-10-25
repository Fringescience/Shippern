<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Shedule</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="customerIndex.php">Home</a> 
| <a href="logout.php">Logout</a></p>
<h2>View shedule</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Shedule ID</strong></th>
<th><strong>Route</strong></th>
<th><strong>To port</strong></th>
<th><strong>From port</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM `schedule`";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<td align="center"><?php echo $row["ScheduleID"]; ?></td>
<td align="center"><?php echo $row["RouteID"]; ?></td>
<td align="center"><?php echo $row["DestinationID"]; ?></td>
<td align="center"><?php echo $row["OriginID"]; ?></td>

</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>