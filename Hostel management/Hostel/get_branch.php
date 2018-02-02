<?php
	include_once 'connection.php';
	$dept=$_POST['dept'];
	$query=mysqli_query($con,"select * from branch where dept_id=$dept");
	while($row=mysqli_fetch_array($query)){
		echo "<option value='".$row['Branch_id']."'>".$row['Branch_name']."</option>";
	}

?>