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
        <input id="Ey" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Year" value=""><br>
        <input id="Em" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Month" value=""><br>
        <input id="Ed" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Day" value=""><br>
        <button onclick="check()" style="width: 500px;">Edit Events</button>
    </form>
    <div class="events">

    </div>
    <script>
        function check() {
            event.preventDefault();

            var Emonth = $("#Em").val();
            var Eyear = $("#Ey").val();
            var Eday = $("#Ed").val();
            var formData = {
                'year': Eyear,
                'month': Emonth,
                'day': Eday
            };

            $.ajax({
                    type: 'POST',
                    url: 'calender/check.php',
                    data: formData,
                    dataType: 'html',
                    encode: true
                })
                .done(function(data) {
                    $('.events').html(data);
                });

        }

    </script>
