<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AOAT | Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="img/Artboard%201.gif">
    <style>
        .b {
            max-width: 50px
        }

        /* Change the white to any color ;) */

        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 100px #333333 inset;
        }

        /*Change text in autofill textbox*/

        input:-webkit-autofill {
            -webkit-text-fill-color: white !important;
        }

        section {
            padding: 20px;

        }

        section button {
            display: block;
            width: 100%;
            height: 200px;
            font-size: 50px;
            color: white;
        }

    </style>
</head>

<body>

    <section class="lockcontent">
        <button href="teachers/teachers.php" onclick="teachers_btn()">Teachers Page</button>
        <button onclick="calender_btn()">Calender</button>
        <button id="fgfgfg">ghghgh</button>
        <button onclick="Loge_out()">Loge Out</button>
    </section>
    <?php
    require '../php_dependancy/js.php' ;
    jquery(1);
    ?>
        <script>
            function teachers_btn() {
                window.location.href = "teachers/";

                /* $.post( "teachers/teachers.php", "", function(data) { $('body').html(data); } );*/
            }

            function Loge_out() {
                window.location.href = "loggedout.php";

            }

            function calender_btn() {
                $.post(
                    "calender/calender.php", "",
                    function(data) {
                        $('body').html(data);

                    }
                );
            }

        </script>
</body>
<footer>
    <p>Control Panel coded By <a href="mailto:mrboushy@gmail.com"><img class="b" src="img/b.svg" alt="Bishoy Abdelmalik" /></a></p>
</footer>

</html>
