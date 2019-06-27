<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="images/logos/ico.gif">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>AOAT | Alumni</title>
    <style>
        .reyes {
            padding-top: 1px;
            padding-bottom: 5px;
        }

        .face {
            padding-top: 12px;
            padding-bottom: 5px;
        }

        .bio_block {
            border-bottom: none;
        }

        hr {
            border: 0;
            height: 1px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), #8a0add, rgba(0, 0, 0, 0));
        }

        .bio_block {
            padding: 25px;
        }

    </style>
</head>

<body>
    <header>
        <?php require 'php_dependancy/header.php';

        ?>
    </header>
    <main>
        <div class="banner homeimage aboutAOAT landing" id="alumni">
            <div class="pagetitle absolute-text bannertitle">
                <h1>Alumni</h1>

            </div>
        </div>
        <div class="container-fluid teachers_columns lockcontent">
            <div class="bio_block">
                <div class="line">
                    <div class="polaroid" data-toggle="collapse"><a href="#" data-toggle="collapse"><img src="images/teachers/placeholder.jpg"><p>Danielle Rocha</p></a></div>
                    <div>
                        <a href="#rosillo" data-toggle="collapse">
                            <h4>Danielle Rocha</h4>
                        </a>
                        <p><i>Class of 2014</i>
                        </p>
                    </div>
                </div>
                <div>
                    <p class="justify">
                        I am currently in my third year at California State University of Northridge. My major is Electronic Media Management and I’m minoring in Marketing. Just a little on my major, based on CSUN’s website, Electronic Media Management is the “Operational and management aspects of independent, research and regulation of the media industries.” I originally came into CSUN wanting to pursue a career in Deaf Studies. After my first day in an American Sign Language 3 (ASL 3) class, I decided I no longer wanted to pursue that field. Although, my love for the language is still there. After doing some research and following my passion for YouTube, I changed my major to Electronic Media Management. AOAT has made a huge impact on my life, by introducing me to the different aspects of the digital and design world. In my current courses at CSUN I am easily able to relate what I have learned in AOAT with the material I am learning today. This program has provided me with the professional skills necessary when applying and interviewing for a job. I definitely have the professional dress down pat, thanks to Dress for Success. Finally, AOAT created a family and lifelong friends.
                    </p>
                </div>
            </div>
            <div class="bio_block">
                <div class="line">
                    <div class="polaroid" data-toggle="collapse"><a href="#" data-toggle="collapse"><img src="images/teachers/placeholder.jpg"><p>Jose Reyes</p></a></div>
                    <div>
                        <a href="#rosillo" data-toggle="collapse">
                            <h4>Jose Reyes</h4>
                        </a>
                        <p><i>Class of 2014</i>
                        </p>
                    </div>
                </div>
                <div>
                    <p class="justify">
                        I am currently a Junior (<sup>3rd</sup> year) in college at California State University Northridge. My major is Business management and economics. I decided to major in business while I was still in high school. I found my motivated to strive for greatness every time we had an assignment deadline either in graphic design with Ms. Mercer, history class with Mr. DeGracia or Ms. Neustaedter. I found amusement in business when taking Mr. DeGracia’s economics class, learning the ethical perspective in society.
                    </p>
                    <p class="justify">

                        AOAT helped me shaped my future in ways I did not expect until I encounter real life scenarios many which we rehearsed in AOAT. The mock interviews we practiced helped me prepared for an interview to obtain a job at Keyes Lexus for the position of product specialist. The multiple deadlines Ms. Mercer introduced into our assignments helped me manage time well and set up deadlines of my own to better organize my days to be productive. Most importantly AOAT taught me the importance of networking and making relations with people who are willing to help you reach the next level and to never burn bridges. After we had a guest speaker or anyone who willingly donated their time to come to the classroom and share something with us, we were expected to write a “thank you” letter to the person/organization hosted. Today I realized the importance of having a circle of influence filled with people that aspire to scceed as much as you do.
                    </p>
                    <p class="justify">

                        I recently began to network with a production company called Coll Beans Comedy. The company focuses on hosting live stand-up shows, private events, and corporate training. The producer, Corey has allowed me to come on board to help increase the publicity of the company and take it to the next level. Our goal is to take Cool Been Comedy shows to many venues around the country. Through the opportunity granted to me by the producer and the preparation I received from AOAT and CSUN, I am learning about my future. After I graduate from CSUN. Knowing your purpose in life is the most important feature you can learn about yourself.
                    </p>
                </div>
            </div>
        </div>
        <hr>


        <div class="face container-fluid  lockcontent">

            <p>
                Keep up to date with our alumni on the <a target="_blank" href="https://www.facebook.com/aoat.alums/">AOAT Alumni Facebook Page</a>
            </p>
        </div>
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
    ?>

</body>

</html>
