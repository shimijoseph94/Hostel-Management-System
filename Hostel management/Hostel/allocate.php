<?php  include_once("header.php"); 
$id=$_SESSION["Username"];?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Room Allocation</small></h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i>Room Allocation</li>
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
<td>Room Type:</td>
<td>
							
<select name="drop1">
<?php
$results= mysqli_query($con,"select * from roominfo");
$i=1;
while($row=mysqli_fetch_array($results))
{?>
	<option value="<?php echo $row['roomid']; ?>"><?php echo $row['type']; ?></option>

<?php }
?></select>
<tr>
 
                <div class="form-group">
                	<label>Roomno</label>
               		<input type="text" name="Roomno" value="" required  class="form-control"/>
              	</div>
                
                
 				
             
             
 					<input type="submit" name="submit" class="btn btn-primary btn-xs" value="SUBMIT">

            </form>
       </form>
            <?php
	$result1=mysqli_query($con,"SELECT * from registration where Name='$id'") ;
	echo $result1;
  while($row1=mysqli_fetch_array($result1))
  {
	  $v=$row1['Reg_id'];
	  
  }
 

	
		
			if(isset($_POST['submit'])){
	
		$Type			=	$_POST['drop1'];
		$Roomno			=	$_POST['Roomno'];
		
		
		
		
		$sql ="INSERT into `roomallotment`  (`roomid`,`Reg_id`,`Roomno`) VALUES ('$Type','$v','$Roomno')";
		$res=mysqli_query($con,$sql);
		
	
		echo "<script>alert('Successfull');</script>";
		
	}}
	
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