
<?php
include 'co.php';
if(isset($_POST['submit']))
{
	session_start();
	$username=$_POST["username"];   //username value from the form
	$password=$_POST["password"];	//password value from the form
	//echo $username;
	$sql="select * from login where username='$username' and password='$password'"; //value querried from the table
	$res=mysqli_query($con,$sql);  //query executing function
	//echo $res;
	if($fetch=mysqli_fetch_array($res))
	{
	if($fetch['role']== 2) // role means user , for admin set to 1 and for user set to  
	{
	
		$_SESSION["username"]=$username;	// setting username as session variable 
	header("location:student.php");	//home page or the dashboard page to be redirected
	}
	//else if($fetch['role']== 1) // role means admin, for admin set to 1 and for user set to  
		//{
		//$_SESSION["username"]=$username;	// setting username as session variable 
	    //header("location:admin.php");
	//}
	}
	
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ocean Blue Gallery </title>
<meta name="keywords" content="ocean blue, gallery page, template, free css templates, CSS, HTML" />
<meta name="description" content="Ocean Blue Gallery - Free CSS Template provided by templatemo.com" />
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
    $('#gallery a').lightBox();
});
</script>

</head>
<body class="subpage">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	
        <div id="site_title"><h1><a href="http://www.templatemo.com">Ocean Blue</a> </h1></div>
        
        
        
        <div class="cleaner"></div>
    </div>
    
    <div id="templatemo_menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="gallery.php" class="current">Gallery</a></li>
            <li><a href="news.html">News</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>    	
        <div class="cleaner"></div>
    </div> <!-- end of templatemo_menu -->
    
    <div id="templatemo_middle_subpage">
    	<h2>Login</h2>
        
        
    <div id="templatemo_main">

        <div class="col_w900 col_w900_last">
        
            <div class="col_w420 float_l">
            
           	  <h3>Login</h3>
              
              	<div id="cp_contact_form">
                    
                    <form method="post" name="contact" action="">
                    
                            <label for="Name">Username:</label> <input name="Name" type="text" class="input_field" id="Name" maxlength="60" />
                          	<div class="cleaner_h10"></div>
                            
                            <label for="Password">Password:</label> <input name="Age" type="text" class="input_field" id="Age" maxlength="60" />
                          	<div class="cleaner_h10"></div>
                            
                            
							
							
                            
                            
                            
                        
                   </form>
    
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