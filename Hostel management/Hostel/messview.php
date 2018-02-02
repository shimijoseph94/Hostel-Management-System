<?php  include_once("header1.php");

$id=$_SESSION["Username"];?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>MessFee Details</small></h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Add Details</li>
              <li class="active"><i class="fa fa-edit"></i> </li>
            </ol>
            <!--<div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Visit <a class="alert-link" target="_blank" href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a> for more information.
            </div>-->
          </div>
		  <title></title>

<body style="background-image:new1.jpg">

<?php

$id=$_SESSION['Username'];
?>
<?php
$sql3="select `Reg_id` from login where Username='$id'";
//echo $sql3;
$result3=mysqli_query($con,$sql3);
$row=mysqli_fetch_array($result3);
$rid=$row['Reg_id'];
//echo $rid;
?>



<br>
<br>
<br>
<br>
<br>
<table border=5px style="width:1px; margin-left:0%; margin-top:10%;color:black;">
<tr>
<th>Date</th>
<th>MessFee</th>

<th>Action</th>
</tr>
<?php 
$sql="select * from mess ";
$result=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($result))
{
	$sql2="select `roomid` from roomallotment where `Reg_id`='$rid'";
	//echo $sql2;
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($result2);
$rid=$row2['roomid'];
//echo $rid;

//$sql3="select `roomrent` from roominfo where `roomid`='$rid'";
	//echo $sql2;
//$result3=mysqli_query($con,$sql3);
//$row3=mysqli_fetch_array($result3);
//$rent=$row3['roomrent'];
//echo $rid;
	?>
	
	
	<tr>	
	<form name="myform" action="messview.php" method="post">
	<td><input type="text" name="Date" value="<?php echo $row['Date'];?>"></td>
	<td><input type="text" name="Amount" value="<?php echo $row['Amount'];?>"></td>
	<!--<td><?php echo $rent;?></td>-->
	
	<td><a href="feejoo.php">Pay</a></td>
	

	
	 
	 
	  
	<!-- <td><input type="submit" name="Approve" value="Approve"><a href="aa.php?id=<?php echo $row['Username'];?>">gfgfggg</a>-->
	 
	</tr>
	</form>
	
	<?php
	}
?>  
        </div><!-- /.row -->