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
    header("Location: /b-admin"); /* Redirect browser */
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


        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 100px #333333 inset;
        }


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

        input {
            width: 500px;
            margin: 8px;
        }

        textarea {
            width: 500px;
            height: 368px;
            margin: 10px;

        }

    </style>
</head>

<body>

    <?php
require "../mysql.php";
$query="SELECT * FROM `calender`;";
$result=mysqli_query($connection,$query);
$rows=array();
while($row= mysqli_fetch_assoc($result)){
    array_push($rows, $row);
}
mysqli_free_result($result);
mysqli_close($connection); 
$calender="";
?>
        <div class="padding">
            <button onclick="Back()" style="width: 100%;">Back</button>
        </div>
        <div class="choice">
            <form id="calender_form">
                <div class="flex_b">
                    <button onclick="add()">Add an Event</button>
                    <button onclick="edit()">Edit an Event</button>
                </div>
            </form>
        </div>
        <div id="respond">
            <div id="add" class="hidden">
                <form style="color:  black;">
                    <input id="Etitle" type="text" placeholder="Event Title" value=""><br>
                    <input id="Edescription" type="text" placeholder="Event Description" value=""><br>
                    <input id="Etime" type="text" placeholder="Event Time" value=""><br>
                    <input id="Em" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Month" value=""><br>
                    <input id="Ed" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Day" value="<?php echo trim(date(" j "));?>"><br>
                    <input id="Ey" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Year" value="<?php echo trim(date(" Y "));?>"><br>
                    <button onclick="save_add()" style="width: 500px;">Add Event</button>

                </form>
            </div>
            <div id="edit" class="hidden">
                <form style="color:  black;">
                    <input id="Ey_edit" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Year" value=""><br>
                    <input id="Em_edit" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Month" value=""><br>
                    <input id="Ed_edit" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Day" value=""><br>
                    <button onclick="check()" style="width: 500px;">Edit Events</button>
                </form>
                <div class="events">

                </div>
            </div>

        </div>

        <?php
            require '../../php_dependancy/js.php' ;
                    jquery(1);
    ?>
            <script>
                function add() {
                    event.preventDefault();
                    $('#add').removeClass("hidden");
                    $('#edit').addClass("hidden");
                }


                function edit() {
                    event.preventDefault();
                    $('#edit').removeClass("hidden");
                    $('#add').addClass("hidden");
                }

                function Back() {
                    window.location.href = "../loggedin.php";

                }

                function save_add() {
                    event.preventDefault();

                    var Etitle = $("#Etitle").val();
                    var Edescription = $("#Edescription").val();
                    var Etime = $("#Etime").val();
                    var Emonth = $("#Em").val();
                    var Eday = $("#Ed").val();
                    var Eyear = $("#Ey").val();
                    var formData = {
                        'year': Eyear,
                        'month': Emonth,
                        'day': Eday,
                        'event': Etitle,
                        'details': Edescription,
                        'time': Etime

                    };

                    $.ajax({
                            type: 'POST',
                            url: 'send.php?t=2',
                            data: formData,
                            dataType: 'html',
                            encode: true
                        })
                        .done(function(data) {
                            alert(data);
                        });

                }

                function check() {
                    event.preventDefault();

                    var Emonth = $("#Em_edit").val();
                    var Eyear = $("#Ey_edit").val();
                    var Eday = $("#Ed_edit").val();
                    var formData = {
                        'year': Eyear,
                        'month': Emonth,
                        'day': Eday
                    };

                    $.ajax({
                            type: 'POST',
                            url: 'check.php',
                            data: formData,
                            dataType: 'html',
                            encode: true
                        })
                        .done(function(data) {
                            $('.events').html(data);
                        });

                }

            </script>
</body>
<footer>
    <p>Control Panel coded By <a href="mailto:mrboushy@gmail.com"><img class="b" src="../img/b.svg" alt="Bishoy Abdelmalik" /></a></p>
</footer>

</html>
