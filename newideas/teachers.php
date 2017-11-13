<?php
 error_reporting (0);

global  $connection;
function mysql_connection(){
    global  $connection;

    $dbhost="localhost";
    $dbuser="AOAT";
    $dbpass="123456";
    $dbname="aoat";
    $connection= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(mysqli_connect_errno()){
        die("Database connection failes: ".
            mysqli_connect_error(). " (" . mysqli_connect_errno().")"
           );
    }
}
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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <title>AOAT | Teachers</title>
    </head>

    <body>
        <header>
            <?php
        require 'header.php';

        ?>
        </header>
        <div>
            <div class="content_main">
                <div class="banner" id="teachers">
                    <div class="container-fluid lockcontent">
                        <h2 class="pages_title">Teachers</h2>
                    </div>
                </div>
                <div class="container-fluid teachers_columns lockcontent">

                    <?php
                    $teachers="";
                    foreach ($rows as $row){
                        $teachers.='<div class="bio_block">';
                        $teachers.='<div class="line">';
                        $teachers.='<div class="polaroid" data-toggle="collapse">';
                        $teachers.='<a href="'.$row[link].'" data-toggle="collapse">';
                        if (strlen($row[img])==0){
                            $teachers.='<img src="images/teachers/placeholder.jpg">';
                        }else{
                        $teachers.='<img src="'.$row[img].'">';
                        }
                        $teachers.='<p>'.$row[name].'</p>';
                        $teachers.='</a>';
                        $teachers.='</div><div>';
                        $teachers.='<a href="'.$row[link].'" data-toggle="collapse">';
                        $teachers.='<h4>'.$row[name].'</h4></a>';
                        if(strlen($row[grade])==0){
                        $teachers.='<p><i>'.$row[role].'</i></p>';
                        }else{
                        $teachers.='<p><i>'.$row[role].'</i><br> Grade: '.$row[grade].'</p>';
                        }
                        $teachers.='<button class="btn btn-info" type="button" data-toggle="collapse" data-target="'.$row[link].'">
                            View Profile</button>';
                        $teachers.='</div></div>';
                        $teachers.='<div id="'.trim($row[link],"#").'" class="collapse">';
                        $teachers.='<p>'.$row[bio].'</p></div></div>';
                    }
                    echo $teachers
                    ?>
                </div>
            </div>
        </div>
        <footer>
            <?php 
            require 'footer.php';
            require 'js.php' ;
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
