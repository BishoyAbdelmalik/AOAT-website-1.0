<?php 
require 'mysql.php';
$username="rosillo";
$password="123456";


$password=password_hash($password, PASSWORD_DEFAULT);

$query="INSERT INTO `users` (`id`, `username`, `password`, `access`) VALUES (NULL, '".$username."', '".$password."', '');";

$result=mysqli_query($connection,$query);
mysqli_close($connection); 

?>
