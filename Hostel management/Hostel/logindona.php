<?php
 session_start();
 $db=mysqli_connect("localhost","root","","home services");

if (isset($_POST['submit']))
{
   //echo"hai";
   $username=$_POST["uname"];   //username value from the form
   $password=$_POST["psw"];	//password value from the form
   $sql="select role,Reg_id from login where username='$username' and password='$password'"; //value querried from the table
         //echo $sql;
   $res=mysqli_query($db,$sql);  //query executing function

   if($fetch=mysqli_fetch_array($res)){
     if($fetch['role']==0) // role means user , for admin set to 0 and for user set to
     {
       $_SESSION["uname"]=$fetch['Reg_id'];	// setting username as session variable
                  header("location:dashboard.php");	//home page or the dashboard page to be redirected
            }
         else
             if($fetch['role']==1) // role means user , for admin set to 0 and for user set to
             {
                   $_SESSION["uname"]=$fetch['Reg_id'];	// setting username as session variable
                  header("location:userindex.php");	//home page or the dashboard page to be redirected
           }


    }	 
else{
    $message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	}

}
?>
<!DOCTYPE html>
<html >
<meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet"  href="css/component.css" />
  <link rel="stylesheet" type="text/css" href="css/tooltipster.css" />
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.2.1.js"></script>
     <script src="js/script.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/jquery.tooltipster.js"></script>
     <script src="js/camera.js"></script>
     <!--[if (gt IE 9)|!(IE)]><!-->
     <script src="js/jquery.mobile.customized.min.js"></script>
     <!--<![endif]-->
    <script src="js/modernizr.custom.js"></script>
     <script>
       $(document).ready(function(){
        jQuery('#camera_wrap').camera({
            loader: 'pie',
            pagination: true ,
            minHeight: '200',
            thumbnails: true,
            height: '40.85106382978723%',
            caption: true,
            navigation: true,
            fx: 'mosaic'
          });
        $().UItoTop({ easingType: 'easeOutQuart' });
               $('.tooltip').tooltipster();

        });
     </script>
	 <style>
body
{
   background-image:url("loginform.jpg");

}
a{
	color:black;
}
h2{
	color:black;
}
form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  width: 10%;
  border: 50%;
  padding: 15px;
  color:blue;
  cursor: pointer;
}
</style>
<header>
  <div class="container_12">
    <div class="grid_12">
        <h1>
        <!-- <a href="index.html">
          <img src="logo.jpg" alt="Your Happy Family"></a> -->
      </h1>
        <div class="menu_block ">
          <nav class="horizontal-nav full-width horizontalNav-notprocessed">
            <ul class="sf-menu">
           
            
             <li><a href="index.php"><h2>Home</h2></a></li>
                 <li><a href="login.php"><h2>Login</h2></a></li>
                 <li><a href="register.php"><h2>Register</h2></a></li>


   </div>
 </div>
               </ul>
            </nav>
           <div class="clear"></div>
        </div>
      </div>
   </div>
</header>
<head>
  <title>Login Form</title>
  <script>
  function validation()
  {
  	var uname=document.myform.uname.value;
  	if((uname == null) || (uname.length == 0)){
  	alert("Enter username!");
  	document.myform.uname.focus();
  	return false;
  	}
  	return true;
          }
  </script>
</head>

<body>
  <div class="login-page">
  <div class="form">
<center>
    <form class="login-form" action="#" name="myform" method="post" onsubmit="return validation();">

      <input type="text" placeholder="username" name="uname"/><br><br>
      <input type="password" placeholder="password" name="psw"/><br><br>
      <button type="submit" name="submit" value="submit">LOGIN</button><br>
      <p class="message">Find Jobs ? <a href="eregister.php">Clickme</a></p>
      <p class="message">New User? <a href="Register.php"</a>REGISTER</p>

    </form></center>
	
  </div>
</div>



<!--==============================footer=================================-->
<footer>
    <div class="container_12">

      <div class="grid_12">
      <div class="socials">
      <section id="facebook">
        <a href="#" target="_blank"><span id="fackbook" class="tooltip" title="Link us on Facebook">f</span></a>
        </section>
        <section id="twitter">
        <a href="#" target="_blank"><span id="twitter-default" class="tooltip" title="Follow us on Twitter">t</span></a>
        </section>
        <section id="google">
        <a href="#" target="_blank"><span id="google-default" class="tooltip" title="Follow us on Google Plus">g<span>+</span></span></a>
        </section>
        <section id="rss">
        <a href="#" target="_blank"><span id="rss-default" class="tooltip" title="Follow us on Dribble">d</span></a>
        </section>
        </div>
        <div class="copy">
        YourHome &copy; 2014  |  <a href="#">Privacy Policy</a> <br> Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com  </a>
        </div>

      </div>
    </div>
</footer>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index1.js"></script>

</body>
</html>
