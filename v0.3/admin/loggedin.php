<?php
error_reporting(0);
session_start();
//minutes or more.
$expireAfter = 5;

if(isset($_SESSION['last_action'])){

    //Figure out how many seconds have passed
    //since the user was last active.
    $secondsInactive = time() - $_SESSION['last_action'];

    //Convert our minutes into seconds.
    $expireAfterSeconds = $expireAfter * 60;

    //Check to see if they have been inactive for too long.
    if($secondsInactive >= $expireAfterSeconds){
        //User has been inactive for too long.
        //Kill their session.
        session_unset();
        session_destroy();
    }

}

//Assign the current timestamp as the user's
//latest activity
$_SESSION['last_action'] = time();
if($_SESSION["login"]==1){
    require 'verify_pass.php';
    page("home");
}else{
    header("Location: /admin"); /* Redirect browser */
    exit();
}

/*global $username;
$username=$_POST[user_name];
$password=$_POST[password];
$page=$_POST[page];
verify($username,$password,$page);*/
?>
