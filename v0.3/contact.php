<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="images/logos/ico.gif">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/form_style.css">

    <title>AOAT | Contact</title>

</head>

<body>
    <header>
        <?php require 'php_dependancy/header.php';

        ?>
    </header>
    <div class="banner ">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13196.812160223182!2d-118.5474577!3d34.2178337!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa5324b726eca9e1e!2sCleveland+High+School!5e0!3m2!1sen!2sus!4v1516429525689">
        </iframe>
        <div class="container-fluid lockcontent"></div>
    </div>
    <div class="pagetitle container-fluid lockcontent" style="text-align:  center;">
        <h1 style="
                   font-family: 'Oswald', sans-serif;
                   ">Contact Us</h1>
    </div>
    <main class="container-fluid lockcontent">

        <div class="mainform">
            <form class="form" name="contactform" action="/php_dependancy/contact/send_form_email.php" method="post" target="my_iframe" enctype="multipart/form-data">
                <!--                                <div class="part1 flex wrap column">-->
                <div class="part1 flex wrap">
                    <!--class="email_label"-->
                    <div class="half_page">
                        <label id="first_name" class="label_form" for="first_name"><span>First Name:</span></label>
                        <input type="text" class="email" placeholder="" name="first_name">
                    </div>
                    <div class="half_page">
                        <label class="label_form" id="last_name" for="last_name"><span>Last Name:</span></label>
                        <input type="text" class="email" placeholder="" name="last_name">
                    </div>
                    <div class="half_page">
                        <label id="email" class="label_form" for="email"><span>E-mail:</span></label>
                        <input type="email" name="email" class="email" placeholder="" name="email">
                    </div>
                    <div class="half_page">
                        <label id="numb" class="label_form" for="numb"><span>Phone Number:</span></label>
                        <input type="tel" class="email" placeholder="" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" name="numb">
                    </div>
                </div>
                <div>
                    <label style="color: #006fb7;"><span class="are_you">Who are you?</span></label>
                </div>
                <div class="part2 flex wrap">
                    <div>
                        <input type="checkbox" id="parent" name="parent" value="1">
                        <label class="part2_label" for="parent">Parent </label>
                    </div>
                    <div>
                        <input type="checkbox" id="student" name="student" value="1">
                        <label class="part2_label" for="student">Student</label>
                    </div>
                    <div>
                        <input type="checkbox" id="teach" name="teacher" value="1">
                        <label class="part2_label" for="teach">Teacher</label>
                    </div>
                    <div>
                        <input type="checkbox" id="business" name="business" value="1">
                        <label class="part2_label" for="business">Business</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Partner" name="Partner" value="1">
                        <label class="part2_label" for="Partner">Partner</label>
                    </div>
                    <div>
                        <input type="checkbox" id="people" name="people" value="1">
                        <label class="part2_label" for="people">Other</label>
                    </div>
                </div>
                <div>
                    <div style="color: #006fb7;" class="flex column body">
                        <span><b>Message:</b> </span><textarea name="paragraph_text" cols="50" rows="10"></textarea>
                    </div>
                </div>
                <input class="btn  btn-info" style="width: 80px" type="submit" value="Send">
            </form>
            <iframe id="my_iframe" name="my_iframe" frameborder="0" src="" style="width:  100%;"></iframe>

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
        <script src="/js/contact_form.js"></script>


</body>

</html>
