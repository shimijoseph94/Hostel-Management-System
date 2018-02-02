
<?php  include_once("header1.php"); ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1></small></h1>
            
            <!--<div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Visit <a class="alert-link" target="_blank" href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a> for more information.
            </div>-->
          </div>
        </div><!-- /.row --><?php
		$id=$_SESSION["Username"];
		
        
		$sql1="SELECT * FROM `registration`,`login` WHERE login.Reg_id=Registration.Reg_id AND `Username`='$id'";
      
        $result1=mysqli_query($con,$sql1);
        
		
?>

<?php
    
    
    if(!isset($_SESSION['Username'])){
        header("location:index.php");
    }
	?>
<html>
<head>



</head>
<body>

<div class="container">


	<div class="col-sm-6" style="border:1px solid black;">
	<h1>Manage Profile</h1>
	
	
	<center><img src="images/images.jpeg" width="200px" height="165"></center>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<!--<div class="col-md-6"style="border:1.5px solid black;">-->
	
	
	
	
                    
                        
	</div>
        <div class="boxed-grey">
		</div> 
		
	<div class="row">
    <div class="col-sm-6" 
                    <div class="form-group">
<?php
while($row=mysqli_fetch_array($result1))
{
	
?>
            <form id="register-form" action="" method="post"   role="form" class="contactForm">
            <div class="row">


            <div class="col-md-3">

              <div class="form-group">
                 <!-- <label for="photo">
                      Upload photo</label>
                  <img src="<?php echo $row['image'] ?>" alt="test"   name="photo"    id="photo" height="150" width="150"/>-->
                  <div class="validation"></div>
              </div>
            </div>
			

                <div class="col-md-6" style="border:1px solid black;">
                    <div class="form-group">
					
					<h1>Profile Details</h1>
                        <label for="name">
                            Name</label>
                        <input type="text" name="Name"  class="form-control" id="Name" value="<?php echo $row['Name']?>" />
                        <div class="validation"></div>
                    </div>

                    <div class="form-group">
                        <label for="gender">
                            Age</label></br>
                        <input type="text" name="Age" class="form-control" id="Age" value="<?php echo $row['Age']?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="">
                            Fathersname</label>
                        <input type="text" name="Fathersname" class="form-control" id="Fathersname" value="<?php echo $row['Fathersname']?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">
                           Mothersname</label>
                        <input type="text" name="Mothersname" class="form-control" id="Mothersname" value="<?php echo $row['Mothersname']?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="address">
                            Mobileno`</label>
                        <input type="text" class="form-control" name="Mobileno" id="Mobileno"  value="<?php echo $row['Mobileno']?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="contact">
                            Emailid</label>
                        <input type="tel" class="form-control" name="Emailid"  id="Emailid" value="<?php echo $row['Emailid']?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="place">
                            HouseName</label>
                        <input type="text" class="form-control" name="HouseName"  id="HouseName" value="<?php echo $row['HouseName']?>"/>
                        <div class="validation"></div>
                    </div>



                  <div class="form-group">
                      <label for="liscence_no">
                          Place</label>
                      <input type="text" name="Place" class="form-control" id="Place" value="<?php echo $row['Place']?>" />
                      <div class="validation"></div>
                  </div>
				  </div>
                  
                  </div>


                </div>
            </div>
            </form>
<?php } ?>
        </div>
    </div>

 </div>

</div>




 </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
</BODY>
</html>
