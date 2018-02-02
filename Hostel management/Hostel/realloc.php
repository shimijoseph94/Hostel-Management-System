<?php  include_once("header3.php");

?> 
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Deallocated Student Details</small></h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> DeallocatedStudent Details</li>
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
<tr><th>Reg_id</th><th>Name</th><th>Age</th><th>Fathersname</th><th>Mothersname</th><th>Emailid</th><th>HouseName</th><th>Place</th><th>Department</th><th>Branch</th><th>Semester</th><th>ACTION</th></tr>


	
	 <?php
 $sql1="select r.*,d.Dept_name,s.Sem_name,b.Branch_name  from roomallotment ra join registration r on ra.reg_id=r.Reg_id join department d on r.Dept_id=d.Dept_id
 join semester s on s.Sem_id=r.Sem_id join Branch B on B.branch_id=r.Branch_id where allocation_status=0 and ra.status=1";
	//$sql1="SELECT * FROM  `registration` WHERE  `allocation_status` =0";
	
	$result1=mysqli_query($con,$sql1);
	while($row=mysqli_fetch_array($result1))
	{
 
	
	 
?>


    <tr>	
	<form name="myform" action="#" method="post">
	
	<!--<td><input type="text" name="Reg_id" value="--><td><?php echo $row['Reg_id'];?></td>
	<!--<td><input type="text" name="Name" value="--><td><?php echo $row['Name'];?></td>
	<!--<td><input type="text" name="Age" value="--><td><?php echo $row['Age'];?></td>
	<!--<td><input type="text" name="Fathersname" value="--><td><?php echo $row['Fathersname'];?></td>
	<!--<td><input type="text" name="Mothersname" value="--><td><?php echo $row['Mothersname'];?></td>
	<!--<td><input type="text" name="Emailid" value="--><td><?php echo $row['Emailid'];?></td>
	<!--<td><input type="text" name="HouseName" value="--><td><?php echo $row['HouseName'];?></td>
	<!--<td><input type="text" name="Place" value="--><td><?php echo $row['Place'];?></td>
 <!--<td><input type="text" name="Department" value="--><td><?php echo $row['Dept_name'];?></td>
	<!--<td><input type="text" name="Branch" value="--><td><?php echo $row['Branch_name'];?></td>
	<!--<td><input type="text" name="Semester" value="--><td><?php echo $row['Sem_name'];?></td>
	<td><a href="jj.php?id=<?php echo $row['Reg_id'];?>">Allocate</a></td>
	
	
	
	 <input type="hidden" name="rid" value="<?php echo $row['Reg_id'];?>"></input>
	 <!--<td><input type="submit" value="ALLOCATE" name="alloc"></td>
	 -->

	 </form>
	
	 
	 
	 
	</tr>
	</form>
	
	
	
	
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