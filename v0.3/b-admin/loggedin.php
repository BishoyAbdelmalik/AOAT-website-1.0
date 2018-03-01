<?php
error_reporting(0);
session_start();

$expireAfter = 5;
if(isset($_SESSION['last_action'])){
    $secondsInactive = time() - $_SESSION['last_action'];
    $expireAfterSeconds = $expireAfter * 60;
    if($secondsInactive >= $expireAfterSeconds){
        session_unset();
        session_destroy();
    }
}


$_SESSION['last_action'] = time();
if($_SESSION["login"]==1){
    require 'verify_pass.php';
    page("home");
}else{
    header("Location: /b-admin"); /* Redirect browser */
    exit();
}

?>
