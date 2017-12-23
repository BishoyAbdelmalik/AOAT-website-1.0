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
        <input id="fname" type="text" placeholder="First Name" value=""><br>
        <input id="lname" type="text" placeholder="Last Name" value=""><br>
        <input id="img" type="text" placeholder="image url" value=""><br>
        <input id="role" type="text" placeholder="role" value=""><br>
        <input id="grade" type="text" placeholder="grade" value=""><br>
        <textarea id="bio" width="500" height="500" type="text">Bio</textarea><br>
        <button onclick="save()" style="width: 500px;">Save</button>

    </form>
    <iframe id="frame" class="hidden" src="/teachers.php"></iframe>
    <script>
        function save() {
            event.preventDefault();

            var name = $("#fname").val() + " " + $("#lname").val();
            var link = $("#lname").val().toLowerCase();
            var img = $("#img").val();
            var role = $("#role").val();
            var grade = $("#grade").val();
            var bio = $("#bio").val();
            var formData = {
                'name': name,
                'link': link,
                'img': img,
                'role': role,
                'grade': grade,
                'bio': bio

            };

            // process the form
            $.ajax({
                    type: 'POST',
                    url: 'teachers/send.php?t=2',
                    data: formData,
                    dataType: 'html',
                    encode: true
                })
                // using the done promise callback
                .done(function(data) {
                    $('#frame').removeClass("hidden");
                    $('#frame').attr('src', $('iframe').attr('src'));
                    $('html, body').animate({
                        scrollTop: "1000"
                    }, 1000);
                });

        }

    </script>
