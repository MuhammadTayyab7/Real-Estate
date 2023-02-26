<?php

include'database.php';




session_start();

// remove all session variables
$_session=array();

// destroy the session
session_destroy();

header('location:index.php');


?>