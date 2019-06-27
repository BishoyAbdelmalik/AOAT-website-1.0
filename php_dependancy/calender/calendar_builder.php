<?php
$events=array();

require 'mysql.php';

$no_events="";
$ran_before="";
function mysql_check($year , $month_numerical, $day){
    mysql_connection();
    global  $connection;
    global  $no_events;
    global  $ran_before;
    
    global  $events;
    $query="SELECT * FROM `Calender` where year=";
    $query .=$year;
    $query .=" and month=";
    $query .=$month_numerical;
    $query .=" and day >= ";
    $query .=$day;
    $query .=" ORDER BY day ASC";
    $result=mysqli_query($connection,$query);


    if (mysqli_num_rows($result)==0){if($ran_before==""){$no_events="There is No Upcoming Events";}}
    if(mysqli_num_rows($result)!=0){
        $ran_before=0;
        $no_events="";
    }
    
    while($row= mysqli_fetch_assoc($result)){
        ${$row["day"]}=$row;
        if(!array_key_exists($row["day"],$events) ){
            $events[$row["day"]]=array($row["event"]);
        }else{
            array_push($events[$row["day"]], $row["event"]);
        }
        
    }
    mysqli_free_result($result);
    mysqli_close($connection);    
    
}

    




$day = date("d");
function getcalander($month_numerical, $year , $month){
    
    $table ="";
    global  $day;

    mysql_check($year,$month_numerical,0);
    $table .= '<div id="date">';
    $table .= '<button onclick="before()" id="before"><</button>';
    $table .= "<span>".$month.", " . $year."</span>";
    $table .='<button onclick="after()" id="after">></button>';
    $table .= "</div>";


    $day_name=array();
    $table .='<table class="calendar">';
    $table .='<tr>';
    for ($day_name_numaric =0; $day_name_numaric <= 7; $day_name_numaric++) {
        switch ($day_name_numaric){
            case 0 :
                array_push($day_name, "Sun.");
                break;
            case 1 :
                array_push($day_name, "Mon.");
                break;
            case 2 :
                array_push($day_name, "Tues.");

                break;
            case 3 :
                array_push($day_name, "Wed.");

                break;
            case 4 :
                array_push($day_name, "Thur.");

                break;
            case 5 :
                array_push($day_name, "Fri.");

                break;
            case 6 :
                array_push($day_name, "Sat.");

                break;


        }
    }
    foreach ($day_name as $value){$table .= "<th class='abreviation hidden'>".$value."</th>";}
    $day_name=array();
   
for ($day_name_numaric =0; $day_name_numaric <= 7; $day_name_numaric++) {
        switch ($day_name_numaric){
            case 0 :
                array_push($day_name, "Sunday");
                break;
            case 1 :
                array_push($day_name, "Monday");
                break;
            case 2 :
                array_push($day_name, "Tuesday");

                break;
            case 3 :
                array_push($day_name, "Wednesday");

                break;
            case 4 :
                array_push($day_name, "Thursday");

                break;
            case 5 :
                array_push($day_name, "Friday");

                break;
            case 6 :
                array_push($day_name, "Saturday");

                break;


        }
    }

   
    foreach ($day_name as $value){$table .= "<th class='full_day'>".$value."</th>";}

    $table .= '</tr>';
    $table .= '<tr>';
    $day_sec=86400;

    $y="";

    for ($x = 1; $x <= date("j", mktime(0, 0, 0, $month_numerical+1, 1, $year)-$day_sec); $x++) {
        if ($x==1){
            $position=date("w", mktime(0, 0, 0, $month_numerical, 1, $year));
            switch ($position){
                case 0:
                    $table .="<th class='days current_m'><span>".$x."</span>";
                    $table.=event_checker($x);

                    
                    $table .="</th>";
                    break;
                case 1:
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-86400)."</span></th>";
                    $table .="<th class='days current_m'><span>".$x."</span>";
                    $table.=event_checker($x);

                    
                    $table .="</th>";
                    break;
                case 2:
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-172800)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-86400)."</span></th>";
                    $table .="<th class='days current_m'><span>".$x."</span>";
                    $table.=event_checker($x);


                    $table .="</th>";
                    break;
                case 3:
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-259200)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-172800)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-86400)."</span></th>";
                    $table .="<th class='days current_m'><span>".$x."</span>";
                    $table.=event_checker($x);


                    $table .="</th>";
                    break;
                case 4:
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-345600)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-259200)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-172800)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-86400)."</span></th>";
                    $table .="<th class='days current_m'><span>".$x."</span>";
                    $table.=event_checker($x);


                    $table .="</th>";
                    break;
                case 5:
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-432000)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-345600)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-259200)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-172800)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-86400)."</span></th>";
                    $table .="<th class='days current_m'><span>".$x."</span>";
                    $table.=event_checker($x);


                    $table .="</th>";
                    break;
                case 6:
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-518400)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-432000)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-345600)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-259200)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-172800)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-86400)."</span></th>";
                    $table .="<th class='days current_m'><span>".$x."</span>";
                    $table.=event_checker($x);


                    $table .="</th>";
                    break;
            }
        }else{
            
            /*check if last day */
            if ($x==date("j", mktime(0, 0, 0, $month_numerical+1, 1, $year)-86400)){
                $position=date("w", mktime(0, 0, 0, $month_numerical, $x, $year));
                switch ($position){
                    case 0:
                        $table .="<th class='days current_m'><span>".$x."</span>";
                        $table.=event_checker($x);

                        $table .="</th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+86400)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+172800)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+259200)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+345600)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+432000)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+518400)."</span></th>";
                                                
                        break;
                    case 1:
                        $table .="<th class='days current_m'><span>".$x."</span>";
                        $table.=event_checker($x);

                        $table .="</th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+86400)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+172800)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+259200)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+345600)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+432000)."</span></th>";
                        break;
                    case 2:
                        $table .="<th class='days current_m'><span>".$x."</span>";
                        $table.=event_checker($x);


                        $table .="</th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+86400)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+172800)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+259200)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+345600)."</span></th>";
                        break;
                    case 3:
                        $table .="<th class='days current_m'><span>".$x."</span>";
                        $table.=event_checker($x);


                        $table .="</th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+86400)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+172800)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+259200)."</span></th>";
                        break;
                    case 4:
                        $table .="<th class='days current_m'><span>".$x."</span>";
                        $table.=event_checker($x);


                        $table .="</th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+86400)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+172800)."</span></th>";
                        break;
                    case 5:
                        $table .="<th class='days current_m'><span>".$x."</span>";
                        $table.=event_checker($x);


                        $table .="</th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+86400)."</span></th>";
                        break;
                    case 6:
                        $table .="<th class='days current_m'><span>".$x."</span>";
                        $table.=event_checker($x);


                        $table .="</th>";
                        break;
                }
            }else{
                $table .="<th class='days current_m'><span>".$x."</span>";
                
                $table.=event_checker($x);

                $table .="</th>";
            }
        }
        if (date("w", mktime(0, 0, 0, $month_numerical, $x, $year))==6){$table .= '</tr><tr>';}
    } 

    $table .='</tr>';
    $table .='</table>';
    
    return $table;

}

function event_checker($d){
    global  $events;

    if(array_key_exists($d,$events) ){
        $event='<div id="cal_events">';
        foreach ($events[$d] as $value){
            $event.="<p>";
            $event.=$value;
            $event.="</p>";
        }
        $event.='</div>';
        return $event;
    }else{
        return "";
    }
}
?>
