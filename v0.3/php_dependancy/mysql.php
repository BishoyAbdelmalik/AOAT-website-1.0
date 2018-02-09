<?php
function mysql_connection(){
global  $connection;

$dbhost="localhost";
$dbuser="AOAT";
$dbpass="123456";
$dbname="aoat";
$connection= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(mysqli_connect_errno()){
die("Database connection failes: ".
mysqli_connect_error(). " (" . mysqli_connect_errno().")"
);
}
}?>