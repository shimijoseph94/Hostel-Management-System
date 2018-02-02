
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
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">

            <form role="form" name="form1" method="post" action="" enctype="multipart/form-data">

               <tr>
             	
                <div class="form-group">
                	<label>USER ID</label>
               		<input type="text" name="USEID" value="<?php echo "$id"; ?>" required  class="form-control"/>
              	</div>
				<div class="form-group">
                	<label>Name</label><br>
               		<input type="text" name="Name" value="" 
              	</div>
                
                
                
                <div class="form-group">
                	<label>Date</label><br>
               		<input type="Date" name="Date" value="" 
              	</div>
                
                <div class="form-group">
                	<label>Destination</label><br>
               		<input type="text" name="Destination" value="" 
              	</div>
                <div class="form-group">
                	<label>Purpose</label><br>
					<td><input type="text" name="Purpose" value="" 
              	</div>
				<div class="form-group">
                	<label>DepartureDate</label><br>

               		<input type="Date" name="Departuredate">
              	</div>
             
			 <div class="form-group">
                	<label>DepartureTime</label><br>

               		<input type="text" name="Departuretime">
              	</div>
             
				  
				  <div class="form-group">
                	<label>ReturnDate</label><br>

               		<input type="Date" name="Returndate">
              	</div>
				
				<div class="form-group">
                	<label>ReturnTime</label><br>

               		<input type="text" name="Returntime">
              	</div>
				
				
				
        
                
 				
             
             
 					<input type="submit" name="submit" class="btn btn-primary btn-xs" value="SUBMIT">


            </form>
       </form>
            <?php	
			if(isset($_POST['submit'])){
	$Name = $_POST['Name'];
		$Date			=	$_POST['Date'];
		$Destination		=	$_POST['Destination'];
		$Purpose			=	$_POST['Purpose'];
		$Returndate			=	$_POST['Returndate'];
		$Returntime			=	$_POST['Returntime'];
		$Departuredate			=	$_POST['Departuredate'];
		$Departuretime			=	$_POST['Departuretime'];
		
		$sql			=	"INSERT into movementdet (Username,Date,Destination,Purpose,Returndate,Returntime,Departuredate,Departuretime,approve,Name) values ('$id','$Date','$Destination','$Purpose','$Returndate','$Returntime','$Departuredate','$Departuretime',0,'$Name')";
		
		echo "$sql";
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