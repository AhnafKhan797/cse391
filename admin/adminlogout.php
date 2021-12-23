<?php 
include '../dbcon/userinfo.php';
session_start();
session_destroy();

header("Location: adminindex.php");

?>