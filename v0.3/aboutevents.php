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

    <title>AOAT | Events</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">


</head>

<body>
    <header>
        <?php require 'php_dependancy/header.php';
        ?>
    </header>
    <main>
        <div class="banner homeimage aboutAOAT landing" id="aboutEvents">
            <div class="pagetitle absolute-text bannertitle">
                <h1>Events</h1>

            </div>
        </div>
        <div class="pagetitle container-fluid lockcontent">
            <!--
            <h2>About Events</h2>
-->
        </div>
        <section id="quotearea" class="container-fluid lockcontent flex_b">
            <img class="quoteimg" src="images/events/MOCA_2.jpg" />
            <div class="quote flex_b">
                <p class="justify flex_b">
                    AOAT provides many opportunities for students to explore their community, from field trips to museums, to volunteering, to career connected visits. We also bring professionals to campus to share their insights about current issues, post-secondary education, and careers. The following are a list of activities that students participate in: Career Exploration Visits, Career Day, College Tours, Museum of Contemporary Art, Museum of Tolerance, Art Club, Annual Homecoming Float, Awards Ceremony, Community Outreach & Volunteer, Day of the Dead Festival, Conferences & Presentations,

                </p>
            </div>
        </section>
        <section class="flex_b container-fluid lockcontent">
            <div class="sidebuttons flex_b flex_column">
                <button class="sidebtn btn btn-info" value="#trips">Field Trips</button>
                <button class="sidebtn btn btn-info" value="#Career">Career Day</button>
                <button class="sidebtn btn btn-info" value="#Celebration">Celebrations</button>

            </div>
            <div id="info">
                <article id="trips">
                    <section class="flex_b">
                        <div class="flex_b">
                            <div>
                                <h3>College Tours</h3>
                                <p class="justify">
                                    Another major part of AOAT is exposing our students to college, and making this an actual goal for them to prepare for throughout high school. College tours – and the workshops before and after – confirm for them the necessity of good grades and participation in high school activities. This past spring we took 10th graders to University of Southern California, and 11th graders on a double tour of both California State University Northridge and our closest community college, Pierce. Both grade levels researched the designated schools, and our AOAT counselor Ami McColl reviewed with them their current credits and what they need to do to be ready to apply to college their senior year.


                                </p>
                            </div>
                        </div>
                        <img class="img" src="images/events/collegetour.jpg" />
                    </section>
                    <section class="flex_b">
                        <div class="flex_b">
                            <div>
                                <h3>Museum of Contemporary Art</h3>
                                <p class="justify">
                                    Several AOAT teachers belong to the MOCA program Contemporary Art Start that provides two trips to the museum every year. These trips take place in the fall and spring, and are often a reward for students with a grade average of C and above. Students learn about contemporary art, and have the opportunity to explore downtown Los Angeles.
                                </p>
                            </div>
                        </div>
                        <img class="img" src="images/events/MOCA.jpg" />
                    </section>
                    <section class="flex_b">
                        <div class="flex_b">
                            <div>
                                <h3>Museum of Tolerance</h3>
                                <p class="justify">
                                    All 10th graders attend this trip that connects to their English and Social Studies classes. They prepare by learning about World War II, and reading related literature, and then write a reflection after the trip.
                                </p>
                            </div>
                        </div>
                        <img class="img" src="images/placeholder.jpg" />
                    </section>
                </article>
                <article id="Career">
                    <section class="flex_b">
                        <div class="flex_b">
                            <div>
                                <h3>Career Day</h3>
                                <p class="justify">
                                    Various ECCO workshops throughout the year prepare students for college and career, and perhaps the most important are the Career Exploration series. In 2011-2012 we had amazing trips during the fall to two new locations – the 10th graders all visited DreamWorks, and the 11th graders toured UCLA Hammer Museum of Art. Being able to see and hear from the people behind the scenes at a leading film studio and an eclectic art collection really opened eyes to career possibilities unknown to our young people. They researched both sites before the visit and did activities that informed and piqued their curiosity about hidden jobs and transferrable skills.
                                </p>
                            </div>
                        </div>
                        <img class="img" src="images/events/career_day.jpg" />
                    </section>
                </article>
                <article id="Celebration">

                    <section>
                        <h3>Celebrations</h3>
                        <p class="justify">
                            The Art Club hosts several potluck parties throughout the year, but especially at the end of each semester, where students and teachers share food and conversation, and play Rock Bank together. The teachers also celebrate semester grades for students who make the honor roll with ice cream socials, and the year-end Awards Assembly that recognizes achievement and improvement in every grade level.
                        </p>
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

</body>

</html>
