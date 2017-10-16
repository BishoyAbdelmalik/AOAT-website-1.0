<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>AOAT | Student Work</title>
    <style type="text/css">
        #intro {
            padding-top: 27px;
            padding-bottom: 27px;
        }

        .container {
            width: 75%;
            margin: auto;
        }

        .banner {
            margin-bottom: 0px;
        }



        .studentwork {
            color: #fff;
            margin: 0;
            width: 100%;
            float: left;
            /* background: #c4003e;*/
            background: #3094d6;

        }

        .studentwork h3 {
            margin: 0;
        }

        .studentwork p {
            margin: 0;
        }

        .studentwork article {
            padding: 2em;
            width: 33.33%;
            text-align: center;
            float: left;
            box-sizing: border-box;
        }

        .studentwork article p {
            font-size: 1em;
        }

        .studentwork article h3 {
            font-size: 2em;
            margin-bottom: 10px;

        }

        .studentwork img {
            float: left;
            width: 33.33%;
        }

        .studentwork a img {
            background: #fff;
        }

        .studentworkTile {
            background: #fff;
            width: 33.33%;
            float: left;
        }

        .studentworkTile img {
            opacity: .4;
            width: 50%;
        }

    </style>

</head>

<body>
    <header>
        <?php
            require 'header.php';
           
        ?>
    </header>
    <div class="banner" id="student_work">

        <h2 class="pages_title">Student Work</h2>
    </div>

    <main>
        <sevtion>
            <div id="intro" class="lockcontent">
                AOAT trains students in graphic design and photography for print and web, and develops their skills in design software such as Adobe Creative Suite. Many of their projects are connected to their AOAT academic classes such as science, English, and history/government.
            </div>
        </sevtion>
        <section class="studentwork">
            <article>
                <h3>Digital Photography</h3>
                <p>
                    AOAT trains students in graphic design and photography for print and web, and develops their skills in design software such as Adobe Creative Suite. Many of their projects are connected to their AOAT academic classes such as science, English, and history/government.
                </p>
            </article>
            <img src="images/studentworkdpCover.jpg">
            <div class="studentworkTile">
                <img src="images/studentworkdpTile1.jpg">
                <img src="images/studentworkdpTile2.jpg">
                <img src="images/studentworkdpTile3.jpg">
                <img src="images/studentworkdpTile4.jpg">
            </div>
        </section>
        <section class="studentwork">
            <div class="studentworkTile">
                <img src="images/studentworkdillTile1.jpg">
                <img src="images/studentworkdillTile2.jpg">
                <img src="images/studentworkdillTile3.jpg">
                <img src="images/studentworkdillTile4.jpg">
            </div>
            <img src="images/studentworkdillCover.jpg">
            <article>
                <h3>Digital Illustration</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </article>
        </section>
        <section class="studentwork">
            <article>
                <h3>Digital Imaging</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </article>
            <img src="images/album_cover.jpg">
            <div class="studentworkTile">
                <img src="images/studentworkTile1.jpg">
                <img src="images/studentworkTile2.jpg">
                <img src="images/studentworkTile3.jpg">
                <img src="images/studentworkTile4.jpg">
            </div>
        </section>
        <section class="studentwork">
            <div class="studentworkTile">
                <img src="images/studentworkgdTile1.jpg">
                <img src="images/studentworkgdTile2.jpg">
                <img src="images/studentworkgdTile3.jpg">
                <img src="images/studentworkgdTile4.jpg">
            </div>
            <img src="images/studentworkgdCover.jpg">
            <article>
                <h3>Graphic Design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </article>
        </section>
        <section class="studentwork">
            <article>
                <h3>Web Design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </article>
            <img src="images/studentworkwdCover.jpg">
            <div class="studentworkTile">
                <img src="images/studentworkwdTile1.jpg">
                <img src="images/studentworkwdTile2.jpg">
                <img src="images/studentworkwdTile3.jpg">
                <img src="images/studentworkwdTile4.jpg">
            </div>
        </section>




    </main>
    <footer class="footer">
        <?php 
            require 'footer.php';
            require 'js.php' ;
                ?>
    </footer>

    <!--Javascrpits-->

    <?php
        jquery(0);
        nav();
        home();
        bootstrap(0);

    ?>
</body>

</html>
