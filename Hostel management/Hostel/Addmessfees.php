<?php  include_once("header3.php"); ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Add Mess Fees</small></h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Add Mess Fees</li>
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
                	<label>FeeType</label><br>
               		<input type="Date" name="Date" value=""
              	</div>
                
                <div class="form-group">
                	<label>Amount</label><br>
               		<input type="text" name="Amount" value="" 
              	</div>
                
             
        
                
 				
             
             
 					<input type="submit" name="submit" class="btn btn-primary btn-xs" value="SUBMIT">

            </form>
       </form>
            <?php	
			if(isset($_POST['submit'])){
	
		$Date			=	$_POST['Date'];
		$Amount		=	$_POST['Amount'];
	
		
		$sql			=	"INSERT into mess (Date,Amount) values ('$Date','$Amount')";
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