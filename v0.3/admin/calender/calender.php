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

    </div>


    <script>
        function edit() {
            event.preventDefault();
            $('#respond').html("");
            //            var t = $("#teachers").val();
            $('#calender_form').submit(function(event) {

                // get the form data
                // there are many ways to get this data using jQuery (you can use the class or id also)
                var formData = {
                    't': t

                };

                // process the form
                $.ajax({
                        type: 'POST',
                        url: 'calender/calender_edit.php',
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
            $('#calender_form').submit(function(event) {

                // process the form
                $.ajax({
                        type: 'POST',
                        url: 'calender/calender_add.php',
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

        function Back() {
            $('body').html("");
            // process the form
            $.ajax({
                    type: 'POST',
                    url: 'home.php',
                    data: "",
                    dataType: 'html',
                    encode: true
                })
                // using the done promise callback
                .done(function(data) {
                    $('body').html(data);

                });


        }

    </script>
