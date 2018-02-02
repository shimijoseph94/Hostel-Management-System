<?php  include_once("header.php"); ?>
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

<div align="right">
  <table width="1200" border="1">
    <tr>
    <td colspan="10"><div align="center"color=><h1><em>Student Details</em></h1></div>    </tr>
    <tr>
	<td width="83">Reg_id</td>
      <td width="62">Name</td>
	  <td width="62">Age</td>
      <td width="45">Fathersname</td>
	  <td width="62">Mothersname</td>
      <td width="150">Emailid</td>
      
       <td width="49">HouseName</td>
      <td width="100">Place</td>
	  <td width="83">Department</td>
	  <td width="83">Branch</td>
	  <td width="83">Semester</td>
	  
    </tr>
	<?php
 $sql3=("select * from registration,semester where registration.Sem_id=Semester.Sem_id" );
	$result3=mysqli_query($con,$sql3);
	while($row3=mysqli_fetch_array($result3))
 {
	 $Sem=$row3['Sem_name'];
 }
	 ?>
	<?php
 $sql2=("select * from registration,branch where registration.Branch_id=branch.Branch_id" );
	$result2=mysqli_query($con,$sql2);
	while($row2=mysqli_fetch_array($result2))
 {
	 $Branch=$row2['Branch_name'];
 }
	 ?>
	<?php
 $sql1=("select * from registration,department where registration.Dept_id=department.Dept_id" );
	$result1=mysqli_query($con,$sql1);
	while($row1=mysqli_fetch_array($result1))
 {
	 $Dept=$row1['Dept_name'];
 }
	 ?>
    <?php
	$sql=("select * from registration" );
	$result=mysqli_query($con,$sql);
	
 while($row=mysqli_fetch_array($result))
 {
	 
?>
    <tr>
	<td><?php echo $row["Reg_id"]?></td>
      <td><?php echo $row["Name"]?></td>
	  <td><?php echo $row["Age"]?></td>
    <td><?php echo $row["Fathersname"]?></td>
    <td><?php echo $row["Mothersname"]?></td>
	<td><?php echo $row["Emailid"]?></td>
	<td><?php echo $row["HouseName"]?></td>
    <td><?php echo $row["Place"]?></td>
    <td><?php echo $Dept?></td>
	<td><?php echo $Branch?></td>
	<td><?php echo $Sem?></td>
	
	
    </td>
         
     

    <?php
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