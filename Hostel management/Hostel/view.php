<html>

<title></title>

<body style="background-image:new1.jpg"><?php
include 'conn.php';
?>

<br>
<br>
<br>
<br>
<br>
<table border=5px style="width:3px; margin-left:0%; margin-top:10%;color:black;">
<tr><th>USERID</th><th>FIRST NAME</th><th>LAST NAME</th><th>HouseName</th><th>Place</th><th>District</th><th>ContactNumber</th><th>EMAIL</th><th>MOBNO</th><th>GENDER</th><th>DOB</th><th>SECURITY QUESTION</th><th>SECURITY ANSWER</th></tr>
<?php 
$sql="select * from reg";

$result=mysqli_query($con,$sql);

$i=0;
while($row=mysqli_fetch_array($result))
{
	?>
	
	
	<tr>	
	<form name="myform" action="editstudents.php" method="post">
	<td><input type="text" name="name" value="<?php echo $row['user_id']?>"></td>
	<td><input type="text" name="gender" value="<?php echo $row['fname']?>"></td>
	<td><input type="text" name="adno" value="<?php echo $row['lname']?>"></td>
	<td><input type="text" name="course" value="<?php echo $row['address']?>"></td>
<td><input type="text" name="courseno" value="<?php echo $row['state']?>"></td>
	<td><input type="text" name="sid" value="<?php echo $row['district']?>"/></td>
	<td><input type="text" name="name" value="<?php echo $row['city']?>"></td>
	
	<td><input type="text" name="name" value="<?php echo $row['email']?>"></td>
	
	<td><input type="text" name="name" value="<?php echo $row['mobno']?>"></td>
	
	<td><input type="text" name="name" value="<?php echo $row['gender']?>"></td>
	
	<td><input type="text" name="name" value="<?php echo $row['dob']?>"></td>
	
	<td><input type="text" name="name" value="<?php echo $row['seqstn']?>"></td>
	
	<td><input type="text" name="name" value="<?php echo $row['seqans']?>"></td>
	
	 <td><input type="submit" name="edit"  value="Edit"></td>
	 </form>
	 <form name="myform1" action="deletestudent.php" method="post">
	 
	 <td><input type="submit" name="delete" value="Delete"></td>
	</tr>
	</form>
	
	<?php
}
?>  
<div class="sis4"></div>
</BODY>
</html>
