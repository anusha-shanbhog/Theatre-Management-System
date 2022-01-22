<?php
session_start();
$_SESSION['user']=NULL;
$_SESSION['password']=NULL;


$_SESSION['adminid']=NULL;
$_SESSION['adminpswd']=NULL;
header("location:assign1.php");
?>