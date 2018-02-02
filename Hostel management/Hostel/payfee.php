<?php  include_once("header1.php"); ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Pay Online</small></h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> </li>
              <li class="active"><i class="fa fa-edit"></i> </li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">

			  <center><img src="images/paymentlogo123.png" width="430px" height="165"></center>
            <form role="form" name="form1" method="post" action="" enctype="multipart/form-data">

                <div class="form-group">
                	<label>Choose bank</label><br>
               		
              	</div>
                
							
<select name="drop1">
<?php
$results= mysqli_query($con,"SELECT * from payment");
$i=1;
while($row=mysqli_fetch_array($results))
{
?>
	<option value="<?php echo $row['banktype']; ?>"><?php echo $row['banktype']; ?></option>

<?php }
?></select>
<tr><br>
               
             	
                <div class="form-group">
                	<label>Card Name</label><br>
               		<input type="text" name="Cardname" value="" 
              	</div>
                
                <div class="form-group">
                	<label>CVV Number</label><br>
               		<input type="text" name="cvv" value="" 
              	</div>
                <div class="form-group">
                	<label>Card Number</label><br>

               		<input type="text" name="Cardnum">
              	</div>
             
        
                
 				
             
             
 					<input type="submit" name="submit" class="btn btn-primary btn-xs" value="SUBMIT">

            </form>
       </form>
            <?php	
			if(isset($_POST['submit'])){
	    
		$Cardname			=	$_POST['Cardname'];
		$Cardnum		=	$_POST['Cardnum'];
		$cvv			=	$_POST['cvv'];
		
		$sql			=	"INSERT into payment (Cardname,Cardnum,cvv) values ('$Cardname','$Cardnum','$cvv')";
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