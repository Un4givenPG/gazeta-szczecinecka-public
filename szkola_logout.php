<?php require('includes/config.php');

//logout
$user->logout(); 

//logged in return to index page
header('Location:http://nowa.liceumdubois.pl');
exit;
?>