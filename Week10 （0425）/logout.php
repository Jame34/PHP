<?php
session_start();
//session_destory();
$_SESSION["ckeck"] = "No";
header("Location:login.php");

?>