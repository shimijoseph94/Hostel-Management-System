<?php
include 'connection.php';
if (isset($_POST['submit'])) 
{
	?><script>alert("akjsghd");</script><?php
$a=$_POST["Name"];
$b=$_POST["Age"];
$c=$_POST["FathersName"];
$d=$_POST["MothersName"];
$e=$_POST["Mobileno"];
$f=$_POST["EmailId"];
$g=$_POST["HouseName"];
$h=$_POST["drop1"];
$i=$_POST["drop2"];
$j=$_POST["drop3"];
$k=$_POST["Username"];
$l=$_POST["Password"];
$sql="INSERT INTO `registration`(`Name`,`Age` ,`Fathersname`, `Mothersname`, `Mobileno`, `Emailid`, `HouseName`,`Dept_id`,`Sem_id`,`Branch_id`) VALUES ('$a',$b	,'$c','$d','$e','$f','$g',$h,$i,$j)";
//$result=mysqli_query($con,$sql);
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
if($result==1)
{
	echo("register sucessfully");
}
else
{
	echo("Failed..");
}
$sql1="INSERT INTO `login`(`Username`, `Password`, `Role`) VALUES ('$k','$l',2)";
//print_r($sql1);
$result1=mysqli_query($con,$sql1);
//echo"<script> alert('registration successful');</script>";
//echo "datas are entered..!!";
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ocean Blue - Registration</title>
<meta name="keywords" content="ocean blue template, contact page, free css templates, CSS, HTML" />
<meta name="description" content="Ocean Blue Contacts - Free CSS Template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" />    
    
<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
<!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->

<!-- Ativando o jQuery lightBox plugin -->
<script type="text/javascript">
$(function() {
    $('#map a').lightBox();
});
</script>

</head>
<body class="subpage">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	
        <div id="site_title"><h1><a href="http://www.templatemo.com">St Marys Hostel</a> <span></span></h1></div>
        
        
        
        <div class="cleaner"></div>
    </div>
    
    <div id="templatemo_menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            
            <li><a href="news.php">News</a></li>
            
            <li><a href="Registration.php" class="current">Contact</a></li>
        </ul>    	
        <div class="cleaner"></div>
    </div> <!-- end of templatemo_menu -->
    
    <div id="templatemo_middle_subpage">
    	<h2>Registration</h2>
        
        
    <div id="templatemo_main">

        <div class="col_w900 col_w900_last">
        
            <div class="col_w420 float_l">
            
           	  <h3>Registration Form</h3>
              
              	<div id="cp_contact_form">
                    
                    <form method="post" name="contact" action="">
                    
                            <label for="Name">Name:</label> <input name="Name" type="text" class="input_field" id="Name" maxlength="60" />
                          	<div class="cleaner_h10"></div>
                            
                            <label for="Age">Age:</label> <input name="Age" type="text" class="input_field" id="Age" maxlength="60" />
                          	<div class="cleaner_h10"></div>
                            
                            <label for="FathersName">FathersName:</label> <input name="FathersName" type="text" class="input_field" id="Fathers Name" maxlength="60" />
                            <div class="cleaner_h10"></div>
							
							<label for="MothersName">MothersName:</label> <input name="MothersName" type="text" class="input_field" id="Mothers Name" maxlength="60" />
                            <div class="cleaner_h10"></div>
							<label for="Mobileno">Mobileno:</label> <input name="Mobileno" type="text" class="input_field" id="Mobile Number" maxlength="60" />
                            <div class="cleaner_h10"></div>

<label for="Email Id">Email Id:</label> <input name="EmailId" type="text" class="input_field" id="EmailId" maxlength="60" />
                          	<div class="cleaner_h10"></div>							
							

                            <label for="HouseName">HouseName:</label> <input name="HouseName" type="text" class="input_field" id="HouseName" maxlength="60" />
                            <div class="cleaner_h10"></div>
							
							<label for="Place">Place:</label> <input name="Place" type="text" class="input_field" id="HouseName" maxlength="60" />
                            <div class="cleaner_h10"></div>
							
							
							<tr>
<td>Department:</td>
<td>
							<?php
include 'connection.php';
?>
<select name="drop1">
<?php
$results= mysqli_query($con,"select * from department");
$i=1;
while($row=mysqli_fetch_array($results))
{?>
	<option value="<?php echo $row['Dept_id']; ?>"><?php echo $row['Dept_name']; ?></option>

<?php }
?></select>
<tr>
<td>Semester:</td>
<td>
<?php
include 'connection.php';
?>
<select name="drop2">
<?php
$results= mysqli_query($con,"select * from semester");
$i=1;
while($row=mysqli_fetch_array($results))
{?>
	<option value="<?php echo $row['Sem_id']; ?>"><?php echo $row['Sem_name']; ?></option>

<?php }
?></select>
<tr>
<td>Branch:</td>
<td>
<?php
include 'connection.php';
?>
<select name="drop3">
<?php
$results= mysqli_query($con,"select * from branch");
$i=1;
while($row=mysqli_fetch_array($results))
{?>
	<option value="<?php echo $row['Branch_id']; ?>"><?php echo $row['Branch_name']; ?></option>

<?php }
?></select>
							
							
							<label for="Username">Username:</label> <input name="Username" type="text" class="input_field" id="Username" maxlength="60" />
                            <div class="cleaner_h10"></div>
							
							<label for="Password">Password:</label> <input name="Password" type="Password" class="input_field" id="Password" maxlength="60" />
                            <div class="cleaner_h10"></div>
							
							 <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Submit" />
                            
							
							
                            
                            
                            
                        
                   </form>
    
                </div>
               
            </div>
            
            <div class="col_w420 float_r" id="map">
            
            	<h3>Map</h3>
                
                <a href="images/map_big.jpg" title="location map">
                    <img src="images/map_thumb.jpg" alt="location map" />
                </a>

				<div class="cleaner h30"></div>
                                
                <h3>Our Address</h3>
                
                	<h6>Company Name</h6>
                   	  	380-260 Vitae urna blandit est egestas, <br />
                        Pulvinar sit amet convallis eget, 12880<br />
						Lorem ipsum dolor<br />
                		<br />
                     	Tel: 020-040-4400<br />
                        Fax: 020-040-8800
            </div>
            
            <div class="cleaner"></div>
		</div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->
        
</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    	
        Copyright © 2048 <a href="#">Your Company Name</a> - 
        Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
    
    </div> <!-- end of footer wrapper -->
</div> <!-- end of footer -->

</body>
</html>