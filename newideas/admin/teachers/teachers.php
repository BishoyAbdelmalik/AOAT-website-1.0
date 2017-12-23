<style>
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

    <script>
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
                        url: 'teachers/teacher_edit.php',
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
                        url: 'teachers/teacher_add.php',
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
                    url: 'teachers/send.php?t=0',
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
            $.post(
                "teachers/teachers.php", "",
                function(data) {
                    $('body').html(data);

                }
            );
        }

    </script>
