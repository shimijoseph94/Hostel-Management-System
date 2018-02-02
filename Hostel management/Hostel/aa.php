
<?php  include_once("header3.php"); ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Student Details</small></h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Student Details</li>
              <li class="active"><i class="fa fa-edit"></i> </li>
            </ol>
            <!--<div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Visit <a class="alert-link" target="_blank" href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a> for more information.
            </div>-->
          </div>
        </div><!-- /.row -->
		<?php 
include_once 'connection.php';
$a=$_GET['id'];
echo "$a";
?>
<html>
<body>
<form action="#" method="post" name="submit">
<table border=5px style="width:1px; margin-left:0%; margin-top:10%;color:black;">


<tr><th>Regid</th><th>Name</th><th>Fathersname</th><th>Mothersname</th><th>Mobileno</th><th>Emailid</th><th>Housename</th><th>Place</th></tr>
<?php 
$sql="select * from registration where Name='$a'";
//echo "$sql";

$result=mysqli_query($con,$sql);

if($row=mysqli_fetch_array($result))
{
	?>
	
	
	<tr>	
	<form name="myform" action="viewmove.php" method="post">
	<!--<td><input type="text" name="Mid" value="--><td><?php echo $row['Reg_id'];?></td>
	<td><?php echo $row['Name'];?></td>
	<td><?php echo $row['Fathersname'];?></td>
	<td><?php echo $row['Mothersname'];?></td>
	<td><?php echo $row['Mobileno'];?></td>
	<td><?php echo $row['Emailid'];?></td>
	<td><?php echo $row['HouseName'];?></td>
	<td><?php echo $row['Place'];?></td>
	
	
	 

	  
	 <td><input type="submit" name="submit" value="Approve"></td>
	</tr>
	</form><?php }
if(isset($_POST['submit']))
{
	$result=mysqli_query($con,"UPDATE `movementdet` SET `approve`=1 WHERE Name='$a'");
	echo"<script>alert('approved successfully');</script>";;
}	?>
  </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>
