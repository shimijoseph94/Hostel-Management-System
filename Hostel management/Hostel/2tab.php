<?php
 $sql3=("select * from registration,semester where registration.Sem_id=Semester.Sem_id" );-->
	$result3=mysqli_query($con,$sql3);
	while($row3=mysqli_fetch_array($result3))
 {
	 $Sem=$row3['Sem_name'];
 }
	 ?>
	<?php
 $sql2=("select * from registration,branch where registration.Branch_id=branch.Branch_id" );
	$result2=mysqli_query($con,$sql2);
	while($row2=mysqli_fetch_array($result2))
 {
	 $Branch=$row2['Branch_name'];
 }
	 ?>
	<?php
 $sql1=("select * from registration,department where registration.Dept_id=department.Dept_id" );
	$result1=mysqli_query($con,$sql1);
	while($row1=mysqli_fetch_array($result1))
 {
	 $Dept=$row1['Dept_name'];
 }
	 ?>
	 
	 select r.*,d.Dept_name from registration r join department d on r.Dept_id=d.Dept_id
	 $sql1=("select * from registration,department,branch,semester where registration.Dept_id=department.Dept_id and registration.Branch_id=branch.Branch_id and registraton.Sem_id=Sem.Sem-id" );
	 where Username=$'id'
	 
	 <!--<td><input type="text" name="app" value="View Profile"><a href="aa.php?id=<?php echo $row['Username'];?>">View Profile</a></td>-->