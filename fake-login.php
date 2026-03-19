<?php
session_start();

// Fake user login
$_SESSION['user_id'] = 1;
$_SESSION['user_name'] = "Ozioma";
$_SESSION['email'] = "oziomaegole@gmail.com";

header("Location: index.php");
exit();