<?php require('includes/config.php');

//logout
$user->logout(); 

//logged in return to index page
header('Location:http://gazeta-szczecinecka.pl/index');
exit;
?>