
<?php  include_once("header1.php"); ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1></small></h1>
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
<?php

SESSION_start();

$u=$_SESSION["Username"];
$sql="select * from registration where Username='$u'";
//echo $sql;

    $results=mysqli_query($con,$sql);

  while($row=mysqli_fetch_array($results))
  {
?>
Updated Your data successfully.....


<html>
<haed>
</head>
<body background="bg.jpg">
<center>
<table>


<tr>
<td>Name:</td>
<td><?php echo $row['Name'];?></td>
</tr>
<tr>
<td>Age:</td>
<td><?php echo $row['Age'];?></td>
</tr>
<tr>
<td>Fathersname:</td>
<td><?php echo $row['Fathersname'];?></td>
</tr>
<tr>
<td>Mothersname:</td>
<td><?php echo $row['Mothersname'];?></td>
</tr>
<tr>
<td>Mobileno:</td>
<td><?php echo $row['Mobileno'];?></td>
</tr>
<tr>
<td>Emailid:</td>
<td><?php echo $row['Emailid'];?></td>
</tr>


<tr>
<td>Housename:</td>
<td><?php echo $row['HouseName'];?></td>
</tr>
<tr>
<td>Place:</td>
<td><?php echo $row['Place'];?></td>
</tr>

<?php
}
?>
</table>
<a href="student.php" target="_blank">done</a>
</center>

   </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>


