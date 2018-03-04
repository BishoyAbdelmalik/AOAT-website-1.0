<?php
error_reporting(0);
// Start the session
session_start();
if($_SESSION["login"]==1){
    header("Location: loggedin.php"); 
    exit();
}else{
    $_SESSION["login"] = 0;

}

//in minutes
$expireAfter = 10;


if(isset($_SESSION['last_action'])){

    //Figure out how many seconds have passed
    //since the user was last active.
    $secondsInactive = time() - $_SESSION['last_action'];

    //Convert our minutes into seconds.
    $expireAfterSeconds = $expireAfter * 60;

    //Check to see if they have been inactive for too long.
    if($secondsInactive >= $expireAfterSeconds){
        //User has been inactive for too long.
        //Kill their session.
        session_unset();
        session_destroy();
    }

}

//Assign the current timestamp as the user's
//latest activity
$_SESSION['last_action'] = time();
?>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>AOAT | Admin</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />

        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" href="img/Artboard%201.gif">
        <style>


        </style>
    </head>

    <body>
        <div class="flex_b logo_area container-fluid lockcontent">
            <img class="logo" src="/images/logos/aoat%20final%20logo.svg" />
        </div>
        <form id="login">
            <label>
            <input type="text" name="user_name" required />
            <div class="label-text">User Name</div>
        </label>
            <label>
            <input type="password" name="password" required />
            <div class="label-text">Password</div>
        </label>
            <button id="sign_in">Sign In</button>
        </form>
        <div id="output">

        </div>
    </body>
    <?php
    require '../php_dependancy/js.php' ;
    jquery(1);
    ?>
        <script>
            $(document).ready(function() {

                // process the form
                $('#login').submit(function(event) {

                    // get the form data
                    // there are many ways to get this data using jQuery (you can use the class or id also)
                    var formData = {
                        'user_name': $('input[name=user_name]').val(),
                        'password': $('input[name=password]').val()

                    };

                    // process the form
                    $.ajax({
                            type: 'POST',
                            url: 'post.php',
                            data: formData,
                            dataType: 'html',
                            encode: true
                        })
                        // using the done promise callback
                        .done(function(data) {
                            window.location.href = "loggedin.php";

                        });

                    // stop the form from submitting the normal way and refreshing the page
                    event.preventDefault();
                });

            });

        </script>

        <footer>
            <p>Control Panel coded By <a href="mailto:mrboushy@gmail.com"><img class="b" src="img/b.svg" alt="Bishoy Abdelmalik" /></a></p>
        </footer>

    </html>
