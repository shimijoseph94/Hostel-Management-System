<?php
session_start();
unset($_SESSION["username"]);
header1("location:indexx.php");
?>