<!DOCTYPE html>
<?php

include 'database.php';
//$email=$_REQUEST["email"];
$email=$_SESSION["email"];


?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>doctor patient portal</title>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---js--->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap1.js"></script>
<!---js--->
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />


    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">





</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="container">
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                  <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="index.html">
                  <h1>DOCTOR PATIENT PORTAL</h1>
              </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="register.php">Home</a></li>
      <!--<li><a href="#"><input name="search" value="" id="searchText" maxlength="256" aria-label="Search query" autocomplete="off" aria-autocomplete="true" aria-controls="searchSuggestionTable" aria-expanded="false" placeholder="Search" type="text" />
        <input id="searchSubmit" onclick="onSearchSubmit(event)" title="Submit search" value="▶" type="button" /></a></li>-->
        <li><a href="profile.php">Profile</a></li>
        <li><a href="change_password_doctor.php">Change Password</a></li>
        <li><a href="edit_profile.php">Edit Profile</a></li>

          <li><a href="View_Appointments.php">Appointments</a></li>
          
       <li><a href="time_alloting.php">Set Time</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
  </nav>


    <!-- Section: intro -->
      <section id="intro" class="intro">

      <div class="slogan">

        <h2>WELCOME TO <span class="text_color">DOCTOR PATIENT PORTAL</span> </h2>

      </div>
      <div class="page-scroll">
        <a href="#profile" class="btn btn-circle">
          <i class="fa fa-angle-double-down animated"></i>
        </a>
      </div>
    </section>
    <!--/Section: intro -->



<!-- Section: Register.Php -->


      <section id="profile" class="home-section text-center">
        <div class="heading-about">
    			<div class="container">
    			<div class="row">
    				<div class="col-lg-8 col-lg-offset-2">
    					<div class="wow bounceInDown" data-wow-delay="0.4s">
    					<div class="section-heading">
    					<h2>your profile</h2>
    					<i class="fa fa-2x fa-angle-down"></i>

    					</div>
    					</div>
    				</div>
    			</div>
        </div>

<?php

        $sql1="SELECT `REGID`, `category_id`, `name`, `gender`, `date_of_birth`, `address`, `email`, `PhoneNo`, `place`, `password`, `created_at` FROM `registration` WHERE `email`='$email'";
        //echo $sql1;
        $sql2="select `REGID` as register_id from `registration` where `email`='$email'";
        $result1=mysqli_query($con,$sql2);
        $row1 = mysqli_fetch_array($result1);
        $register_id = $row1['register_id'];


        $sql2="SELECT `specialization_id` as sid FROM `doctor` WHERE`REGID`='$register_id'";
        $result2=mysqli_query($con,$sql2);
        $row2 = mysqli_fetch_array($result2);
        $specialization_id = $row2['sid'];


        $sql6="SELECT `Specialized_in` as specializated_in FROM `specialization` WHERE `Specilization_id`='$specialization_id'";
        $result6=mysqli_query($con,$sql6);
        $row6 = mysqli_fetch_array($result6);
        $specialization_in = $row6['specializated_in'];

        $sql4="select `doc_id` as doctor_id from `doctor` where `REGID`='$register_id'";
        $result1=mysqli_query($con,$sql4);
        $row2 = mysqli_fetch_array($result1);
        $doctor_id = $row2['doctor_id'];

        $sql5="select `image` as image from `doctor` where `REGID`='$register_id'";
        $result1=mysqli_query($con,$sql5);
        $row3 = mysqli_fetch_array($result1);
        $pict = $row3['image'];


       $sql3="SELECT `doc_id`, `REGID`, `specialization_id`, `image`, `liscence_no` FROM `doctor` WHERE `doc_id`='$doctor_id'";





       $results=mysqli_query($con,$sql1);
       $results1=mysqli_query($con,$sql3);
       while($row=mysqli_fetch_array($results) AND $rows=mysqli_fetch_array($results1))
        {

        //  echo "entered";

?>
<div class="container">

<div class="row">
    <div class="col-lg-8">
        <div class="boxed-grey">

            <form id="register-form" action="" method="post"   role="form" class="contactForm">
            <div class="row">


            <div class="col-md-3">

              <div class="form-group">
                  <label for="photo">
                      Upload photo</label>
                  <img src="<?php echo $rows['image'] ?>" alt="test"   name="photo"    id="photo" height="150" width="150"/>
                  <div class="validation"></div>
              </div>
            </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">
                            Name</label>
                        <input type="text" name="name"  class="form-control" id="name" value="<?php echo $row['name']?>" />
                        <div class="validation"></div>
                    </div>

                    <div class="form-group">
                        <label for="gender">
                            Gender</label></br>
                        <input type="text" name="gender" class="form-control" id="gender" value="<?php echo $row['gender']?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">
                            Date_of_birth</label>
                        <input type="text" name="dob" class="form-control" id="dob" value="<?php echo $row['date_of_birth']?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">
                           Email</label>
                        <input type="text" name="mail" class="form-control" id="mail" value="<?php echo $row['email']?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="address">
                            Address</label>
                        <input type="text" class="form-control" name="address" id="address"  value="<?php echo $row['address']?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="contact">
                            Contact</label>
                        <input type="tel" class="form-control" name="contact"  id="contact" value="<?php echo $row['PhoneNo']?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="place">
                            Place</label>
                        <input type="text" class="form-control" name="place"  id="place" value="<?php echo $row['place']?>"/>
                        <div class="validation"></div>
                    </div>



                  <div class="form-group">
                      <label for="liscence_no">
                          Liscence_No</label>
                      <input type="text" name="liscence_no" class="form-control" id="liscence_no" value="<?php echo $rows['liscence_no']?>" />
                      <div class="validation"></div>
                  </div>
                  <div class="form-group">
                      <label for="specialization">
                          Specialized_in</label>
                      <div class="form-group">
                        <input type="text" class="form-control" name="Specialization_in" id="Specialization_in" value="<?php echo $specialization_in;  ?> "/>


                          <div class="validation"></div>
                      </div>
                  </div>


                </div>
            </div>
            </form>

        </div>
    </div>

 </div>

</div>


<?php   }?>

    	</section>


			<!-- Section: login -->








	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy;SquadFREE. All rights reserved.</p>
                    <div class="credits">
                        <!--
                            All the links in the footer should remain intact.
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Squadfree
                        -->
                        <a href="https://bootstrapmade.com/free-one-page-bootstrap-themes-website-templates/">One Page Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
				</div>
			</div>
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

</body>

</html>
