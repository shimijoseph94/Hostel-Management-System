<?php
$id=$_POST["Username"];
$a=$_POST["Name"];
$b=$_POST["Age"];
$c=$_POST["FathersName"];
$d=$_POST["MothersName"];
$e=$_POST["Mobileno"];
$f=$_POST["EmailId"];
$g=$_POST["HouseName"];

include 'connection.php';
$sql="update `registration` SET `a` = '$Name', `b` = '$Age', `c` = '$FathersName', `d` = '$MothersName', `e` = '$Mobileno', `f` = '$EmailId',`f` = '$HouseName' WHERE ``.`id` = '$id' ";
 WHERE `dailyprayer`.`id` = '$id' ";
$results=mysqli_query($con,$sql);


header("location:admview.php");
?>