<?php
session_start();

$_SESSION['user_id'] = 1; 
$_SESSION['user_name'] = 'Ozioma Egole';

$_SESSION['user'] = [
    'name' => 'Ozioma Egole',
    'email' => 'oziomaegole2@gmail.com',
    'phone' => '8166365570',
    'role' => 'Agent',
    'image' => 'assets/img/blue.jpg'
];

header("Location: profile.php");
exit();