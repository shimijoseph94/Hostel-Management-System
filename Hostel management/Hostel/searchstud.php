<?php  include_once("header.php"); ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>View Room Details</small></h1>
            
            <!--<div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Visit <a class="alert-link" target="_blank" href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a> for more information.
            </div>-->
          </div>
        </div><!-- /.row -->

<html>

<head>



</head>
<body>

  <!--<ul>
    
   <li ><a href="search.php">Search</a></li>

             
   <li> <a href="movementdetails.php" >MovementDetails</a></li>       
   <li><a href="complaintdetails.php">ComplaintDetails</a></li>
             <li><a href="logout.php">Logout</a></li>
           </ul><br>
<br> <br>-->
<form  action="" method="post" > 
    <center>
       

<h4>Please enter the branch</h4>
 <br>
       
<input type="text" name="department"> <br>
		<br>
		<br>
        <input type="submit" name="submit" value="Search">
   
</form><br>
<br>
<br>
<center>
<table border=1>
<tr>
<td>Reg_id</td>
<td>Name</td>
<td>Age</td>
<td>Fathersname</td>
<td>Mothersname</td>
<td>Emailid</td>
<td>Place</td>
<td>Department</td>
<td>Branch</td>
<td>Semester</td>


</tr>

<?php
include 'connection.php';
if(isset($_POST["submit"]))
{
$b=$_POST['Dept_id'];
    $results=mysqli_query($con,"select * from registration where Dept_id='$b'");
  while($row=mysqli_fetch_array($results))
  {
?>
<tr>
<td><?php echo $row['Reg_id'];?></td>
<td><?php echo $row['Name'];?></td>
<td><?php echo $row['Age'];?></td>
<td><?php echo $row['Fathersname'];?></td>
<td><?php echo $row['Mothersname'];?></td>
<td><?php echo $row['Emailid'];?></td>
<td><?php echo $row['Place'];?></td>

<td><?php echo $row['Dept_name'];?></td>
<td><?php echo $row['Branch_name'];?></td>
<td><?php echo $row['Sem_name'];?></td>



</tr>
<?php

}
}
?>
</table>
 </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
</BODY>
</html>
