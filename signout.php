<?php 
//Ends the session of logged in user
session_start(); 
session_destroy();
//Brings user back to sign in page 
header("location:signin.php");  
exit;
?>