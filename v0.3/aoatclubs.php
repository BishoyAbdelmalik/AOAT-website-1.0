<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="images/logos/ico.gif">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles_academics.css">

    <title>AOAT | Clubs</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <style>
        #info {
            margin-bottom: 10px;
        }

    </style>
</head>

<body>
    <header>
        <?php require 'php_dependancy/header.php';

        ?>
    </header>
    <main>

        <div class="banner" id="clubs"></div>
        <div class="pagetitle container-fluid lockcontent">
            <h2>AOAT Clubs</h2>
        </div>
        <section id="quotearea" class="container-fluid lockcontent flex_b">
            <img class="quoteimg" src="images/clubs/art_joine.jpg" />
            <div class="quote flex_b">
                <p class="justify flex_b">
                    AOAT offers many different clubs for the students to get involved and get to help the comunity in variety of ways. Some of these clubs focus on artistic activities and help the comunity in a creative and unique ways. Other clubs are focused on the academic aspect of the student life and helping students acheive their potential in school.
                </p>
            </div>
        </section>
        <section class="flex_b container-fluid lockcontent">
            <div class="sidebuttons flex_b flex_column">
                <button class="sidebtn" value="#art">ART Club</button>
                <button class="sidebtn" value="#peer">Peer Mentor</button>
            </div>
            <div id="info">
                <article id="art">
                    <section class="flex_b">
                        <div class="flex_b">
                            <div>
                                <h3>ART Club</h3>
                                <p class="justify">
                                    ART Club stands for Art Reaching Teens and our mission is to provide a place for students to share, discuss, and view art as well as their own artwork and to connect to each other and community by working on various projects

                                </p>
                            </div>
                        </div>
                        <img class="img" src="images/clubs/art%20club.jpg" />
                    </section>
                    <section class="flex_b">
                        <div class="flex_b">
                            <div>
                                <h3>Contributions to the community</h3>
                                <ul>
                                    <li>
                                        ART club participates in club/school activities such as the Homecoming Parade
                                    </li>
                                    <li>
                                        ART club helps the enviroment by doing Recycling
                                    </li>
                                    <li>
                                        ART club works with children at the Northridge hospital by making cards and donating gifts.
                                    </li>
                                    <li>
                                        ART club helps in Career Day
                                    </li>

                                </ul>

                            </div>
                        </div>
                        <img class="img" src="images/clubs/art_events.jpg" />
                    </section>
                </article>

                <article id="peer">
                    <section class="flex_b">
                        <div class="flex_b">
                            <div>
                                <h3>Peer Mentor</h3>
                                <p class="justify">
                                    The Mentor program is a program that brings upper classmen and lower classmen together every week for mentoring sessions, where juniors and sniors get together with their mentees (freshmen and sophmores) to give helpful advice for their daily school lives. As well as providing assistance with homework or personal problems.

                                </p>
                            </div>
                        </div>
                        <img class="img" src="images/clubs/mentor.jpg" />
                    </section>

                </article>
            </div>
        </section>
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
    button_manger();

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
