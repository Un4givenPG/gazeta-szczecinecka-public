<?php
ob_start();
session_start();

//żeby dokumetacji stał się zadość
date_default_timezone_set('Europe/Warsaw');

//tajne tajności tylko na serwerze broń Boże od githuba
define('DBHOST','tajne_tajności');
define('DBUSER','tajne_tajości');
define('DBPASS','tajne_tajności');
define('DBNAME','tajne_tajności');


define('DIR','http://gazeta-szczecinecka.pl/');
define('SITEEMAIL','noreply@gazeta-szczecinecka.pl');

try {

	//Do MYSQL podłączenie
	$db = new PDO("mysql:host=".DBHOST.";charset=utf8mb4;dbname=".DBNAME, DBUSER, DBPASS);
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch(PDOException $e) {
	
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//ta implmetacja php mailera za bardzo nie wyszła XD
include('classes/user.php');
include('classes/phpmailer/mail.php');
$user = new User($db);
?>
