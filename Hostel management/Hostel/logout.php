<?php
session_start();
unset($_SESSION["Username"]);
header("location:indexx.php");
?>