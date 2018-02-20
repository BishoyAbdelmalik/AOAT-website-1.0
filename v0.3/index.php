<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    <link rel="shortcut icon" href="images/logos/ico.gif">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link async rel="stylesheet" href="css/bootstrap.min.css" />
    <link async rel="stylesheet" href="css/styles.css" />
    <title>AOAT | Home</title>
    <link async rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .arrow p {
            /*
 bottom: 6vw; position: relative;
*/
            font-size: 17px;
            color: white;
        }

        .center-logo {
            opacity: 1!important;
            width: 278px!important;
        }

        .studentwork article {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 2em;
            width: 100%;
            text-align: center;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .news_img {
            display: none;
        }

        @media(min-width:768px) {
            .news_img {
                transform: rotateX(180deg);
                position: absolute;
                z-index: 0;
                opacity: 0.1;
                width: 99%;
                height: 60vw;
                display: block;
                user-select: none;
                user-drag: none;
                -webkit-user-drag: none;
                -ms-user-drag: none;
                -o-user-drag: none;
            }
        }

        @media(min-width:1024px) {
            .studentwork article {
                padding-top: 100px;
                font-size: 1vw!important;
            }
            .studentwork h2 {
                font-size: 2vw!important;
            }
            .studentwork h4 {
                font-size: 1.3vw!important;
            }
        }

        .upcoming_events:not(:first-child) {
            padding: 20px;
        }

        .flickr {
            background: #009cd5;
        }

    </style>
</head>

<body>
    <header>
        <?php
            require 'php_dependancy/header.php';
        ?>
    </header>
    <div class="homeimage aboutAOAT landing">

        <div class="absolute-text pagetitle bannertitle noscale" id="aboutAOAT_AT">

            <h1><img id="waypoint" class="center-logo" src="/images/logos/aoat%20final%20logo.svg" title="The Acdemy of Art and Technology"></h1>


            <div class="arrow">
                <p> Our goal is to provide students with the academic background and professional tools necessary for success in any endeavor.</p>
                <!--
<div class="bounce" style="top: -3vw;position: relative;">
    <button class="fa fa-arrow-down fa-2x " onClick="runclick();" href="#"></button>
</div>
-->
            </div>
        </div>
    </div>

    <main style="background: #009cd5; ">



        <div class="main">



            <div class="news">
                <!--                <div class="row lockcontent">-->
                <div class="row">
                    <div class="col-sm-6 flex_b">
                        <section class="studentwork flex_b wrap">
                            <article class="flex_b">
                                <div>
                                    <h2>News</h2>
                                    <h4>Inspiring Kerry James Marshall Exhibit @MOCA</h4>
                                    <p class="justify">
                                        Students from 10th and 11th grade enjoyed this major retrospective of Chicago artist Marshall, and of course the escape from school on a sunny spring day! The 2-hour bus ride to downtown was not fun, but experiencing such thought-provoking art with peers is always a treat. Chaperones had a relaxing lunch at the Grand Central Market, and all hope the Angels’ Flight gets back in service soon: that’s a steep hill back up to meet the bus!!
                                    </p>
                                    <p class="justify">
                                        360 photos by teacher <a class="white_txt" href="teachers.php?t=prato">Paola Prato</a>
                                    </p>
                                </div>
                            </article>
                        </section>
                        <img src="images/home/StudentWork.jpg" class="news_img" />
                        <!--    <article>
                            <h2>News</h2>
                            <h4>Inspiring Kerry James Marshall Exhibit @MOCA</h4>
                            <p>
                                Students from 10th and 11th grade enjoyed this major retrospective of Chicago artist Marshall, and of course the escape from school on a sunny spring day! The 2-hour bus ride to downtown was not fun, but experiencing such thought-provoking art with peers is always a treat. Chaperones had a relaxing lunch at the Grand Central Market, and all hope the Angels’ Flight gets back in service soon: that’s a steep hill back up to meet the bus!!
                            </p>
                            <p>
                                360 photos by teacher <a class="white_txt" href="teachers.php?t=prato">Paola Prato</a>
                            </p>
                        </article>-->
                    </div>
                    <div class="col-sm-6 remove_padding">
                        <div style="overflow: hidden;">
                            <div class="homeimage flickr">
                                <a href="https://www.flickr.com/photos/109236765@N05/albums/72157659567290343">
                                    <img class="homeimage_effect" src="images/home/news.jpg">

                                    <h1 class="absolute-text" id="news_AT">View Photos <img src="images/logos/flickrSM_Icon.svg"></h1>
                                </a>
                            </div>
                        </div>
                        <div class="upcoming_events">
                            <h1>Upcoming Events</h1>
                            <?php
                            include 'php_dependancy/calender/home_calender.php';

                            ?>
                                <a href="calendar.php">See all news and events</a>
                        </div>
                    </div>
                </div>

            </div>










            <!--to be commented-->
            <div class="row ">
                <div class="">
                    <div class="homeimage flex">
                        <div id="teacher">
                            <img src="images/home/Teachers.jpg">
                            <div class="absolute-text" id="teacher_AT">
                                <h2>Get to Know Our Teachers</h2>
                                <a href="teachers.php">
                                    <button type="button" class="btn btn-primary"> View More </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="homeimage flex">
                        <div id="studentwork">
                            <img src="images/home/StudentWork.jpg">
                            <div class="absolute-text" id="studentwork_AT">
                                <h2>Student Work</h2>
                                <a href="studentwork.php">
                                    <button type="button" class="btn btn-primary">View More</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <footer class="footer">
                <?php        require 'php_dependancy/footer.php';
require 'php_dependancy/js.php' ;
                ?>
            </footer>

        </div>
    </main>
    <!--Javascrpits-->

    <?php
        jquery(0);
        nav_home();
        home();      
        bootstrap(0);
nav();
    ?>


</body>

</html>
