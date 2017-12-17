<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>AOAT | Events</title>
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

    </style>

</head>

<body>
    <header>
        <?php
            require 'header.php';
        ?>
    </header>
    <main>
        <div class="banner" id="aboutEvents">
            <div class="container-fluid lockcontent">
                <h2>About Events</h2>
            </div>
        </div>
        <section class="gray_txt lockcontent container-fluid">
            <p class="justify">
                AOAT provides many opportunities for students to explore their community, from field trips to museums, to volunteering, to career connected visits. We also bring professionals to campus to share their insights about current issues, post-secondary education, and careers. The following are a list of activities that students participate in:
            </p>
            <ul class="teachers_columns">
                <li>Career Exploration Visits</li>
                <li>Career Day</li>
                <li>College Tours</li>
                <li>Museum of Contemporary Art</li>
                <li>Museum of Tolerance</li>
                <li>Art Club</li>
                <li>Annual Homecoming Float</li>
                <li>Awards Ceremony</li>
                <li>Community Outreach & Volunteer</li>
                <li>Day of the Dead Festival</li>
                <li>Conferences & Presentations</li>
            </ul>
        </section>
        <section class="blue_background ">
            <div class="lockcontent container-fluid">
                <section class="flex_b padding_up">
                    <div class="flex_b club_name">
                        <div>
                            <h3>Field Trips</h3>
                            <p class="justify">
                                AOAT provides many field trips for students to explore their community and help improve their future, from field trips to museums such as Museum of Contemporary Art and Museum of Tolerance, to College Tours and visits to many universities in the area.


                            </p>

                        </div>

                    </div>
                    <img src="images/clubs/art%20club.jpg">

                </section>
                <div>
                    <section class="flex_b padding_up">
                        <div class="flex_b club_name ">
                            <div>
                                <h3>College Tours</h3>
                                <p class="justify">
                                    Another major part of AOAT is exposing our students to college, and making this an actual goal for them to prepare for throughout high school. College tours – and the workshops before and after – confirm for them the necessity of good grades and participation in high school activities. This past spring we took 10th graders to University of Southern California, and 11th graders on a double tour of both California State University Northridge and our closest community college, Pierce. Both grade levels researched the designated schools, and our AOAT counselor Ami McColl reviewed with them their current credits and what they need to do to be ready to apply to college their senior year.
                                </p>

                            </div>

                        </div>
                        <img src="images/clubs/art%20club.jpg">

                    </section>
                    <section class="flex_b padding_up">
                        <div class="flex_b club_name">
                            <div>
                                <h3>Museum of Contemporary Art</h3>
                                <p class="justify">
                                    Several AOAT teachers belong to the MOCA program Contemporary Art Start that provides two trips to the museum every year. These trips take place in the fall and spring, and are often a reward for students with a grade average of C and above. Students learn about contemporary art, and have the opportunity to explore downtown Los Angeles.
                                </p>
                            </div>

                        </div>
                        <img src="images/clubs/art%20club.jpg">

                    </section>
                    <section class="flex_b  padding_up padding_bottom">
                        <div class="flex_b club_name">
                            <div>
                                <h3>Museum of Tolerance</h3>
                                <p class="justify">
                                    All 10th graders attend this trip that connects to their English and Social Studies classes. They prepare by learning about World War II, and reading related literature, and then write a reflection after the trip.
                                </p>
                            </div>

                        </div>
                        <img src="images/clubs/art%20club.jpg">

                    </section>
                </div>
            </div>
        </section>
        <section class="gray_txt">
            <div class="lockcontent container-fluid">
                <h3>Career Day</h3>
                <div id="CareerDay">
                    <p class="justify">
                        Various ECCO workshops throughout the year prepare students for college and career, and perhaps the most important are the Career Exploration series. In 2011-2012 we had amazing trips during the fall to two new locations – the 10th graders all visited DreamWorks, and the 11th graders toured UCLA Hammer Museum of Art. Being able to see and hear from the people behind the scenes at a leading film studio and an eclectic art collection really opened eyes to career possibilities unknown to our young people. They researched both sites before the visit and did activities that informed and piqued their curiosity about hidden jobs and transferrable skills.
                    </p>
                </div>
            </div>
        </section>
        <section class="blue_background">
            <div id="art_club" class="flex_b container-fluid lockcontent padding_up padding_bottom">
                <article class="flex_b club_name">
                    <div>
                        <h3>Art Club</h3>
                        <div id="ArtClub">
                            <p class="justify">
                                The Art Club is open to any Cleveland student, but the leadership is part of AOAT, and the club is sponsored by AOAT teachers. They participate in various campus activities and fundraisers, but the biggest effort every year is the Homecoming Float in October. Our terrific artists have built the first place winning entry for the last four years!
                            </p>
                        </div>
                    </div>
                </article>
                <img src="images/clubs/art%20club.jpg">

            </div>
        </section>
        <section class="gray_txt" style="margin-bottom:  14px;">
            <div class="lockcontent container-fluid">

                <h3>Celebration</h3>
                <div id="Celebration">
                    <p class="justify">
                        The Art Club hosts several potluck parties throughout the year, but especially at the end of each semester, where students and teachers share food and conversation, and play Rock Bank together. The teachers also celebrate semester grades for students who make the honor roll with ice cream socials, and the year-end Awards Assembly that recognizes achievement and improvement in every grade level.
                    </p>
                </div>
            </div>
        </section>
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

</body>

</html>
