<?php
include 'connection.php';
SESSION_start();

$u=$_SESSION["uname"];
$sql="select * from register where admissionno='$u'";
//echo $sql;

    $results=mysqli_query($con,$sql);

  while($row=mysqli_fetch_array($results))
  {
?>
Updated Your data successfully.....


<html>
<haed>
</head>
<body background="bg.jpg">
<center>
<table>


<tr>
<td>Admissionno:</td>
<td><?php echo $row['admissionno'];?></td>
</tr>
<tr>
<td>Branch:</td>
<td><?php echo $row['branch'];?></td>
</tr>
<tr>
<td>Name:</td>
<td><?php echo $row['name'];?></td>
</tr>
<tr>
<td>DOB:</td>
<td><?php echo $row['dob'];?></td>
</tr>
<tr>
<td>Gender:</td>
<td><?php echo $row['gender'];?></td>
</tr>
<tr>
<td>Address:</td>
<td><?php echo $row['address'];?></td>
</tr>


<tr>
<td>Phone:</td>
<td><?php echo $row['phone'];?></td>
</tr>
<tr>
<td>Email:</td>
<td><?php echo $row['email'];?></td>
</tr>
<tr>
<td>GurdianName:</td>
<td><?php echo $row['guardianname'];?></td>
</tr>
<tr>
<td>Present Address:</td>
<td><?php echo $row['presentaddress'];?></td>
</tr>
<tr>
<td>Contact Number:</td>
<td><?php echo $row['contactnumber'];?></td>
</tr>
<?php
}
?>
</table>
<a href="student.php" target="_blank">done</a>
</center>
</body>
</html>


