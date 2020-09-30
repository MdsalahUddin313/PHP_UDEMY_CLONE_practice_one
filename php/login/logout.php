<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
unset($_SESSION['username']);
$_SESSION = array();

 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location://localhost/Projects/Versity_final_project/index.php");
exit;
?>