<?php 
session_start();
//minutes or more.
$expireAfter = 5;

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
if($_SESSION["login"]==1){

}else{
    header("Location: /admin"); /* Redirect browser */
    exit();
}
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AOAT | Admin</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../img/Artboard%201.gif">
    <style>
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

        .choice {
            margin: 5%;
        }

        #respond {
            color: white;

        }

        .padding {
            padding: 10px
        }

        iframe {
            width: 100%;
            height: 109vh;
            margin-top: 62px;
            transition: 1s;
        }

        .hidden {
            display: none;
            opacity: 0;
        }

    </style>
</head>

<body>
    <?php
require "../mysql.php";
$query="SELECT * FROM `teachers`;";
$result=mysqli_query($connection,$query);
$rows=array();
while($row= mysqli_fetch_assoc($result)){
    array_push($rows, $row);
}
mysqli_free_result($result);
mysqli_close($connection); 
$teachers="";
?>
        <div class="padding">
            <button onclick="Back()" style="width: 100%;">Back</button>
        </div>
        <div class="choice">
            <form id="teacher_form">
                <select id="teachers">
        <?php
        foreach ($rows as $row){
            
            $teachers.='<option value="'.$row[name].'">'.$row[name].'</option>';
           
        }
        echo $teachers
        ?>    
    </select>
                <div class="flex_b">
                    <button onclick="edit()">Edit Teacher Info</button>
                    <button onclick="add()">Add Teacher</button>
                </div>
                <button onclick="del()">Delete Selected Teacher</button>
                <button onclick="refresh()">Refresh</button>
            </form>
        </div>
        <div id="respond">

        </div>
        <?php
            require '../../php_dependancy/js.php' ;
                    jquery(1);
    ?>
            <script>
                function Back() {
                    window.location.href = "../loggedin.php";

                }

                function edit() {
                    $('#respond').html("");
                    var t = $("#teachers").val();
                    $('#teacher_form').submit(function(event) {

                        // get the form data
                        // there are many ways to get this data using jQuery (you can use the class or id also)
                        var formData = {
                            't': t

                        };

                        // process the form
                        $.ajax({
                                type: 'POST',
                                url: 'teacher_edit.php',
                                data: formData,
                                dataType: 'html',
                                encode: true
                            })
                            // using the done promise callback
                            .done(function(data) {
                                $('#respond').html(data);

                            });

                        // stop the form from submitting the normal way and refreshing the page
                        event.preventDefault();
                    });
                }

                function add() {
                    $('#respond').html("");
                    $('#teacher_form').submit(function(event) {

                        // process the form
                        $.ajax({
                                type: 'POST',
                                url: 'teacher_add.php',
                                data: "",
                                dataType: 'html',
                                encode: true
                            })
                            // using the done promise callback
                            .done(function(data) {
                                $('#respond').html(data);

                            });

                        // stop the form from submitting the normal way and refreshing the page
                        event.preventDefault();
                    });
                }



                function del() {
                    event.preventDefault();

                    var t = $("#teachers").val();

                    // get the form data
                    // there are many ways to get this data using jQuery (you can use the class or id also)
                    var formData = {
                        't': t

                    };

                    // process the form
                    $.ajax({
                            type: 'POST',
                            url: 'send.php?t=0',
                            data: formData,
                            dataType: 'html',
                            encode: true
                        })
                        // using the done promise callback
                        .done(function(data) {
                            $('#respond').html('<iframe id="frame" class="hidden" src="/teachers.php"></iframe>');
                            $('#frame').removeClass("hidden");
                            $('html, body').animate({
                                scrollTop: "1000"
                            }, 1000);
                        });
                }

                function refresh() {
                    event.preventDefault();
                    location.reload();

                }

            </script>
</body>
<footer>
    <p>Control Panel coded By <a href="mailto:mrboushy@gmail.com"><img class="b" src="../img/b.svg" alt="Bishoy Abdelmalik" /></a></p>
</footer>

</html>
