<?php
/*
header('Content-Type:text/html');*/


/*$dbhost="localhost";
$dbuser="AOAT";
$dbpass="123456";
$dbname="aoat";
$connection= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);



if(mysqli_connect_errno()){
    die("Database connection failes: ".
        mysqli_connect_error(). " (" . mysqli_connect_errno().")"
       );
}
$query="SELECT * FROM `9`";

$result=mysqli_query($connection,$query);


while($row= mysqli_fetch_array($result)){
    printf ( $row["Name"] );
    echo "<br>";
    printf ( $row["Day"]);
    echo "<br>";
}
    */
    




/*
$year =date("Y") ; $month = date("F");*/

/*
$month_numerical =date("n");*/
$day = date("d");
function getcalander($month_numerical, $year , $month){
    
    $table ="";
    global  $day;

    
    
    $table .= '<div id="date">';
    $table .= '<button onclick="before()" id="before"><</button>';
    $table .= "<span>".$month.", " . $year."</span>";
    $table .='<button onclick="after()" id="after">></button>';
    $table .= "</div>";


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

   

    $table .='<table class="calendar">';
    $table .='<tr>';
    /*create day names*/
    foreach ($day_name as $value){$table .= "<th>".$value."</th>";}

    $table .= '</tr>';
    $table .= '<tr>';




    for ($x = 1; $x <= date("j", mktime(0, 0, 0, $month_numerical+1, 1, $year)-86400); $x++) {
        if ($x==1){
            $position=date("w", mktime(0, 0, 0, $month_numerical, 1, $year));
            switch ($position){
                case 0:
                    $table .="<th class='days'><span>".$x."</span></th>";
                    break;
                case 1:
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-86400)."</span></th>";
                    $table .="<th class='days'><span>".$x."</span></th>";
                    break;
                case 2:
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-172800)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-86400)."</span></th>";
                    $table .="<th class='days'><span>".$x."</span></th>";
                    break;
                case 3:
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-259200)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-172800)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-86400)."</span></th>";
                    $table .="<th class='days'><span>".$x."</span></th>";
                    break;
                case 4:
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-345600)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-259200)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-172800)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-86400)."</span></th>";
                    $table .="<th class='days'><span>".$x."</span></th>";
                    break;
                case 5:
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-432000)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-345600)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-259200)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-172800)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-86400)."</span></th>";
                    $table .="<th class='days'><span>".$x."</span></th>";
                    break;
                case 6:
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-518400)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-432000)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-345600)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-259200)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-172800)."</span></th>";
                    $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, 1, $year)-86400)."</span></th>";
                    $table .="<th class='days'><span>".$x."</span></th>";
                    break;
            }
        }else{
            
            /*check if last day */
            if ($x==date("j", mktime(0, 0, 0, $month_numerical+1, 1, $year)-86400)){
                $position=date("w", mktime(0, 0, 0, $month_numerical, $x, $year));
                switch ($position){
                    case 0:
                        $table .="<th class='days'><span>".$x."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+86400)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+172800)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+259200)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+345600)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+432000)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+518400)."</span></th>";
                                                
                        break;
                    case 1:
                        $table .="<th class='days'><span>".$x."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+86400)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+172800)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+259200)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+345600)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+432000)."</span></th>";
                        break;
                    case 2:
                        $table .="<th class='days'><span>".$x."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+86400)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+172800)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+259200)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+345600)."</span></th>";
                        break;
                    case 3:
                        $table .="<th class='days'><span>".$x."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+86400)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+172800)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+259200)."</span></th>";
                        break;
                    case 4:
                        $table .="<th class='days'><span>".$x."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+86400)."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+172800)."</span></th>";
                        break;
                    case 5:
                        $table .="<th class='days'><span>".$x."</span></th>";
                        $table .="<th class='days other_month'><span>".date("j", mktime(0, 0, 0, $month_numerical, $x, $year)+86400)."</span></th>";
                        break;
                    case 6:
                        $table .="<th class='days'><span>".$x."</span></th>";
                        break;
                }
            }else{
                $table .= "<th class='days'><span>".$x."</span></th>";
            }
        }
        if (date("w", mktime(0, 0, 0, $month_numerical, $x, $year))==6){$table .= '</tr>';}
    } 


    echo $table;

}






?>
