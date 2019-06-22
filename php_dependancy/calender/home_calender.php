<?php
require 'calendar_builder.php';
$year=date("Y");
$month=date("n");
$today=date("j");
$cal="";
$cal.="<ul>";


mysql_check($year,$month,$today);

buildit();

if ($today>26){
    if($month!=12){
        $month++;
    }else{
        $month=1;
    }
    $events=array();
    
    $today=1;
    mysql_check($year,$month,$today);
    buildit();
}
if ($no_events=="There is No Upcoming Events"){
    $cal.='<li class="no_event">'.$no_events."</li>";
}
$cal.='</ul>';
echo $cal;

function buildit() {
        global  $cal;
        global  $events;
        global  $month ;

       foreach ($events as $key => $value) {
           $cal.="<li>";
           $cal.='<div class="date">';
           $cal.='<div class="event_month">'.date('M', mktime(0, 0, 0, $month, 10)).'</div>';
           $cal.='<div class="num">'.$key.'</div>';
           $cal.='</div>';
           $cal.='<div class="event">';
           foreach ($events[$key] as $val) {
               $cal.=$val."<br>";
           }
           $cal.='</div>';
           $cal.='</li>';
       }
}
    
    

?>
