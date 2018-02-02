<?php
include 'database.php';
echo "hello";
$email=$_SESSION["email"];
echo $email;
//$doc_id=$_REQUEST['doc_id'];
//echo $doc_id;
if(isset($_POST['edit']))
{
echo "hai";
$name=$_POST["name"];
$category_name=$_POST["category"];
$dob=$_POST["dob"];
$email=$_POST["mail"];
$address=$_POST["address"];
$contact=$_POST["contact"];
$place=$_POST["place"];
$password=$_POST["password"];
$image=$_POST["pic"];
$liscenceno=$_POST["liscence_no"];
$Specialization_in=$_POST["Specialization_in"];
echo $name;


$sql= "select `REGID` as cid from `registration` where `email`='$email'";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$reg_id = $row['cid'];
echo $reg_id;

$sql3= "select `doc_id` as did from `doctor` where `REGID`='$reg_id'";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$doc_id = $row['did'];
echo $reg_id;

$sql1="UPDATE `registration` SET `name`='$name',`date_of_birth`='$dob',`address`='$address',`email`='$email',`PhoneNo`='$contact',`place`='$place',`password`='$password' WHERE `REGID`='$reg_id'";

$results1=mysqli_query($con,$sql1);

$sql3="select `Specilization_id` as sid from `specialization` where `Specialized_in `='$Specialization_in'";
$result1=mysqli_query($con,$sql3);
$row1 = mysqli_fetch_array($result1);
$sname = $row1['sid'];
echo $sname;



$sql2="UPDATE `doctor` SET `specialization_id`='$sname',`image`='$image',`liscence_no`='$liscenceno' WHERE `doc_id`='$doc_id'";
$results2=mysqli_query($con,$sql2);

if($results1 AND $results2){
  header('Location:profile_update.php?success=Data updated successfully');
}else{
  header('Location:profile_update.php?error=Data not updated');
}
 }
?>
