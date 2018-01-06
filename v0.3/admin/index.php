<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AOAT | Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="img/Artboard%201.gif">
    <style>
        .logo {
            width: 50%;
            height: auto;
            max-width: 400px;
        }

        .logo_area {
            padding: 20px;
            text-align: center;
        }

        #login {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        footer {
            color: white;
            position: absolute;
            bottom: 5px;
            right: 10px;
            text-align: right;
        }

        .b {
            max-width: 50px
        }

        /* Change the white to any color ;) */

        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 100px #333333 inset;
        }

        /*Change text in autofill textbox*/

        input:-webkit-autofill {
            -webkit-text-fill-color: white !important;
        }

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
    require '../js.php' ;
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
                        type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                        url: 'post.php', // the url where we want to POST
                        data: formData, // our data object
                        dataType: 'html', // what type of data do we expect back from the server
                        encode: true
                    })
                    // using the done promise callback
                    .done(function(data) {


                        if (data != "true") {
                            $('#output').html(data);
                        } else {

                            $.post(
                                "loggedin.php", {
                                    'user_name': $('input[name=user_name]').val(),
                                    'password': $('input[name=password]').val(),
                                    'page': "home"

                                },
                                function(data) {
                                    $('body').html(data);
                                    /*var myURL = document.location; document.location = myURL + "#home";*/
                                }
                            );
                        }
                        // here we will handle errors and validation messages
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
