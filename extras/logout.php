<?php 

session_start();


//destroy the session
session_destroy();
header('Location: /php-projects/13_sessions.php');

?>