<?php 

session_start();
unset($_SESSION['s_name']);
session_destroy();
header("location:index.php");

?>
