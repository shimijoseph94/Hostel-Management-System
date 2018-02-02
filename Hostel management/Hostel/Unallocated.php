<?php  
include_once("header3.php"); 
$id=$_SESSION["Username"];
$a=$_GET['id'];
//echo $a;
if(isset($_POST['sub2']))
{
	
	$rnid=$_POST['rid'];
	//echo $rnid;
	
	$sql1="select * from `roominfo` where `roomid`='$rnid' and `capacity`>`Occupied`";

	$res1= mysqli_query($con,$sql1);
	$row1=mysqli_fetch_array($res1);
	$oc=$row1['Occupied'];
	$oc++;
	$cap=$row1['capacity'];
	if($res1)
	{
		$sql2="UPDATE `roominfo` SET `Occupied`='$oc',`status`=0 WHERE `roomid`=$rnid";
		$res2= mysqli_query($con,$sql2);
		//echo "<script>alert('Successful');</script>";
		$sql3="INSERT INTO `roomallotment`( `roomid`, `Reg_id`, `Status`) VALUES ($rnid,$a,0)";
		$res3= mysqli_query($con,$sql3);
		$sql4="UPDATE `registration` SET `allocation_status`=1 WHERE `Reg_id`=$a";
		$res4= mysqli_query($con,$sql4);
	}
	echo "<script>alert('Successfully allocated');</script>";?>
	<!--<script>window.location.assign("admview.php")</script>--> <?php
	
}
?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Unallocated Rooms List</small></h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i>Unallocated Rooms List</li>
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

               
             	
                
                
                	<tr>
<td>Room Type:</td>
<td>
							
<select name="drop1">
<?php
$results= mysqli_query($con,"SELECT DISTINCT  `type` FROM  `roominfo` WHERE 1");
$i=1;
while($row=mysqli_fetch_array($results))
{
?>
	<option value="<?php echo $row['type']; ?>"><?php echo $row['type']; ?></option>

<?php }
?></select>
<tr>
 
                <div class="form-group">
                	<label></label>
					<!--<tr>	
	<form name="myform" action="#" method="post">
	
	<td><input type="text" name="Capacity" value=" "> </td>
	<td><input type="text" name="Status" value=""></td>
	</tr>
	</form>-->
    <input type="submit" name="submit" class="btn btn-primary btn-xs" value="VIEW">
    </div>
    <?php
	if(isset($_POST['submit']))
	{	
	//echo "<script>alert('Successful');</script>";
	$c=$_POST['drop1'];
	$sql="select * from `roominfo` where `type` = '$c' and `capacity`>`Occupied`";
	//$sql="SELECT * FROM  `roominfo` WHERE  `type` = '$c'";
	$res=mysqli_query($con,$sql);
	
	?>
	Room Type:<?php echo $c ?>
    <table border=1>            
 		<tr>
			<th>Room No:</th>
			<th>type</th>
			<th>rent</th>
			<th>Occupied</th>
			
		</tr>
	<?php
	$i=0;
	while($row=mysqli_fetch_array($res)){
	?><form action="#" method="POST">

		<tr>
			<td><?php echo $row['roomid']; ?></td>
			<td><?php echo $row['type']; ?></td>
			<td><?php echo $row['roomrent']; ?></td>
			<td><?php echo $row['Occupied']; ?></td>
			<input type="hidden" name="rid" value="<?php echo $row['roomid']?>" >
		
		</tr></form>
        
	<?php
	$i++;
	}
	}
	?>
	
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

  </body>
</html>