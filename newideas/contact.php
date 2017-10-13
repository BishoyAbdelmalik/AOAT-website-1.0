<!DOCTYPE html>
<html lang="en">

<head>
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
        <?php
        require 'header.php';

        ?>
    </header>
    <div class="banner" id="contact">

        <h2 class="pages_title">Contact US</h2>
    </div>
    <!-- contact form code-->
    <div class="mainform">
        <form class="form" name="contactform" action="send_form_email.php" method="post" target="my_iframe" enctype="multipart/form-data">
            <div class="part1 flex wrap column">
                <!--class="email_label"-->
                <input type="text" class="email" placeholder="First Name:" name="first_name">
                <label id="first_name" class="label_form" for="first_name"><span>First Name:</span></label>
                <input type="text" class="email" placeholder="Last Name:" name="last_name">
                <label class="label_form" id="last_name" for="last_name"><span>Last Name:</span></label>
                <input type="text" class="email" placeholder="E-mail:" name="email">
                <label id="email" class="label_form" for="email"><span>E-mail:</span></label>
                <input type="text" class="email" placeholder="Phone Number:" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" name="numb">
                <label id="numb" class="label_form" for="numb"><span>Phone Number:</span></label>
            </div>
            <div>
                <label><span class="are_you">Are you ?</span></label>
            </div>
            <div class="part2 flex wrap">
                <div>
                    <input type="checkbox" id="teach" name="teacher" value="1">
                    <label class="part2_label" for="teach">teacher</label>
                </div>
                <div>
                    <input type="checkbox" id="student" name="student" value="1">
                    <label class="part2_label" for="student">Student</label>
                </div>
                <div>
                    <input type="checkbox" id="parent" name="parent" value="1">
                    <label class="part2_label" for="parent">Parent </label>
                </div>
                <div class="other flex row">
                    <label for="other"><span>Other: </span></label>
                    <input type="text" class="email" id="other" name="other">
                </div>

            </div>
            <div style="max-width: 500px">
                <div class="flex column body">
                    <span><b>Message:</b> </span><textarea name="paragraph_text" cols="50" rows="10"></textarea>
                </div>
            </div>
            <input class="btn btn-primary" style="width: 80px" type="submit" value="Send">
        </form>
        <iframe id="my_iframe" name="my_iframe" frameborder="0" src=""></iframe>

    </div>
    <main>

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
    form();
    ?>

</body>

</html>
