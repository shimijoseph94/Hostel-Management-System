<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Room Details</title>
<style type="text/css">
<!--
body {
	background-color: #FFE4E1;
}
-->
</style></head>

<body>



<table border=1>
<tr>
<td>RoomId</td>
<td>RoomType</td>
<td>Capacity</td>
<td>Roomrent</td>

</tr>
<?php
$results=mysqli_query($con,"select * from roominfo");
$i=1;
while($row=mysqli_fetch_array($results)){
//print_r("$row");

?>
<tr>
<td><?php echo $i;?></td>

<td><?php echo $row['roomid'];?></td>
<td><?php echo $row['type'];?></td>
<td><?php echo $row['capacity'];?></td>
<td><?php echo $row['roomrent'];?></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>

