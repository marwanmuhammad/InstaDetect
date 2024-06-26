<?php
session_start();
// Unset all session variables
$_SESSION = array();
// Destroy the session
session_destroy();
// Redirect to the login or home page
header("Location: /pythonprojects/Web project/index.php");
exit;
?>
