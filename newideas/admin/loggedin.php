<?php
error_reporting(0);
require 'verify_pass.php';
global $username;
$username=$_POST[user_name];
$password=$_POST[password];
$page=$_POST[page];
verify($username,$password,$page);
?>
