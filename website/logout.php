<?php
session_start();
$_SESSION['user_id'] = null;
session_destroy();
header('Location: index.php'); // Redirect to the home page or login page
$_SESSION['status'] = "WYLOGOWANO!";
exit();
?>
