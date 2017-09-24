<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>AOAT | Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <?php
            require 'header.php';
           
        ?>
    </header>
    <div class="homeimage aboutAOAT landing">
        <img class="landing_img" src="images/home/AboutAOAT.jpg">
        <div class="absolute-text" id="aboutAOAT_AT">
            <h1>About AOAT</h1>
            <p> Our goal is to provide students with the academic background and professional tools necessary for success in any endeavor.</p>
            <div class="arrow bounce">
                <button class="fa fa-arrow-down fa-2x " onClick="runclick();" href="#"></button>

            </div>
        </div>
    </div>
    <main style="background: #009cd5">



        <div class="main">



            <div class="news">
                <div class="row lockcontent">
                    <div class="col-sm-6">
                        <article>
                            <h2>News</h2>
                            <h4>Inspiring Kerry James Marshall Exhibit @MOCA</h4>
                            <p>
                                Students from 10th and 11th grade enjoyed this major retrospective of Chicago artist Marshall, and of course the escape from school on a sunny spring day! The 2-hour bus ride to downtown was not fun, but experiencing such thought-provoking art with peers is always a treat. Chaperones had a relaxing lunch at the Grand Central Market, and all hope the Angels’ Flight gets back in service soon: that’s a steep hill back up to meet the bus!!
                            </p>
                            <p>
                                360 photos by teacher Paola Prato
                            </p>
                        </article>
                    </div>
                    <div class="col-sm-6 remove_padding">
                        <div style="overflow: hidden;">
                            <div class="homeimage">
                                <a href="https://www.flickr.com/photos/109236765@N05/albums/72157659567290343">
                                    <img class="homeimage_effect" src="images/home/news.jpg">

                                    <h1 class="absolute-text" id="news_AT">View Photos <img src="images/logos/flickrSM_Icon.svg"></h1>
                                </a>
                            </div>
                        </div>
                        <div class="upcoming_events">
                            <h1>Upcoming Events</h1>
                            <ul>
                                <li>
                                    <div class="date">
                                        <div class="event_month">Feb</div>
                                        <!--Month; write months as Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sept, Oct, Nov, Dec-->
                                        <div class="num">16</div>
                                        <!--Date; Write single digits as 01, 02, 03, etc.-->
                                    </div>
                                    <div class="event">Open House</div>
                                    <!--Event-->
                                </li>
                                <li>
                                    <div class="date">
                                        <div class="event_month">Mar</div>
                                        <div class="num">04</div>
                                    </div>
                                    <div class="event">SteamFest</div>
                                </li>
                                <li>
                                    <div class="date">
                                        <div class="event_month">June</div>
                                        <div class="num">08</div>
                                    </div>
                                    <div class="event">Senior Graduation</div>
                                </li>
                                <li>
                                    <div class="date">
                                        <div class="event_month">July</div>
                                        <div class="num">12</div>
                                    </div>
                                    <div class="event">Internship</div>
                                </li>

                            </ul>
                            <a href="#">See all news and events</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row ">
                <div class="">
                    <div class="homeimage flex">
                        <div id="teacher">
                            <img src="images/home/Teachers.jpg">
                            <div class="absolute-text" id="teacher_AT">
                                <h2>Get to Know Our Teachers</h2>
                                <a href="teachers.html">
                                    <button type="button" class="btn btn-primary">
                                                                                    View More
                                                                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="homeimage flex">
                        <div id="studentwork">
                            <img src="images/home/StudentWork.jpg">
                            <div class="absolute-text" id="studentwork_AT">
                                <h2>Student Work</h2>
                                <a href="studentworkgd.html">
                                    <button type="button" class="btn btn-primary">
                                                                                                                                       View More
                                                                                                                                       </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <?php 
                    require 'footer.php';
                    require 'js.php' ;
                ?>
            </footer>

        </div>
    </main>
    <!--Javascrpits-->

    <?php
        jquery(0);
        nav();
        home();
    ?>
</body>

</html>
