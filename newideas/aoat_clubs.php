<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/clubs.css">
    <title>AOAT | Clubs</title>
    <style>


    </style>
</head>

<body>
    <header>
        <?php
        require 'header.php';

        ?>
    </header>
    <div class="banner" id="clubs">
        <div class="container-fluid lockcontent">
            <h2>AOAT Clubs</h2>
        </div>
    </div>
    <!--end banner-->
    <section id="first_section">
        <div id="intro" class="container-fluid lockcontent">
            <p class="justify gray_txt">
                AOAT offers many different clubs for the students to get involved and get to help the comunity in variety of ways. Some of these clubs focus more on artistic activities and they try to help the comunity in a creative and unique ways. Other clubs are mainly focused on the academic aspect of the school and helping students acheive their potential in school.
            </p>
        </div>
    </section>
    <main>
        <div class="blue_background">
            <section id="art_club" class="flex_b container-fluid lockcontent">
                <article class="flex_b club_name">
                    <div>
                        <h3>ART Club</h3>
                        <p class="justify lightbluetxt">
                            ART Club stands for Art Reaching Teens and our mission is to provide a place for students to share, discuss, and view art as well as their own artwork and to connect to each other and community by working on various projects
                        </p>
                        <a class="pointer hoverwhite removelinkstyle">Click Here for more Info</a>

                    </div>
                </article>
                <img class="sec_img" src="images/clubs/art%20club.jpg">
            </section>

            <section class="modal gray_txt" id="art" role="dialog">
                <div class="modal-dialog">
                    <!--                <div id="art" class="collapse container-fluid lockcontent spacing">-->
                    <div class="modal-content ">
                        <div class="modal-header center ">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                            <h4 class="modal-title white_background">ART Club</h4>
                        </div>
                        <div class="modal-body blue_background">
                            <section class="flex_b blue_background">

                                <article class="flex_b club_name">
                                    <div>
                                        <h3>Our Mission</h3>
                                        <p class="justify">
                                            ART Club stands for Art Reaching Teens and our mission is to provide a place for students to share, discuss, and view art as well as their own artwork and to connect to each other and community by working on various projects
                                        </p>
                                    </div>

                                </article>
                                <img class="sec_img" src="images/clubs/art%20club.jpg">
                            </section>
                            <section class="gray_txt white_background center">
                                <h4>ART club contributions in the community</h4>
                            </section>
                            <section class="flex_b blue_background">
                                <article class="flex_b club_name">
                                    <div>
                                        <h3>School Events</h3>
                                        <p class="justify">
                                            ART club participates in club/school activities such as the Homecoming Parade
                                        </p>
                                    </div>
                                </article>
                                <img class="sec_img" src="images/clubs/art_events.jpg">
                            </section>

                            <section class="flex_b blue_background flex_row_reverse">
                                <article class="flex_b club_name">
                                    <div>
                                        <h3>Enviroment</h3>
                                        <p class="justify">
                                            ART club helps the enviroment by doing Recycling
                                        </p>
                                    </div>
                                </article>
                                <img class="sec_img" src="images/clubs/art%20club.jpg">
                            </section>
                            <section class="flex_b  blue_background">
                                <article class="flex_b club_name">
                                    <div>
                                        <h3>Helping Children</h3>
                                        <p class="justify">
                                            ART club works with children at the Northridge hospital by making cards and donating gifts.
                                        </p>
                                    </div>
                                </article>
                                <img class="sec_img" src="images/clubs/art%20club.jpg">
                            </section>
                            <section class="flex_b flex_row_reverse blue_background">
                                <article class="flex_b club_name">
                                    <div>
                                        <h3>
                                            ART club helps in Career Day
                                        </h3>
                                    </div>
                                </article>
                                <img class="sec_img" src="images/clubs/art%20club.jpg">
                            </section>
                            <section class="gray_txt white_background center">
                                <h4>What else should we know?</h4>
                            </section>
                            <section class="flex_b blue_background">
                                <article class="flex_b club_name">
                                    <div>
                                        <h3>Our pride</h3>
                                        <p class="justify">
                                            ART club won the Homecoming Parade float six years in a row
                                        </p>
                                    </div>
                                </article>
                                <img class="sec_img" src="images/clubs/art_pride.jpg">
                            </section>
                            <section class="flex_b flex_row_reverse blue_background">
                                <article class="flex_b club_name">
                                    <div>
                                        <h3>Who can join?</h3>
                                        <p class="justify">
                                            Any student who from Clevland high school can join
                                        </p>
                                    </div>
                                </article>
                                <img class="sec_img" src="images/clubs/art_joine.jpg">
                            </section>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default close_modal" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>


            </section>
            <section id="peer_mentor" class="blue_background">
                <section class="flex_b  container-fluid lockcontent " style="margin-top: 10px;">
                    <article class="flex_b club_name">
                        <div>
                            <h3>Peer Mentor</h3>
                            <p class="justify lightbluetxt">
                                The Mentor program is a program that brings upper classmen and lower classmen together every week for mentoring sessions, where juniors and sniors get together with their mentees (freshmen and sophmores) to give helpful advice for their daily school lives. As well as providing assistance with homework or personal problems.
                            </p>
                        </div>
                    </article>
                    <img class="sec_img" src="images/clubs/mentor.jpg">
                </section>
            </section>

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
    ?>
        <script>
            $(document).ready(function() {
                $("#art_club").click(function() {
                    // $("#art").collapse("toggle");  
                    $("#art").modal();
                });

            });

        </script>
</body>


</html>
