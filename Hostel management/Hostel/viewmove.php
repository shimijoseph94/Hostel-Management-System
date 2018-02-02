<?php  include_once("header3.php"); ?>
<html>
<body>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>View Movement Details</small></h1>
            
            <!--<div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Visit <a class="alert-link" target="_blank" href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a> for more information.
            </div>-->
          </div>
        </div><!-- /.row -->

<table border="1">
<tr><th>Username</th><th>Date</th><th>Destination</th><th>Purpose</th><th>Returndate</th><th>Returntime</th><th>Departuredate</th><th>Departuretime</th></tr>

<?php 
$sql="select * from movementdet where approve=0";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{
	?>

<br>

<br>
<br>
<br>
<br>

	
	
	<tr>	
	<td><?php echo $row['Name'];?></td>
	<td><?php echo $row['Date'];?></td>
	<td><?php echo $row['Destination'];?></td>
	<td><?php echo $row['Purpose'];?></td>
	
	<td><?php echo $row['Departuredate'];?></td>
	<td><?php echo $row['Departuretime'];?></td>
	<td><?php echo $row['Returndate'];?></td>
	<td><?php echo $row['Returntime'];?></td>

	
	 
	 
	  
<td><a href="aa.php?id=<?php echo $row['Name'];?>">View Profile</a></td>
	 <!--<td><input type="text" name="app" value="View Profile"><a href="aa.php?id=<?php echo $row['Username'];?>">View Profile</a></td>-->
	</tr>
	<?php
	}
?>  
<div class="sis4"></div>

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
