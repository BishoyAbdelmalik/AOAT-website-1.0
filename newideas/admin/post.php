<?php
error_reporting(0);
$username=$_POST[user_name];
$password=$_POST[password];
require 'verify_pass.php';
post($username,$password);
?>
