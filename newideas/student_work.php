<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/student_work.css" />
    <title>AOAT | Student Work</title>


</head>

<body>
    <header>
        <?php
            require 'header.php';
           
        ?>
    </header>
    <div class="banner" id="student_work">
        <div class="container-fluid lockcontent">
            <h2 class="pages_title">Student Work</h2>
        </div>
    </div>
    <section>
        <div id="intro" class="container-fluid lockcontent">
            AOAT trains students in graphic design and photography for print and web, and develops their skills in design software such as Adobe Creative Suite. Many of their projects are connected to their AOAT academic classes such as science, English, and history/government.
        </div>
    </section>
    <main class="blue_background">
        <section class="studentwork flex_b wrap">

            <article class="flex_b dgPhotography">
                <div>
                    <h3>Digital Photography</h3>

                    <p>
                        AOAT trains students in graphic design and photography for print and web, and develops their skills in design software such as Adobe Creative Suite. Many of their projects are connected to their AOAT academic classes such as science, English, and history/government.
                    </p>
                </div>
            </article>
            <img class="center_img dgPhotography" src="images/studentworkdpCover.jpg">
            <div class="studentworkTile flex_b wrap">
                <img src="images/studentworkdpTile1.jpg">
                <img src="images/studentworkdpTile2.jpg">
                <img src="images/studentworkdpTile3.jpg">
                <img src="images/studentworkdpTile4.jpg">
            </div>
        </section>
        <section class="studentwork flex_b wrap">
            <div class="studentworkTile flex_b wrap">
                <img src="images/studentworkdillTile1.jpg">
                <img src="images/studentworkdillTile2.jpg">
                <img src="images/studentworkdillTile3.jpg">
                <img src="images/studentworkdillTile4.jpg">
            </div>
            <img class="dgIllustration" src="images/studentworkdillCover.jpg">
            <article class="flex_b dgIllustration">
                <div>
                    <h3>Digital Illustration</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </article>
        </section>
        <section class="studentwork flex_b wrap">

            <article class="flex_b dgImaging">
                <div>
                    <h3>Digital Imaging</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </article>
            <img class="dgImaging" src="images/album_cover.jpg">
            <div class="studentworkTile flex_b wrap">
                <img src="images/studentworkTile1.jpg">
                <img src="images/studentworkTile2.jpg">
                <img src="images/studentworkTile3.jpg">
                <img src="images/studentworkTile4.jpg">
            </div>
        </section>
        <section class="studentwork flex_b wrap">
            <div class="studentworkTile flex_b wrap">
                <img src="images/studentworkgdTile1.jpg">
                <img src="images/studentworkgdTile2.jpg">
                <img src="images/studentworkgdTile3.jpg">
                <img src="images/studentworkgdTile4.jpg">
            </div>

            <img class="graphic" src="images/studentworkgdCover.jpg">
            <article class="flex_b graphic">
                <div>
                    <h3>Graphic Design</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </article>
        </section>
        <section class="studentwork flex_b wrap">


            <article class="flex_b web">
                <div>
                    <h3>Web Design</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </article>
            <img class="web" src="images/studentworkwdCover.jpg">
            <div class="studentworkTile flex_b wrap">
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
        student_work()
    ?>

</body>

</html>
