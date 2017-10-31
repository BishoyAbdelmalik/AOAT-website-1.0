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

        main section {
            cursor: pointer;
        }

        .white_background {
            background: white;
        }

        .spacing {
            padding-bottom: 10px;
            padding-top: 16px;
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
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor viverra egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris a eros vel velit fermentum fringilla. Fusce porttitor, nulla quis porta bibendum, metus mauris egestas sem, vel maximus risus est quis lacus. Integer bibendum nibh urna, vel congue justo lobortis vel. Nulla ultrices pellentesque ante, a hendrerit mauris eleifend sed. Curabitur sed scelerisque nibh, non rhoncus ipsum. Duis ornare mauris in mi interdum, id sodales lectus aliquam. Nam commodo libero et quam feugiat sollicitudin. Etiam et neque leo. Donec dolor purus, laoreet sed dignissim nec, imperdiet condimentum mi. Nulla iaculis imperdiet mi a efficitur. Phasellus in fermentum ante, ac fermentum odio. Phasellus et magna est. Quisque tortor erat, interdum nec nulla sit amet, vestibulum auctor justo.
        </div>
    </section>
    <main>
        <div class="blue_background">
            <section id="art_club" class="flex_b container-fluid lockcontent">
                <article class="flex_b club_name">
                    <div>
                        <h3>ART Club</h3>
                        <p class="justify">
                            ART Club stands for Art Reaching Teens and our mission is to provide a place for students to share, discuss, and view art as well as their own artwork and to connect to each other and community by working on various projects
                        </p>
                    </div>
                </article>
                <img src="images/studentworkdpCover.jpg">
            </section>
            <section class="gray_txt white_background">
                <div id="art" class="collapse container-fluid lockcontent spacing">
                    <div class="spacing">
                        <ul class="nobullet_points">
                            <li>
                                <h4>What does ART club do for the community?</h4>
                                <ul>
                                    <li>Participate in club/school activities like Homecoming Parade</li>
                                    <li>Help with chalk festival</li>
                                    <li>Recycling</li>
                                    <li>Work with children at the Northridge hospital by making cards and donating gifts.</li>
                                    <li>Help at Career Day</li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nobullet_points">
                            <li>
                                <h4>What else should we know?</h4>
                                <ul>
                                    <li>Our pride – ART club won the Homecoming Parade float six years in a row</li>
                                    <li>Its notonly for AOAT students</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="peer_mentor" class="flex_b flex_row_reverse container-fluid lockcontent">
                <article class="flex_b club_name">
                    <div>
                        <h3>Peer Mentor</h3>
                        <p class="justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor viverra egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris a eros vel velit fermentum fringilla. Fusce porttitor, nulla quis porta bibendum, metus mauris egestas sem, vel maximus risus est quis lacus.
                        </p>
                    </div>
                </article>
                <img src="images/studentworkdpCover.jpg">

            </section>
            <section class="gray_txt white_background">
                <div id="peer" class="collapse container-fluid lockcontent">
                    <div class="spacing">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor viverra egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris a eros vel velit fermentum fringilla. Fusce porttitor, nulla quis porta bibendum, metus mauris egestas sem, vel maximus risus est quis lacus. Integer bibendum nibh urna, vel congue justo lobortis vel. Nulla ultrices pellentesque ante, a hendrerit mauris eleifend sed. Curabitur sed scelerisque nibh, non rhoncus ipsum. Duis ornare mauris in mi interdum, id sodales lectus aliquam. Nam commodo libero et quam feugiat sollicitudin. Etiam et neque leo. Donec dolor purus, laoreet sed dignissim nec, imperdiet condimentum mi. Nulla iaculis imperdiet mi a efficitur. Phasellus in fermentum ante, ac fermentum odio. Phasellus et magna est. Quisque tortor erat, interdum nec nulla sit amet, vestibulum auctor justo.
                    </div>
                </div>
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
                    $("#art").collapse("toggle");
                });
                $("#peer_mentor").click(function() {
                    $("#peer").collapse("toggle");
                });
            });

        </script>
</body>

</html>
