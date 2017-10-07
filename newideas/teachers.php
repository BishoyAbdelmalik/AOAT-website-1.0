<?php
 error_reporting (0);
    $true="";
$teacher="";
if($_GET){
    $true="ture";
    $teacher=$_GET[t];
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <title>AOAT | Teachers</title>
    </head>

    <body>
        <header>
            <?php
        require 'header.php';

        ?>
        </header>
        <div>
            <div class="content_main">
                <div class="banner" id="teachers">
                    <h2 class="pages_title">Teachers</h2>
                </div>
                <div class="container-fluid teachers_columns lockcontent">

                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#rosillo" data-toggle="collapse">
                                <img src="images/teachers/rosillo.jpg">
                                <p>Gabriela Rosillo</p>

                            </a>
                            </div>
                            <div>
                                <a href="#rosillo" data-toggle="collapse">
                                    <h4>Gabriela Rosillo</h4>
                                </a>
                                <p><i>Coordinator, Art and Design</i><br> Grade: 10, 11, and 12</p>
                                <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#rosillo">
                            View Profile</button>

                            </div>
                        </div>
                        <div id="rosillo" class="collapse">
                            <p>
                                Coordinator, design teacher, graduated with a degree in Art and Design, concentration in graphic design, from Cal Poly State University, San Luis Obispo. Having worked as a freelance graphic designer and art director, she has experience in conceptual design, production, photography, photo retouching, and web design. She received her teaching credential from Cal State University, Northridge, and her CTE training at UCLA. She connects with students both in design classes and in her award-winning Yearbook program.
                            </p>
                        </div>
                    </div>

                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#barreto" data-toggle="collapse">
                                <img src="images/teachers/placeholder.jpg">
                                <p>Louis Barreto</p>
                            </a>
                            </div>
                            <div>
                                <a href="#barreto" data-toggle="collapse">
                                    <h4>Louis Barreto</h4>
                                </a>
                                <p><i>Art and Design</i><br> Grade: 9, 10, 11, 12</p>
                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#barreto">View Profile</button>
                            </div>
                        </div>
                        <div id="barreto" class="collapse">
                            <p>
                                9th and 10th grade drawing and painting teacher. Graduated from California State University Northridge with a degree in arts, concentrating in illustration and education. He also received his teaching credential from Cal State University Northridge. His previous experience includes art director at an enrichment company operating in the Santa Clarita Valley and freelance graphic designer. He is co-founder and editor in chief of Enizine, a monthly magazine publication on the CSUN campus. His work focuses on blending traditional and digital illustration to create stories through his art. As an educator, Barreto strives to enrich students on how to create art and communicate through it.
                            </p>
                        </div>
                    </div>


                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#fenno-bustos" data-toggle="collapse">
                                <img src="images/teachers/placeholder.jpg">
                                <p style="font-size: 16px;">Gregory Fenno-Bustos</p>
                            </a>
                            </div>
                            <div>
                                <a href="#fenno-bustos" data-toggle="collapse">
                                    <h4>Gregory Fenno-Bustos</h4>
                                </a>
                                <p><i>Intro to Art</i><br> Grade: 9</p>

                                <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#fenno-bustos">View Profile</button>

                            </div>
                        </div>
                        <div id="fenno-bustos" class="collapse">
                            <p>
                                need bio
                            </p>
                        </div>
                    </div>


                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#michael" data-toggle="collapse">
                                <img src="images/teachers/placeholder.jpg">
                                <p>Michael Trimarchi</p>
                            </a>
                            </div>
                            <div>
                                <a href="#michael" data-toggle="collapse">
                                    <h4>Michael Trimarchi</h4>
                                </a>
                                <p><i>TA</i><br></p>

                                <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#michael">View Profile</button>

                            </div>
                        </div>
                        <div id="michael" class="collapse">
                            <p>
                                need bio
                            </p>
                        </div>
                    </div>

                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#berkowitz" data-toggle="collapse">
                                <img src="images/teachers/berkowitz.jpg">
                                <p>Benett Berkowitz</p>
                            </a>
                            </div>
                            <div>
                                <a href="#berkowitz" data-toggle="collapse">
                                    <h4>Benett Berkowitz</h4>
                                </a>
                                <p><i>English</i><br> Grade: 10 and 12</p>
                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#berkowitz">View Profile</button>
                            </div>
                        </div>
                        <div id="berkowitz" class="collapse">
                            <p>
                                English teacher (and general population drama teacher), attended the SUNY College at Buffalo, NY earning a Bachelor's of Science in Education with an emphasis in Secondary English. His dramatic style of teaching brings literature to life for the students, and his warm, effusive personality builds friendships as he works on multiple grade levels. Most AOAT students have Mr. Berkowitz in both 10th and 12th grades. He also is a part of the Impact (intervention) team of teachers for Cleveland, and sponsors the "Be the Conscious Change" club on campus.
                            </p>
                        </div>
                    </div>
                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#fitzmorris" data-toggle="collapse" class="disabled">
                                <img src="images/teachers/fitzmorris.jpg">
                                <p>David Fitzmorris</p>
                            </a>
                            </div>
                            <div>
                                <a href="#fitzmorris" data-toggle="collapse" class="disabled">
                                    <h4>David Fitzmorris</h4>
                                </a>
                                <p><i>English</i><br> Grade: 11</p>

                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#fitzmorris">View Profile</button>

                            </div>
                        </div>
                        <div id="fitzmorris" class="collapse">
                            <!--Teacher's profile goes here with <p></p> and remove " class="disabled" " on the a href tag-->
                        </div>
                    </div>


                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#kosach" data-toggle="collapse">
                                <img src="images/teachers/placeholder.jpg">
                                <p>Kim Kosach</p>
                            </a>
                            </div>
                            <div>
                                <a href="#kosach" data-toggle="collapse">
                                    <h4>Kim Kosach</h4>
                                </a>
                                <p><i>English</i><br> Grade: 11</p>


                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#kosach">View Profile</button>

                            </div>
                        </div>
                        <div id="kosach" class="collapse">
                            <p>
                                need bio
                            </p>
                        </div>
                    </div>

                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#penders" data-toggle="collapse">
                                <img src="images/teachers/penders.jpg">
                                <p>Maura Penders</p>

                            </a>
                            </div>
                            <div>
                                <a href="#penders" data-toggle="collapse">
                                    <h4>Maura Penders</h4>
                                </a>
                                <p><i>English</i><br> Grade: 10</p>


                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#penders">View Profile</button>

                            </div>
                        </div>
                        <div id="penders" class="collapse">
                            <p>
                                Educated at Canisius College, Syracuse University and Hamline University, Maura Penders graduated Magna Cum Laude with a B.A. in English, an M.S. in Film and a Master of Fine Arts in Writing. Previous experience includes writing for television and film and behind the scenes positions in television production. Taught screening at the University level, animation, film production and film appreciation at Birmingham High School and Daniel Pearl Magnet High School. A member of the Cleveland faculty since 2009, Maura Penders is a member of AOAT’s 9th, 10th and 11th Grade teams.
                            </p>
                        </div>
                    </div>

                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#yuen" data-toggle="collapse">
                                <img src="images/teachers/placeholder.jpg">
                                <p>Ellen Yuen</p>
                            </a>
                            </div>
                            <div>
                                <a href="#yuen" data-toggle="collapse">
                                    <h4>Ellen Yuen</h4>
                                </a>
                                <p><i>English</i><br> Grade: 9</p>

                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#yuen">View Profile</button>

                            </div>
                        </div>
                        <div id="yuen" class="collapse">
                            <p>
                                need bio
                            </p>
                        </div>
                    </div>

                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#mccoll" data-toggle="collapse">
                                <img src="images/teachers/mccoll.jpg">
                                <p>Ami McColl</p>
                            </a>
                            </div>
                            <div>
                                <a href="#mccoll" data-toggle="collapse">
                                    <h4>Ami McColl</h4>
                                </a>
                                <p><i>Counselor</i><br> Grade: 10, 11, and 12</p>
                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mccoll">View Profile</button>
                            </div>
                        </div>
                        <div id="mccoll" class="collapse">
                            <p>
                                Counselor, graduated from Loyola Marymount University, Los Angeles, CA with a Bachelor of Arts Degree in Political Science and Economics, where she also earned her Master of Arts in Education and her Pupil Personnel Services Credential. Prior to joining the Cleveland counseling staff, Ms. McColl was a counselor at University High School and Marina del Rey Middle School. Ms. McColl keeps all students on track and informed about opportunities and requirements for graduation and college. She is at the heart of AOAT, and is key to our excellent graduation rate.
                            </p>
                        </div>
                    </div>


                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#degracia" data-toggle="collapse">
                                <img src="images/teachers/degracia.jpg">
                                <p>Wesley DeGracia</p>

                            </a>
                            </div>
                            <div>
                                <a href="#degracia" data-toggle="collapse">
                                    <h4>Wesley DeGracia</h4>
                                </a>
                                <p><i>Social Studies</i><br> Grade: 10 and 12</p>
                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#degracia">View Profile</button>
                            </div>
                        </div>
                        <div id="degracia" class="collapse">
                            <p>
                                12th grade team leader, social studies teacher, Art Club sponsor, is a graduate of UCLA with a BA in History, and earned his teaching credential at CSUN. Joining AOAT when he came to Cleveland, Mr. De Gracia is a tireless sponsor for all the Art Club activities, and teaches the majority of our students in both 10th and 12th grade. He also is our chief BBQ chef for parties, and supplies Rock Band for all events.
                            </p>
                        </div>
                    </div>


                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#neustaedter" data-toggle="collapse">
                                <img src="images/teachers/neustaedter.jpg">
                                <p>Laura Neustaedter</p>
                            </a>
                            </div>
                            <div>
                                <a href="#neustaedter" data-toggle="collapse">
                                    <h4>Laura Neustaedter</h4>
                                </a>
                                <p><i>Social Studies</i><br> Grade: 10 and 11</p>
                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#neustaedter">
															View Profile
														</button>
                            </div>
                        </div>
                        <div id="neustaedter" class="collapse">
                            <p>
                                11th Grade Team leader, World and U.S. History teacher, AOAT Scholarships coordinator, and AOAT Mentor Program sponsor; Ms. Neustaedter graduated with a BA in History from San Diego State University and went on to pursue both a Multiple Subject Teaching Credential and a Single Subject Teaching Credential in the field of Social Science. She became a National Board Certified teacher in 2014. Her years as an elementary teacher before joining AOAT gave her a breadth of knowledge that informs her interdisciplinary projects and her incorporation of literacy and writing skills into the curriculum. Ms. Neustaedter’s experiences as a United Teachers Los Angeles chapter chair and as a Master Cooperating Teacher for Cal State Northridge, developed her leadership skills which she brings to heading the AOAT’s 11th Grade Team.
                            </p>
                        </div>
                    </div>


                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#prato" data-toggle="collapse">
                                <img src="images/teachers/prato.jpg">
                                <p>Paola Prato</p>
                            </a>
                            </div>
                            <div>
                                <a href="#prato" data-toggle="collapse">
                                    <h4>Paola Prato</h4>
                                </a>
                                <p><i>Photography</i><br> Grade: 10</p>
                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#prato">
																	View Profile
																</button>
                            </div>
                        </div>
                        <div id="prato" class="collapse">
                            <p>
                                Paola Prato is a Photography teacher, a Cleveland HS graduate, received her BFA from California Institute of the Arts (CalArts) and her MA Ed. from CSU Los Angeles. She has worked with the Community Arts Partnership at CalArts and the Digital Arts Network at Side Street Projects developing and implementing innovative projects that link 10 community based arts organizations via the web. She has taught Art History and Digital Humanities, a film based, project driven, interdisciplinary class at Cleveland’s Humanities Magnet.

                            </p>
                        </div>
                    </div>
                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#ray" data-toggle="collapse">
                                <img src="images/teachers/ray.jpg">
                                <p>Runa Ray</p>
                            </a>
                            </div>
                            <div>
                                <a href="#ray" data-toggle="collapse">
                                    <h4>Runa Ray</h4>
                                </a>
                                <p><i>Chemistry</i><br> Grade: 11</p>
                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#ray">View Profile</button>
                            </div>
                        </div>
                        <div id="ray" class="collapse">
                            <p>
                                Chemistry teacher. Graduated with a Masters in Science (M.S.) in Chemistry, M.A. in Education and Administration, Single Subject Teaching Credential in Chemistry, Administrative Credential from CSUN. Her wide range of experience in teaching Chemistry in B.S. Level College in India, and in Chatsworth High School, CA., and as Assistant Research Scientist in a Lab in India brings enrichment in knowledge and variety in laboratory work to Cleveland HS, and to AOAT 11th grade team.
                            </p>
                        </div>
                    </div>

                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#broger-macky" data-toggle="collapse">
                                <img src="images/teachers/placeholder.jpg">
                                <p>Bruce Broger-Macky</p>
                            </a>
                            </div>
                            <div>
                                <a href="#broger-macky" data-toggle="collapse">
                                    <h4>Bruce Broger-Macky</h4>
                                </a>
                                <p><i>Biology</i><br> Grade: ?</p>
                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#broger-macky">View Profile</button>


                            </div>
                        </div>
                        <div id="broger-macky" class="collapse">
                            <p>
                                need bio
                            </p>
                        </div>
                    </div>

                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#hayes" data-toggle="collapse">
                                <img src="images/teachers/placeholder.jpg">
                                <p>Casey Hayes</p>
                            </a>
                            </div>
                            <div>
                                <a href="#hayes" data-toggle="collapse">
                                    <h4>Casey Hayes</h4>
                                </a>
                                <p><i>Biology</i><br> Grade: 10</p>


                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#hayes">View Profile</button>

                            </div>
                        </div>
                        <div id="hayes" class="collapse">
                            <p>
                                need bio
                            </p>
                        </div>
                    </div>

                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#norouzi" data-toggle="collapse">
                                <img src="images/teachers/placeholder.jpg">
                                <p>Soheila Norouzi</p>
                            </a>
                            </div>
                            <div>
                                <a href="#norouzi" data-toggle="collapse">
                                    <h4>Soheila Norouzi</h4>
                                </a>
                                <p><i>Honers Biology</i><br> Grade: 10</p>


                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#norouzi">View Profile</button>

                            </div>
                        </div>
                        <div id="norouzi" class="collapse">
                            <p>
                                need bio
                            </p>
                        </div>
                    </div>


                    <div class="bio_block">
                        <div class="line">
                            <div class="polaroid" data-toggle="collapse">
                                <a href="#sobel" data-toggle="collapse">
                                <img src="images/teachers/placeholder.jpg">
                                <p>Kate Sobel</p>

                            </a>
                            </div>
                            <div>
                                <a href="#sobel" data-toggle="collapse">
                                    <h4>Kate Sobel</h4>
                                </a>
                                <p><i>Enviromental Science</i><br> Grade: 9</p>




                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#sobel">View Profile</button>

                            </div>
                        </div>
                        <div id="sobel" class="collapse">
                            <p>
                                need bio
                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <footer>
            <?php 
            require 'footer.php';
            require 'js.php' ;
        ?>
        </footer>
        <?php
        jquery(0);
        nav();
        home();
        bootstrap(0);
        $script="";
        $script .="<script>";
        $script .="$(document).ready(function() {";
        $script .="$('#".$teacher."').collapse();";
        $script .="$('html, body').animate({";
        $script .="scrollTop: ($('#".$teacher."').first().offset().top)-500";
        $script .="}, 2000);});";
        $script .="</script>";
        if($true=="ture"){
            echo $script;
        }
        ?>
    </body>

    </html>
