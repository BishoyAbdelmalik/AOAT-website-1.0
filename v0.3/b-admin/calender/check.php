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
error_reporting(0);require '../mysql.php';

$month=$_POST["month"];
$year=$_POST["year"];
$day=$_POST["day"];

$id=$_POST["id"];



$query="SELECT * FROM `Calender` where year=";
$query .=$year;
$query .=" and month=";
$query .=$month;
$query .=" and day=";
$query .=$day;
$result=mysqli_query($connection,$query);
$rows_original=array();
while($row= mysqli_fetch_assoc($result)){
    array_push($rows_original, $row);
}
mysqli_free_result($result);


$events_available=0;
$hidden="display: none";   
if ($rows_original){
    foreach($rows_original  as $value){
             $events_available++;
             if($events_available>0){
                 $hidden=" ";
             }
        }
    }

$query="SELECT * FROM `Calender` where year="; 
$query .=$year; 
$query .=" and month="; 
$query .=$month;
$query .=" and day="; 
$query .=$day; 
if($id){ $query .=" and id="; $query .=$id; } 
$result=mysqli_query($connection,$query); 
$rows=array(); 
while($row= mysqli_fetch_assoc($result)){ array_push($rows, $row); }
?>
<form style="color:  black;">

    <h1 style="color:  white;">There is
        <?php echo $events_available;?> events on that day</h1>
    <select id="events" style="<?php echo $hidden;?>" onchange="selector()">
        <?php
        $selector="";
        foreach ($rows_original as $row){

            $selector.='<option value="'.$row[id].'">'.$row[event].'</option>';

        }
        echo $selector
        ?>    
    </select>
    <div style="<?php echo $hidden;?>">
        <input id="Etitle" type="text" placeholder="Event Title" value="<?php echo $rows[0]['event'];?>"><br>
        <input id="Edescription" type="text" placeholder="Event Description" value="<?php echo $rows[0]['details'];?>"><br>
        <input id="Etime" type="text" placeholder="Event Time" value="<?php echo $rows[0]['time'];?>"><br>
        <input id="Emonth" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Month" value="<?php echo $rows[0]['month'];?>"><br>
        <input id="Eday" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Day" value="<?php echo $rows[0]['day'];?>"><br>
        <input id="Eyear" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Year" value="<?php echo $rows[0]['year'];?>"><br>
        <button onclick="save()" style="width: 500px;">Save</button>
        <button onclick="del()" style="width: 200px;">Delete Event</button>
    </div>
</form>
<script>
    function save() {
        event.preventDefault();

        var Etitle = $("#Etitle").val();
        var Edescription = $("#Edescription").val();
        var Etime = $("#Etime").val();
        var Emonth = $("#Emonth").val();
        var Eday = $("#Eday").val();
        var Eyear = $("#Eyear").val();
        var formData = {
            'id': "<?php echo $rows[0]['id'];?>",
            'year': Eyear,
            'month': Emonth,
            'day': Eday,
            'event': Etitle,
            'details': Edescription,
            'time': Etime

        };

        $.ajax({
                type: 'POST',
                url: 'send.php?t=1',
                data: formData,
                dataType: 'html',
                encode: true
            })
            .done(function(data) {
                alert(data);
            });

    }

    function del() {
        event.preventDefault();

        var formData = {
            'id': "<?php echo $rows[0]['id'];?>"


        };

        $.ajax({
                type: 'POST',
                url: 'send.php?t=0',
                data: formData,
                dataType: 'html',
                encode: true
            })
            .done(function(data) {
                alert(data);
                var formData = {
                    'year': "<?php echo $year?>",
                    'month': "<?php echo $month?>",
                    'day': "<?php echo $day?>"
                };
                $.ajax({
                    type: 'POST',
                    url: 'check.php',
                    data: formData,
                    dataType: 'html',
                    encode: true
                }).done(function(data) {
                    $('.events').html(data);
                });
            });

    }

    function selector() {
        event.preventDefault();
        var id = document.getElementById("events").value;
        var formData = {
            'year': "<?php echo $year?>",
            'month': "<?php echo $month?>",
            'day': "<?php echo $day?>",
            'id': id,
        };
        $.ajax({
            type: 'POST',
            url: 'check.php',
            data: formData,
            dataType: 'html',
            encode: true
        }).done(function(data) {
            $('.events').html(data);
            document.getElementById("events").value = id;
        });
    }

</script>
