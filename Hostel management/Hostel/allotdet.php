<?php  include_once("header3.php");
if(isset($_POST['dealloc']))
{
    $regid = $_POST["rid"];
    echo $regid;
    $query1 = "SELECT * FROM `roomallotment` WHERE `Reg_id`=$regid";
    echo $query1;
	$result1 = mysqli_query($con, $query1);
    $row1=mysqli_fetch_array($result1);
	$rno=$row1['roomid'];
	echo $rno;
	
	
	$query3 = "DELETE FROM roomallotment WHERE `Reg_id`='$rno'";
    echo $query3;
	$result3 = mysqli_query($con, $query3);

    echo '<script language="javascript">';
    echo 'alert("DEALLOCATED")';
    echo '</script>'; 
	$query2 = "UPDATE `roominfo` SET `Occupied`=`Occupied`-1 WHERE `roomid`=$rno";
    echo $query2;
	$result2 = mysqli_query($con, $query2);
}
 ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>View Room Details</small></h1>
            
            <!--<div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Visit <a class="alert-link" target="_blank" href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a> for more information.
            </div>-->
          </div>
        </div><!-- /.row -->

<title></title>

<body style="background-image:new1.jpg"><?php

?>

<br>
<br>
<br>
<br>
<br>
<table border=5px style="width:3px; margin-left:0%; margin-top:10%;color:black;">
<tr><th>Allocation_Id</th><th>RoomId</th><th>Reg_id</th><th>Type</th></tr>
<?php 
$sql="select * from roomallotment ";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{
	
	?>
	
	
	<tr>	
	<form name="myform" action="allotdet.php" method="post">
	<td><?php echo $row['room_allot_id'];?></td>
	<td><?php echo $row['roomid'];?></td>
	<td><?php echo $row['Reg_id'];?></td>
	
	<input type="hidden" value="<?php echo  $row['Reg_id'];  ?>" name="rid" >
	<!--<td><input type="submit" value="DEALLOCATE" name="dealloc"></td>-->
	
	

	
	 
	 </form>
	 
	
	<?php
}
?>  
<div class="sis4"></div>
 </tbody>
              </table>
            </div>
          
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
</BODY>
</html>
