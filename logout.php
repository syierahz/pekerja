<?php
include "config.php"; 
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // Clear all session variables
    session_unset();

    // Destroy the session
    session_destroy();
}

// Redirect to the login page or any other desired page
header("Location: index.php");
exit();
?>
