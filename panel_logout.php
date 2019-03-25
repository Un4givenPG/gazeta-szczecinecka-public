<?php require('includes/config.php');

//logout
$user->logout(); 

//logged in return to index page
header('https://cp.home.pl');
exit;
?>