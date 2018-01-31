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
    <input id="Etitle" type="text" placeholder="Event Title" value=""><br>
    <input id="Edescription" type="text" placeholder="Event Description" value=""><br>
    <input id="Etime" type="text" placeholder="Event Time" value=""><br>
    <input id="Em" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Month" value=""><br>
    <input id="Ed" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Day" value="<?php echo trim(date(" j "));?>"><br>
    <input id="Ey" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Year" value="<?php echo trim(date(" Y "));?>"><br>
    <button onclick="save()" style="width: 500px;">Save</button>

</form>
<iframe id="frame" class="hidden" src="/teachers.php"></iframe>
<script>
    function save() {
        event.preventDefault();

        var Etitle = $("#Etitle").val();
        var Edescription = $("#Edescription").val();
        var Etime = $("#Etime").val();
        var Emonth = $("#Em").val();
        var Eday = $("#Ed").val();
        var Eyear = $("#Ey").val();
        //        var formData = {
        //            'name': name,
        //            'link': link,
        //            'img': img,
        //            'role': role,
        //            'grade': grade,
        //            'bio': bio
        //
        //        };

        // process the form
        $.ajax({
                type: 'POST',
                url: 'calender/send.php?t=2',
                data: formData,
                dataType: 'html',
                encode: true
            })
            // using the done promise callback
            .done(function(data) {
                alert("Done");
            });

    }

</script>
