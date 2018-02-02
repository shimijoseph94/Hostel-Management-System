<?php  include_once("header3.php");
?> 
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Student Details</small></h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Student Details</li>
              <li class="active"><i class="fa fa-edit"></i> </li>
            </ol>
            <body background="images/bg.jpg">
<table border=5px style="width:3px; margin-left:0%; margin-top:10%;color:black;">
<form action="" method="post"> 
 <br><br><br><br><tr> 
<center>Search: <input type="text" name="Dept_Name" /> <input type="submit" value="Submit" /></center>
<tr>
</form>  

<table border=1 align="center">
<tr>

</tr>
<tr>
<td>NAME</td>
<td>AGE</td>
<td>FATHERSNAME</td>
<td>MOTHERSNAME</td>
<td>MOBILENO</td>
<td>EMAILID</td>
<td>HOUSENAME</td>
<td>PLACE</td>
</tr>

<?php
if (!empty($_REQUEST['Dept_Name'])) {

$Dept_Name= mysql_real_escape_string($_REQUEST['Dept_Name']);     

//$sql = "SELECT NAME,Age ,Fathersname,Mothersname,Mobileno,Emailid,HouseName,Place FROM registration WHERE department LIKE '%".$Dept_id."%'"; -->
$sql = "SELECT * FROM `registration`,`department` WHERE department.Dept_id=registration.Dept_id and Dept_Name='$Dept_Name'";
 $result3=mysqli_query($con,$sql) or die(mysqli_error());
while($row3 = mysqli_fetch_array($result3)){
	?>
<tr>
<td><?php  echo $row3['Name']?> </td>
 <td><?php echo $row3['Age']?> </td>
<td><?php  echo $row3['Fathersname']?> </td> 
<td><?php echo $row3['Mothersname']?> </td>
<td><?php  echo $row3['Mobileno']?> </td>
<td><?php echo $row3['Emailid']?> </td>
<td><?php  echo $row3['HouseName']?> </td> 
<td><?php  echo $row3['Place']?> </td> 
<?php
}  

}
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