<?php
    session_start();
    // Destroy The session
    if(session_destroy()) {
        // Redirecting To Home Page
        header("Location: index.php");
    }
?>
