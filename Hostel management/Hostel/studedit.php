?php  include_once("header.php"); ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Student Details</small></h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Student Details</li>
              <li class="active"><i class="fa fa-edit"></i> </li>
            </ol>
            <!--<div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Visit <a class="alert-link" target="_blank" href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a> for more information.
            </div>-->
          </div>
        </div><!-- /.row -->
<body background="images/bg.jpg">
<table border=5px style="width:3px; margin-left:0%; margin-top:10%;color:black;">
<tr><th>Reg_id</th><th>Name</th><th>Age</th><th>Fathersname</th><th>Mothersname</th><th>Emailid</th><th>HouseName</th><th>Place</th></tr>


	
	
    
	
    
<?php
$id=$_REQUEST['Username'];

$sql=("select * from registration where id=$id" );
$results=mysqli_query($con,$sql);
//echo $sql;
$row=mysqli_fetch_array($results);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
html{
background:url('jky.png') no-repeat center fixed;
background-size:cover;
}
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> edit</title>
</style>
</head>

<body>
<form action="studupdate.php" method="post">


	<td><input type="text" name="Reg_id" value="<?php echo $row['Reg_id']?>"></td>
	<td><input type="text" name="Name" value="<?php echo $row['Name']?>"></td>
	<td><input type="text" name="Age" value="<?php echo $row['Age']?>"></td>
	<td><input type="text" name="Fathersname" value="<?php echo $row['Fathersname']?>"></td>
	<td><input type="text" name="Mothersname" value="<?php echo $row['Mothersname']?>"></td>
	<td><input type="text" name="Emailid" value="<?php echo $row['Emailid']?>"></td>
	<td><input type="text" name="HouseName" value="<?php echo $row['HouseName']?>"></td>

<td><input type="hidden" name="id" value="<?php echo $row['id']; ?>" /> </td>
<td> <input type="submit" value="update"  name="ok"/> </td>

</form></table>
</body>
</html>

	 <?php