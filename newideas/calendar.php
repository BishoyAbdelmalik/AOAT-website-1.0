<?php 
require_once('calendar_builder.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/calender.css">
    <title>AOAT | Calendar</title>

</head>

<body>
    <header>
        <?php
 require 'header.php';

        ?>
    </header>
    <main>
        <div class="banner" id="calendar">
            <h2>Calendar</h2>
        </div>

        <div class="lockcontent">
            <div class="calender">


                <?php
                echo getcalander(date("n"),date("Y") ,date("F"));

                ?>
            </div>
        </div>

    </main>
    <footer>
        <?php 
            require 'footer.php';
            require 'js.php' ;
        ?>
    </footer>
    <?php
        jquery(0);
        nav();
        bootstrap(0);
        calender();
    ?>

</body>

</html>
