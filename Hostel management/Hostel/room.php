<?php
include 'connection.php';
if (isset($_POST['submit'])) 
{
	?><script>alert("akjsghd");</script><?php

$a=$_POST["type"];
$b=$_POST["capacity"];
$c=$_POST["roomrent"];

$sql="INSERT INTO `roominfo``(`type`,`capacity` ,`roomrent`) VALUES ('$a',$b,$c)";
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
?>
<html>
<head>

</head>
<body class="subpage">


        
            
           	  <h3>Roominfo</h3>
              
              	
                    
                    <form method="post" name="contact" action="">
					
                    
                            <label for="Name">RoomType:</label> <input name="RoomType" type="text" class="input_field" id="username" maxlength="60" />
                          	<div class="cleaner_h10"></div>
                            
                            <label for="Capacity">Capacity:</label> <input name="Capacity" type="text" class="input_field" id="password" maxlength="60" />
                          	<div class="cleaner_h10"></div>
							
							<label for="Capacity">RoomRent:</label> <input name="RoomRent" type="text" class="input_field" id="password" maxlength="60" />
                          	<div class="cleaner_h10"></div>
							
							 <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Submit" />
                            
                            
							
							
                            
                            
                            
                                          </form>
  </body>
</html>