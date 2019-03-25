<?
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: mobile/login-mobile');
} else {

$dalej="/login";
header("Location: $dalej");
}
?>