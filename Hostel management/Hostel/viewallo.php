<?php  include_once("header1.php");

$id=$_SESSION["Username"];?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Add Details</small></h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Add Details</li>
              <li class="active"><i class="fa fa-edit"></i> </li>
            </ol>
            <!--<div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Visit <a class="alert-link" target="_blank" href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a> for more information.
            </div>-->
          </div>
		  <title></title>

<body style="background-image:new1.jpg">

<?php

$id=$_SESSION['Username'];?>


<br>
<br>
<br>
<br>
<br>
<table border=5px style="width:1px; margin-left:0%; margin-top:10%;color:black;">
<tr><th>Roomid</th><th>Roomno</th></tr>
<?php 
$sql="select * from roomallotment ";


$result=mysqli_query($con,$sql);

if($row=mysqli_fetch_array($result))
{
	?>
	
	
	<tr>	
	<form name="myform" action="viewallo.php" method="post">
	<!--<td><input type="text" name="Mid" value="<?php echo $row['Mid']?>"></td>-->
	
	<td><input type="text" name="Roomid" value="<?php echo $row['Roomid']?>"></td>
	<td><input type="text" name="Roomno" value="<?php echo $row['Roomno']?>"></td>
	
	
	 
	 
	  
	<!-- <td><input type="submit" name="Approve" value="Approve"><a href="aa.php?id=<?php echo $row['Username'];?>">gfgfggg</a>-->
	 
	</tr>
	</form>
	
	<?php
	}
?>  
        </div><!-- /.row -->