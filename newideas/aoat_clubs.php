<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>AOAT | Clubs</title>
    <style>
        .club_name {
            text-align: center;
            padding: 20px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }



        .club_name div {
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }

        .center {
            text-align: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .center h4 {
            line-height: 54px;
        }

        .modal article {
            width: 50%;
        }

        .close_modal {
            width: 100%
        }

        .modal-dialog {
            width: 90%;
        }


        .white_background {
            background: white;
        }



        .modal-body {
            padding: 0;
        }

        .modal .blue_background img {

            position: relative;
            right: -7%;
        }

        .modal .flex_row_reverse img {

            position: relative;
            right: 7%;
        }

        .modal-header .close {
            font-size: 29px;
            margin-top: 0;
        }

        .whitetxt {
            color: white;
        }

        @media screen and (max-width: 864px) {
            .flex_b {
                display: block;
            }

            .sec_img {
                position: relative;
                text-align: center;
                left: 50%;
                -webkit-transform: translateX(-50%);
                transform: translateX(-50%);

            }
            .modal article {
                width: 100%;
            }
        }

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
            <p class="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor viverra egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris a eros vel velit fermentum fringilla. Fusce porttitor, nulla quis porta bibendum, metus mauris egestas sem, vel maximus risus est quis lacus. Integer bibendum nibh urna, vel congue justo lobortis vel. Nulla ultrices pellentesque ante, a hendrerit mauris eleifend sed. Curabitur sed scelerisque nibh, non rhoncus ipsum. Duis ornare mauris in mi interdum, id sodales lectus aliquam. Nam commodo libero et quam feugiat sollicitudin. Etiam et neque leo. Donec dolor purus, laoreet sed dignissim nec, imperdiet condimentum mi. Nulla iaculis imperdiet mi a efficitur. Phasellus in fermentum ante, ac fermentum odio. Phasellus et magna est. Quisque tortor erat, interdum nec nulla sit amet, vestibulum auctor justo.
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
                <section class="flex_b flex_row_reverse container-fluid lockcontent " style="margin-top: 31px;">
                    <article class="flex_b club_name">
                        <div>
                            <h3>Peer Mentor</h3>
                            <p class="justify lightbluetxt">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor viverra egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris a eros vel velit fermentum fringilla. Fusce porttitor, nulla quis porta bibendum, metus mauris egestas sem, vel maximus risus est quis lacus.
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
