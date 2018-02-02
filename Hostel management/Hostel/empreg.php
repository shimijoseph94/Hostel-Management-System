<?php  include_once("header.php");
?> 
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Registration</small></h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Registration</li>
              <li class="active"><i class="fa fa-edit"></i> </li>
            </ol>
           
          </div>
        </div>
<?php

if (isset($_POST['submit'])) 
{
	?><script>alert("registration successful");</script><?php
$a=$_POST["Name"];
$b=$_POST["Age"];
$c=$_POST["Emailid"];
$d=$_POST["Place"];
$e=$_POST["Mobileno"];

$k=$_POST["Username"];
$l=$_POST["Password"];
$sql="INSERT INTO `employee`(`Name`,`Age` ,`Emailid`, `Place`, `Mobileno`) VALUES ('$a',$b,'$c','$d','$e')";
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
$result1=mysqli_query($con,"select * from employee ") ;
  while($row=mysqli_fetch_array($result1))
  {
	  $v=$row['Emp_id'];
  }

  //$r=sha1($l);

$sql1="INSERT INTO `login`(`Username`, `Password`, `role`, `status`,`Emp_id`) VALUES ('$k','$l',3,1,'$v')";
echo "$sql1";
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
<style>

</style>
<meta name="keywords" content="ocean blue template, contact page, free css templates, CSS, HTML" />
<meta name="description" content="Ocean Blue Contacts - Free CSS Template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script>

function Name(){
            var Name= document.myForm.Name.value;
                if((Name===null)||(Name.length<3)){
                    
                    alert("Enter Full Name");
                    document.myForm.Name.focus();
                    return false;
                }
                var Name=/^[a-zA-Z ]{4,25}$/;
                if(document.myForm.Name.value.search(Name)==-1)
                 {
                      alert("Enter correct  Name");
                      document.myForm.Name.focus();
                      
                      return false;
                    }
                if((Name.length>25)){
                   
                    alert("Name Must Not Exceed 24 Characters");
                    document.myForm.Name.focus();
                    return false;
                }
        }
		function mob()
{
        var x = document.getElementById('phone').value;
	 // var x=document.phone.value;
        if(isNaN(x)|| x.indexOf(" ")!=-1){
              alert("Enter numeric value");return false; }
        if (x.length > 10 || x.length < 10 ){
                alert("enter 10  digits"); return false;
           }
       // if (x.charAt(0)!="9" || x.charAt(0)!="2"){
               // alert("it should start with 9 or 2 ");
                //return false
           //}
}

function checkEmail() {

    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
 function user()
{
    var name = document.getElementById('uname');
var filter = /^[a-zA-Z]+$/;
if (!filter.test(uname.value)) {
	alert("Please Enter Only Characters");
    uname.focus;
    return false;
 }
    
}
 function pass()
{
        var x = document.usradd.pswd.value;
       
        if (x.length > 4 || x.length < 4 ){
                alert("Minimum 4 Characters"); return false;
           }
       // if (x.charAt(0)!="9" || x.charAt(0)!="2"){
               // alert("it should start with 9 or 2 ");
                //return false
           //}
}


    
}
</script>
<script language="Javascript" type="text/javascript">
 
        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode ==8))
                    return true;
                else
					alert("enter onlyAlphabets");
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
 
    </script>
	<script>
	function ag()
{
        var x = document.getElementById('Age').value;
	 // var x=document.Age.value;
        if(isNaN(x)|| x.indexOf(" ")!=-1){
              alert("Enter numeric value");return false; }
			  if (x.length > 2 || x.length < 2){
                alert("enter 2  digits"); return false;
           }
       // if (x.charAt(0)!="9" || x.charAt(0)!="2"){
               // alert("it should start with 9 or 2 ");
                //return false
           //}
}
</script>


           	  
              
              	<div id="cp_contact_form">
                    
                   <form action="#" name="myForm" method="POST" id="myForm" onsubmit="return valid()" >
                    
                            <label for="Name">Name:</label> <tr>
    <td></td>
    <td style="padding: 20px;"><input type="text" name="Name" pattern="[a-zA-Z\-'\s]+" onkeypress="return onlyAlphabets(event,this);"required /></td>
  </tr>
                          	<div class="cleaner_h10"></div>
                            
                            <label for="Age">Age:</label><tr> 
							 <td></td>
							 <td style="padding: 20px;">
							<input name="Age" type="text"  id="Age" onChange="ag();"/></td>
							</tr>
                          	<div class="cleaner_h10"></div>
							<label for="Email Id">Email Id:</label> <tr>
    
    <td style="padding: 20px;"><input type="text" name="Emailid" id="email" onChange="checkEmail();"/></td>
  </tr>
                          	<div class="cleaner_h10"></div>		

							<label for="Place">Place:</label> <input name="Place"  id="place"onkeypress="return onlyAlphabets(event,this);" /></td>
                            <div class="cleaner_h10"></div>
														
							
                            
                            
                            <div class="cleaner_h10"></div>
							<label for="Mobileno">Mobileno:</label> <tr>
    
    <td style="padding: 20px;"><input type="text" name="Mobileno" id="Mobileno" onChange="mob();"/></td>
  </tr>
                            <div class="cleaner_h10"></div>



							
							<label for="Username">Username:</label> <tr>
    
    <td style="padding: 20px;"><input type="text" name="Username" id="uname" onChange="user();"/></td>
  </tr>
                            <div class="cleaner_h10"></div>
							
							<label for="Password">Password:</label> <tr>
    
    <td style="padding: 20px;"><input type="password" name="Password" id="password" onChange="pass();"/></td>
  </tr>
                            <div class="cleaner_h10"></div>
							
							 <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Submit" />
                            
							
							
                            
                            
                            
                        
                   </form>
    
                </div>
             


          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>