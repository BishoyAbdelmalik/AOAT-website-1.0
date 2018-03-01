<?php 

/*error_reporting(0)*/;
require '../mysql.php';

$month=$_POST["month"];
$year=$_POST["year"];
$day=$_POST["day"];

$query="SELECT * FROM `Calender` where year=";
$query .=$year;
$query .=" and month=";
$query .=$month;
$query .=" and day=";
$query .=$day;
$result=mysqli_query($connection,$query);
$rows=array();
while($row= mysqli_fetch_assoc($result)){
    array_push($rows, $row);
}
$events_available=0;
$hidden="display: none";   
    if ($rows){
     foreach($rows  as $value){
        $events_available++;
         if($events_available>0){
             $hidden=" ";
         }
    }
    }

?>
<form style="color:  black;">
    <h1 style="color:  white;">There is
        <?php echo $events_available;?> events on that day</h1>
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
            });

    }

</script>
