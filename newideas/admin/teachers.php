<style>
    .choice {
        margin: 5%;
    }

    #respond {
        color: white;

    }

</style>
<?php
require "mysql.php";
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
    <button onclick="Back()" style="width: 100%;">Back</button>

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
                <button onclick="edit()">Edit</button>
                <button onclick="add()">Add Teacher</button>
            </div>
        </form>
    </div>
    <div id="respond">

    </div>

    <!--<iframe src="../teachers.php"></iframe>-->
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

        function Back() {
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
