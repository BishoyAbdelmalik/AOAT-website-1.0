<?php
require_once('calendar_builder.php');

error_reporting(false);
if (isset($_GET)){
    echo getcalander($_GET[month],$_GET[year] ,date("F", mktime(0, 0, 0, $_GET[month], 1, $_GET[year])));
}

?>
