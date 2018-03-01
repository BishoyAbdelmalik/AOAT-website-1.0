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
        <input id="name" type="text" value="<?php echo $rows[0][name]?>"><br>
        <input id="img" type="text" value="<?php echo $rows[0][img]?>"><br>
        <input id="role" type="text" value="<?php echo $rows[0][role]?>"><br>
        <input id="grade" type="text" value="<?php echo $rows[0][grade]?>"><br>
        <textarea id="bio" width="500" height="500" type="text"><?php echo $rows[0][bio]?></textarea><br>
        <button onclick="send()" style="width: 500px;">Save</button>

    </form>
    <iframe id="frame" class="hidden" src="/teachers.php"></iframe>
    <script>
        function send() {
            event.preventDefault();

            var id = "<?php echo $rows[0][id]?>";
            var name = $("#name").val();
            var link = "<?php echo $rows[0][link]?>";
            var img = $("#img").val();
            var role = $("#role").val();
            var grade = $("#grade").val();
            var bio = $("#bio").val();


            var formData = {
                'id': id,
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
                    url: 'send.php?t=1',
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
