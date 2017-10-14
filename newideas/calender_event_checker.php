<?php
require_once('calendar_builder.php');



mysql_connection();
echo get_events();
function get_events(){
    $return="";
    $day_selected=$_GET["day"];
    $month=$_GET["month"];
    $year=$_GET["year"];

    global  $connection;
    $query="SELECT * FROM `Calender` where year=";
    $query .=$year;
    $query .=" and month=";
    $query .=$month;
    $query .=" and day=";
    $query .=$day_selected;
    $result=mysqli_query($connection,$query);
    if (mysqli_num_rows($result)==0){
        $return="There is no events in this day.";
        return $return;
        die();
    }
    $return="<ul>";
    while($row= mysqli_fetch_assoc($result)){
       $return.="<li>";
       $return.=$row["event"];
        if($row["time"]){
            $return.='<ul class="time_list">';
            $return.='<li class="time">';
            $return.=$row["time"];
            $return.="</li>";
            $return.="</ul>";
        }
        if($row["details"]){
            $return.='<ul class="time_list">';
            $return.='<li class="time">';
            $return.='<p class="info">';
            $return.=$row["details"];
            $return.="</p>";
            $return.="</li>";
            $return.="</ul>";
        }
       $return.="</li>";
        
        
    }    
        
    
/*
    $result=print_r(mysqli_fetch_assoc($result));
*/
    
    $return.="</ul>";
    mysqli_free_result($result);
    mysqli_close($connection);   
    return $return;
}


?>
