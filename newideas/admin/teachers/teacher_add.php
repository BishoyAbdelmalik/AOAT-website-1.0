<?php
error_reporting(0);
require "../mysql.php";
$query="SELECT * FROM `teachers` WHERE name='".$_POST[t]."';";
$result=mysqli_query($connection,$query);
$rows=array();
while($row= mysqli_fetch_assoc($result)){
    array_push($rows, $row);
}
mysqli_free_result($result);
mysqli_close($connection); 
?>
    <style>
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
    <form style="color:  black;">
        <input type="text" placeholder="name" value=""><br>
        <input type="text" placeholder="image url" value=""><br>
        <input type="text" placeholder="role" value=""><br>
        <input type="text" placeholder="grade" value=""><br>
        <textarea width="500" height="500" type="text">Bio</textarea><br>
        <button onclick="send()" style="width: 500px;">Save</button>

    </form>
    <script>
        function save() {
            /*var t = $("#teachers").val();
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
            });*/
        }

    </script>
