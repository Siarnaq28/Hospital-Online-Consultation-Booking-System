<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
echo '<script>alert("Logged Out Successfully! You will now be redirected to the Patient Portal.");</script>';
echo '<script>window.location.href = "patient.php";</script>';
exit;
?>
