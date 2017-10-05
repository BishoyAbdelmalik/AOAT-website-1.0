<?php
require_once('calendar_builder.php');

/*
 echo var_dump($_GET);*/
error_reporting(false);
if (isset($_GET)){
    getcalander($_GET[month],$_GET[year] ,date("F", mktime(0, 0, 0, $_GET[month], 1, $_GET[year])));
}

?>
