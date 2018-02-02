<?php  include_once("header3.php"); ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Add Room</small></h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Add Room</li>
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
                	<label>Roomtype</label><tr><br>
					
               		<input type="text" name="type" value="" 
              	</div>
                
                <div class="form-group">
                	<label>Capacity</label><br>
               		<input type="text" name="capacity" value="" 
              	</div>
                <div class="form-group">
                	<label>Roomrent</label><br>

               		<input type="text" name="roomrent">
              	</div>
             
        
                
 				
             
             
 					<input type="submit" name="submit" class="btn btn-primary btn-xs" value="SUBMIT">

            </form>
       </form>
	   
	  
            <?php	
			if(isset($_POST['submit'])){
	
		$type			=	$_POST['type'];
		$capacity		=	$_POST['capacity'];
		$roomrent			=	$_POST['roomrent'];
		
		$sql			=	"INSERT into roominfo (type,capacity,roomrent) values ('$type',$capacity,$roomrent)";
		$res=mysqli_query($con,$sql);
		
	
		echo "<script>alert('Successfull');</script>";
		
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