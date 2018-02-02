<?php
	include_once("config.php");
	$adminlogin	=	$_SESSION['admin_login'];
	if($adminlogin	==	""){
	echo "<script>window.location='index.php'</script>";
	}
?>