<?php
 error_reporting (0);

global  $connection;

set_include_path('php_dependancy');

require 'mysql.php';
mysql_connection();
    $true="";
$teacher="";
if($_GET){
    $get="ture";
    $teacher=$_GET[t];
}




$query="SELECT * FROM `teachers`;";
$result=mysqli_query($connection,$query);
$rows=array();
while($row= mysqli_fetch_assoc($result)){
    array_push($rows, $row);
}
mysqli_free_result($result);
mysqli_close($connection); 

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="shortcut icon" href="images/logos/ico.gif">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <title>AOAT | Teachers</title>
    </head>

    <body>
        <header>
            <?php require 'php_dependancy/header.php';

        ?>
        </header>
        <div>
            <div class="content_main">
                <div class="banner homeimage aboutAOAT landing" id="teachers">
                    <div class="pagetitle absolute-text bannertitle">
                        <h1>Teachers</h1>

                    </div>
                </div>
                <div class="pagetitle container-fluid lockcontent">

                </div>
                <div class="container-fluid teachers_columns lockcontent">

                    <?php
                    $teachers="";
                    foreach ($rows as $row){
                        $teachers.='<div class="bio_block">';
                        $teachers.='<div class="line">';
                        $teachers.='<div class="polaroid" data-toggle="collapse">';
                        if(trim($row[bio])=="need bio"){
                            $teachers.='<a href="javascript:void(0)" data-toggle="collapse">';
                            if (strlen($row[img])==0){
                                $teachers.='<img src="images/teachers/placeholder.jpg">';
                            }else{
                            $teachers.='<img src="'.$row[img].'">';
                            }
                        }else{
                            $teachers.='<a href="'.$row[link].'" data-toggle="collapse">';
                            if (strlen($row[img])==0){
                                $teachers.='<img src="images/teachers/placeholder.jpg">';
                            }else{
                            $teachers.='<img src="'.$row[img].'">';
                            }
                        }
                        $teachers.='<p>'.$row[name].'</p>';
                        $teachers.='</a>';
                        $teachers.='</div><div>';
                        if(trim($row[bio])=="need bio"){
                            $teachers.='<a href="javascript:void(0)" data-toggle="collapse">';
                        }else{
                            $teachers.='<a href="'.$row[link].'" data-toggle="collapse">';
                        }
                        $teachers.='<h4>'.$row[name].'</h4></a>';
                        if(strlen($row[grade])==0){
                        $teachers.='<p><i>'.$row[role].'</i></p>';
                        }else{
                        $teachers.='<p><i>'.$row[role].'</i><br> Grade: '.$row[grade].'</p>';
                        }
                        if(trim($row[bio])=="need bio"){
                            $teachers.='<button class="btn btn-info" type="button" data-toggle="collapse" data-target="'.$row[link].'" disabled>View Profile</button>';
                        }else{
                        $teachers.='<button class="btn btn-info" type="button" data-toggle="collapse" data-target="'.$row[link].'">
                            View Profile</button>';
                         }
                        $teachers.='</div></div>';
                        $teachers.='<div id="'.trim($row[link],"#").'" class="collapse">';
                        if(trim($row[bio])=="need bio"){
                            $teachers.='<p class="justify"></p></div></div>';

                        }else{
                        $teachers.='<p class="justify">'.$row[bio].'</p></div></div>';
                        }
                        
                    }
                    echo $teachers
                    ?>
                </div>
            </div>
        </div>
        <footer>
            <?php        require 'php_dependancy/footer.php';
require 'php_dependancy/js.php' ;
        ?>
        </footer>
        <?php
        jquery(0);
        nav();
        home();
        bootstrap(0);
        $script="";
        $script .="<script>";
        $script .="$(document).ready(function() {";
        $script .="$('#".$teacher."').collapse();";
        $script .="$('html, body').animate({";
        $script .="scrollTop: ($('#".$teacher."').first().offset().top)-500";
        $script .="}, 2000);});";
        $script .="</script>";
        if($get=="ture"){
            echo $script;
        }
        ?>
    </body>

    </html>
