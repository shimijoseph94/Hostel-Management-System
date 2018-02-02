<?php  include_once("header1.php");

$id=$_SESSION["Username"];?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Add Details</small></h1>
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

$id=$_SESSION['Username'];?>


<br>
<br>
<br>
<br>
<br>
<table border=5px style="width:1px; margin-left:0%; margin-top:10%;color:black;">
<tr><th>Username</th><th>Date</th><th>Destination</th><th>Purpose</th><th>Returndate</th><th>Returntime</th><th>Departuredate</th><th>Departuretime</th><th>Status</th></tr>
<?php 
$sql="select * from movementdet where Username='$id'";


$result=mysqli_query($con,$sql);

if($row=mysqli_fetch_array($result))
{
	?>
	
	
	<tr>	
	<form name="myform" action="userview.php" method="post">
	<!--<td><input type="text" name="Mid" value="<?php echo $row['Mid']?>"></td>-->
	<td><?php echo $row['Username']?></td>
	<td><?php echo $row['Date']?></td>
	<td><?php echo $row['Destination']?></td>
	<td><?php echo $row['Purpose']?></td>
	<td><?php echo $row['Returndate']?></td>
	<td><?php echo $row['Returntime']?></td>
	<td><?php echo $row['Departuredate']?></td>
	<td><?php echo $row['Departuretime']?></td>

	<?php 
	if ($row['approve']==1)
	{?>

		<td><input type="text" name="app" value="APPROVED"></td>
	<?PHP }
	else
	{?>
	<td><input type="text" name="app" value="APPROVED"></td>
<?php	
	}
	?>
	 
	 
	  
	<!-- <td><input type="submit" name="Approve" value="Approve"><a href="aa.php?id=<?php echo $row['Username'];?>">gfgfggg</a>-->
	 
	</tr>
	</form>
	
	<?php
	}
?>  
        </div><!-- /.row -->