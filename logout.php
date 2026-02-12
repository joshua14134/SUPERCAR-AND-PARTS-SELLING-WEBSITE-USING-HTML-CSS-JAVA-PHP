<?php
session_start();

/* Destroy all session data safely */
$_SESSION = [];
session_unset();
session_destroy();

/* Prevent browser back button login */
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

/* Redirect to login page */
header("Location: login_form.php");
exit();
?>