<?php 
require_once('php_dependancy/calender/calendar_builder.php');
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="images/logos/ico.gif">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/calender.css">

    <title>AOAT | Calendar</title>

</head>

<body>
    <header>
        <?php require 'php_dependancy/header.php';

        ?>
    </header>
    <main>
        <div class="banner homeimage aboutAOAT landing" id="calendar">
            <div class="pagetitle absolute-text bannertitle">
                <h1>Calendar</h1>

            </div>
        </div>
        <div class="pagetitle container-fluid lockcontent">
<!--
<h2>Calendar</h2>-->
        </div>
        <div class="container-fluid  lockcontent">
            <div class="calender">


                <?php
                $month_numerical=date("n");
                $year=date("Y");
                $month=date("F");
                echo getcalander($month_numerical,$year ,$month);

                ?>

            </div>
        </div>


        <!-- Modal -->
        <div class="modal" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <p>There is no events in this day.</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default close_modal" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <footer>
        <?php        require 'php_dependancy/footer.php';
require 'php_dependancy/js.php' ;
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
