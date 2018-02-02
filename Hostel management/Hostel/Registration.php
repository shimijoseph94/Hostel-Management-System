<?php
include 'connection.php';

if (isset($_POST['submit'])) 
{
	?><script>alert("registration successful");</script><?php
$a=$_POST["Name"];
$b=$_POST["Age"];
$c=$_POST["FathersName"];
$d=$_POST["MothersName"];
$e=$_POST["Mobileno"];
$f=$_POST["EmailId"];
$g=$_POST["HouseName"];
$m=$_POST["Place"];
$h=$_POST["drop1"];
$i=$_POST["drop2"];
$j=$_POST["drop3"];
$k=$_POST["Username"];
$l=$_POST["Password"];
$sql="INSERT INTO `registration`(`Name`,`Age` ,`Fathersname`, `Mothersname`, `Mobileno`, `Emailid`, `HouseName`,`Place`,`Dept_id`,`Sem_id`,`Branch_id`) VALUES ('$a',$b	,'$c','$d','$e','$f','$g','$m',$h,$i,$j)";
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
$result1=mysqli_query($con,"select * from registration ") ;
  while($row=mysqli_fetch_array($result1))
  {
	  $v=$row['Reg_id'];
  }

  //$r=sha1($l);

$sql1="INSERT INTO `login`(`Username`, `Password`, `role`, `status`,`Reg_id`) VALUES ('$k','$l',2,1,'$v')";
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

<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" />    
    
<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
<script src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
<!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->

<!-- Ativando o jQuery lightBox plugin -->


</head>

<body class="subpage">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	
        <!--<div id="site_title"><h1><a href="http://www.templatemo.com">St Marys Hostel</a> <span></span></h1></div>-->
        
        
        
        <div class="cleaner"></div>
    </div>
	


    
    <div id="templatemo_menu">
        <ul>
            <li><a href="indexx.php">Home</a></li>
            
           <!-- <li><a href="news.php">News</a></li>
            
            <li><a href="Registration.php" class="current">Contact</a></li>-->
        </ul>    	
        <div class="cleaner"></div>
    </div> <!-- end of templatemo_menu -->
	
    
    <div id="templatemo_middle_subpage">
    	<h2>Registration</h2>
        
        
    <div id="templatemo_main">

        <div class="col_w900 col_w900_last">
        
            <div class="col_w420 float_l">
            
           	  
              
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
                            
                            <label for="FathersName">FathersName:</label> <tr>
   
    <td></td>
    <td style="padding: 20px;"><input type="text" name="FathersName" onkeypress="return onlyAlphabets(event,this);" /></td><td>
  </tr>
                            <div class="cleaner_h10"></div>
					
							<label for="MothersName">MothersName:</label> <tr>
   
    <td></td>
    <td style="padding: 20px;"><input type="text" name="MothersName" onkeypress="return onlyAlphabets(event,this);" /></td>
  </tr>
                            <div class="cleaner_h10"></div>
							<label for="Mobileno">Mobileno:</label> <tr>
    
    <td style="padding: 20px;"><input type="text" name="Mobileno" id="phone" onChange="mob();"/></td>
  </tr>
                            <div class="cleaner_h10"></div>

<label for="Email Id">Email Id:</label> <tr>
    
    <td style="padding: 20px;"><input type="text" name="EmailId" id="email" onChange="checkEmail();"/></td>
  </tr>
                          	<div class="cleaner_h10"></div>							
							

                            <label for="HouseName">HouseName:</label> <input name="HouseName"  id="HouseName"onkeypress="return onlyAlphabets(event,this);" /></td>
                            <div class="cleaner_h10"></div>
							
							<label for="Place">Place:</label> <input name="Place"  id="Place"onkeypress="return onlyAlphabets(event,this);" /></td>
                            <div class="cleaner_h10"></div>
							
							
							<tr>
<td>Department:</td>
<td>
							
<select name="drop1" id="dept_select">
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
<select name="drop3" id="branch_select">
</select>

							
							
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



<script>
	$("#dept_select").on("change",function(){
		$dept=$(this).val();
		$.ajax({
			type:'post',
			url:'get_branch.php',
			data:{dept:$dept},
			success:function(response){
				$("#branch_select").html(response);
			}
		});
	});
</script>
</body>
</html>