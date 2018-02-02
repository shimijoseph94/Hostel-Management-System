<?php  include_once("header3.php"); ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Add hearing Aid</small></h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Aid Details</li>
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
<html>
<body>
            <form role="form" name="form1" method="post" action="" enctype="multipart/form-data">

               
             	<div class="form-group">
              
              	
                    
             
					
                    
                   <label for="Name">RoomType:</label> <input name="RoomType" type="text" class="input_field" id="RoomType" maxlength="60" />
                   <div class="cleaner_h10"></div>
                            
                   <label for="Capacity">Capacity:</label> <input name="Capacity" type="text" class="input_field" id="Capacity" maxlength="60" />
                          	<div class="cleaner_h10"></div>
							
				<label for="Capacity">RoomRent:</label> <input name="RoomRent" type="text" class="input_field" id="RoomRent" maxlength="60" />
                    <div class="cleaner_h10"></div>
							
				<input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Submit" />
                            
                        </form>
                             
	<?php

if (isset($_POST['submit'])) 
{
	?>
	<script>alert("akjsghd");</script>
	
	<?php

$a=$_POST["type"];
$b=$_POST["capacity"];
$c=$_POST["roomrent"];

$sql="INSERT INTO `roominfo`(`type`,`capacity` ,`roomrent`) VALUES ('$a',$b,$c)";
//$result=mysqli_query($con,$sql);
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
if($result==1)
{
	echo("add sucessfully");
}
else
{
	echo("Failed..");
}
?>
	
      </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>