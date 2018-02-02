<?php  include_once("header.php"); ?>
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
<tr><th>RoomId</th><th>RoomType</th><th>Capacity</th><th>RoomRent</th></tr>
<?php 
$sql="select * from roominfo";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{
	?>
	
	
	<tr>	
	<form name="myform" action="romm.php" method="post">
	<td><input type="text" name="roomid" value="<?php echo $row['roomid']?>"></td>
	<td><input type="text" name="type" value="<?php echo $row['type']?>"></td>
	<td><input type="text" name="capacity" value="<?php echo $row['capacity']?>"></td>
	<td><input type="text" name="roomrent" value="<?php echo $row['roomrent']?>"></td>

	
	 
	 </form>
	 <form name="myform1" action="romm.php" method="post">
	 
	
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
