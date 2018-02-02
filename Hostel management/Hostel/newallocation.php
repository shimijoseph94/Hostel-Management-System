
<?php  
include_once("header3.php"); 
$id=$_SESSION["Username"];
//$a=$_GET['id'];
if(isset($_POST['sub2']))
{
	echo "<script>alert('Successful');</script>";
$depid=$_POST['drop1'];
$semid=$_POST['drop2'];
$brid=$_POST['drop3'];
$rcap=$_POST['drop4'];
$abc="SELECT * FROM  `roominfo` WHERE  `capacity` ='$rcap' ";
//$abc="SELECT * FROM  `roominfo` WHERE  `capacity`!=`Occupied`";
//$sql1="select * from `roominfo` where `roomid`='$rnid' and `capacity`>`Occupied`";
echo $abc;
$r1=mysqli_query($con,$abc);
while($row1=mysqli_fetch_array($r1)){
	$rcapacity=$rcap;
	$rno=$row1['roomid'];
	for($i=$rcapacity;$i>0;$i--){
		$r2= mysqli_query($con,"SELECT * FROM `registration` WHERE `Dept_id`='$depid' and `Sem_id`='$semid' and `Branch_id`='$brid' and `allocation_status`=0");
		while($row=mysqli_fetch_array($r2))
		{
			$stid=$row['Reg_id']; 
			$r3=mysqli_query($con,"INSERT INTO `roomallotment`( `roomid`, `Reg_id`, `Status`, `status1`) VALUES ('$rno','$stid','0','0')");
			$r4=mysqli_query($con,"UPDATE `registration` SET `allocation_status`=1 WHERE `Reg_id`='$stid'");
			
		}
	
	}
}
}
//if($row2==mysqli_fetch_array($r3)){
	


?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Room Allocation</small></h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i>Room Allocation</li>
              <li class="active"><i class="fa fa-edit"></i> </li>
            </ol>
            <!--<div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Visit <a class="alert-link" target="_blank" href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a> for more information.
            </div>-->
          </div>
        </div><!-- /.row -->
		

        <div class="row">
          <div class="col-lg-6">

            <form role="form" name="form1" method="post" action="" enctype="multipart/form-data">

               
             	
                
                 <div class="form-group">
                	<label>Department</label><tr><br>
					
<select name="drop1" id="dept_select">
<?php
$results= mysqli_query($con,"select * from department");
$i=1;
while($row=mysqli_fetch_array($results))
{?>
	<option value="<?php echo $row['Dept_id']; ?>"><?php echo $row['Dept_name']; ?></option>

<?php }
?></select>
</div>
<br>
</td>
 <div class="form-group">
                	<label>Semester</label><tr><br>

<select name="drop2">
<?php
$results= mysqli_query($con,"select * from semester");
$i=1;
while($row=mysqli_fetch_array($results))
{?>
	<option value="<?php echo $row['Sem_id']; ?>"><?php echo $row['Sem_name']; ?></option>

<?php }
?></select>
</div>
<br>
 <div class="form-group">
                	<label>Branch</label><tr><br>

<select name="drop3" id="branch_select">
<?php
$results= mysqli_query($con,"select * from branch");
$i=1;
while($row=mysqli_fetch_array($results))
{?>
	<option value="<?php echo $row['Branch_id']; ?>"><?php echo $row['Branch_name']; ?></option>

<?php }
?></select>
</div>
<br>
 <div class="form-group">
                	<label>RoomType</label><tr><br>		
<select name="drop4">
<?php
$ath="SELECT DISTINCT  `type`,capacity FROM  `roominfo`";
echo $ath;
$results= mysqli_query($con,$ath);
$i=1;
while($row=mysqli_fetch_array($results))
{
?>
	<option value="<?php echo $row['capacity']; ?>"><?php echo $row['type']; ?></option>

<?php }
?></select>
</div>
<br>

<td><input type="submit" name="sub2" value="allocate"></td>

 
                <div class="form-group">
                	<label></label>
	
	
	</table>
             
 					<!--<input type="submit" name="submit" class="btn btn-primary btn-xs" value="SUBMIT">-->

    <!--        </form>-->
       </form>
            
		 
		
		
			



          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<script>
	$("#dept_select").on("change",function(){
		$dept=$(this).val();
		$.ajax({
			type:'post',
			url:'get_branch.php',
			data:{dept:$dept},
			success:function(response){
				$("#branch_select").html(response);
			}
		});
	});
</script>

  </body>
</html>