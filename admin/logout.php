<?php

session_start();

session_unset();

session_destroy();

// $_SESSION['check'] = false;

header("location:login.php");

?>