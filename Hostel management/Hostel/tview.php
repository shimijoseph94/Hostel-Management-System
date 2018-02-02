<?php
include 'conn.php';
?>
<html>
<body background="images/bg.jpg">

<div align="right">
  <table width="1200" border="1">
    <tr>
    <td colspan="10"><div align="center"color=><h1><em>Customer Details</em></h1></div>    </tr>
    <tr>
	<td width="83">EmployeeCode</td>
      <td width="62">FirstNAME</td>
	  <td width="62">LastNAME</td>
      <td width="45">DOB</td>
	  <td width="62">Gender</td>
      <td width="150">phone</td>
      
       <td width="49">MOBILE</td>
      <td width="100">EMAIL</td>
	  <td width="83">Hname</td>
	  <td width="83">Place</td>
	  <td width="83">District</td>
      <td width="181">DELETE</td>
    </tr>
    <?php
	$result=mysqli_query($con,"select * from reg where roles='2'" );
 while($row=mysqli_fetch_array($result))
 {
	 
?>
    <tr>
	<td><?php echo $row["uncod"]?></td>
      <td><?php echo $row["fname"]?></td>
	  <td><?php echo $row["lname"]?></td>
    <td><?php echo $row["dob"]?></td>
    <td><?php echo $row["gender"]?></td>
	<td><?php echo $row["phone"]?></td>
	<td><?php echo $row["mobile"]?></td>
    <td><?php echo $row["email"]?></td>
    <td><?php echo $row["hname"]?></td>
    <td><?php echo $row["place"]?></td>
    
	<td><?php echo $row["district"]?></td>
         
     
<td><a href="delete.php?uncod=<?php echo $row['uncod'];?>">Delete</a></td>
    </tr>
    <?php
 }
 ?>
   </table>
</div>
 <font size="+3"> <a href="admin.php"><strong>Back</strong></a> </font>
</body>
</html>