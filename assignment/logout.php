<?php
session_start();
$_SESSION['newId']=NULL;
session_destroy();
header('location:admin_login.php');
?>