<?php 
session_start();
session_unset();
$_SESSION['name']=NULL;
$_SESSION['email']=NULL;
$_SESSION['phone1']=NULL;
session_destroy();
header("Location: ../index.php");        
?>