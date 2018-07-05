<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: loginindex.php"); // Redirecting To Home Page
}
?>