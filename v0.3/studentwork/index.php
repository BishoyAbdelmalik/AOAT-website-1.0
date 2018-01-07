<?php
error_reporting(0);
global  $connection;
global $database;
global $title;
    
if ($_GET){
    $database=$_GET['c'];
    $title=$_GET['t'];
  
}
else{
    header("Location: student_work.php");
    die();

}

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
$query="SELECT * FROM `".$database."` ORDER BY id ASC;";
$result=mysqli_query($connection,$query);
$rows=array();
while($row= mysqli_fetch_assoc($result)){
    array_push($rows, $row);
}
mysqli_free_result($result);
mysqli_close($connection);  
/*var_dump($row);*/
/*
var_dump($rows);
*/
$instructor=$rows[0][instructor];
$instructor_url=$rows[0][url];
$course=$rows[0][course];
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/student_work.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>AOAT |
            <?php echo $title ?>
        </title>
        <style>
            .load {
                margin: auto;
            }

            .modal-footer {
                overflow-x: auto;
                overflow-y: hidden;
            }

            .modal-footer div {
                margin: auto;
                width: -moz-fit-content;
                width: -webkit-fit-content;
                width: fit-content
            }

        </style>
    </head>

    <body>
        <header>
            <?php
        require '/header.php';

        ?>
        </header>
        <div class="banner" id="digitalPhotography">
            <div class="container-fluid lockcontent">
                <h2>
                    <?php echo $title ?>
                </h2>

            </div>
        </div>
        <main>

            <section class="container-fluid lockcontent gray_txt">
                <p>
                    <i>Instructor:</i>
                    <a href="teachers.php?t=<?php echo $instructor_url; ?>">
                        <?php echo $instructor; ?>
                    </a>
                </p>
                <p>
                    <?php echo $course; ?>
                </p>
            </section>

            <?php
            $projects="";
            $modal="";
            $projects.='<section class="blue_background">';
            $js="";
            $x=1;
            foreach($rows  as $value){
                $images = preg_split("/[\s,]+/", $value[images]);
                $projects.='<div id="'.$value[id].'" class="flex_b studentwork">';
                $projects.='<article class="flex_b  dgPhotography">';
                $projects.='<div>';
                $projects.='<h3>'.$value[project].'</h3>';
                $projects.='<p class="justify">'.$value[description].'</p>';
                $projects.='</div>';
                $projects.='</article>';
                $projects.='<img class="only_img" src='.$images[0].'>';
                $projects.='<div class="studentworkTile projects_grid flex_b wrap">';
                $projects.='<img src='.$images[1].'>';
                $projects.='<img src='.$images[2].'>';
                $projects.='<img src='.$images[3].'>';
                $projects.='<img src='.$images[4].'>';
                $projects.='</div>';
                $projects.='</div>';
                
                
                
                $modal.=' <div class="modal center_ver'.preg_replace('/\s+/', '', $value[project]).'" id="mygallery" role="dialog">';
                $modal.='<div class="modal-dialog">
                    <div class="modal-content flex_b flex_column">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button></div>';
                $modal.='<div class="modal-body">
                            <span id="back" class="fa fa-chevron-left fa-2x"></span>
                            <img class="gallery_viewing" src='.$images[0].'>
                            <span id="forward" class="fa fa-chevron-right fa-2x"></span>
                        </div>';
                
                $modal.='<div class="modal-footer flex_b">';
                foreach ($images as $img) { 
                    $modal.='<img class="gallery_items" src=/'.$img.'>';
                }                               
                $modal.='</div>';
                $modal.='</div></div></div>';

                /*js creation*/
                $js.= '$("#'.$value[id].'").click(function() {';
                $js.= 'xhttp.onreadystatechange = function () {';
                $js.='if (this.readyState == 4 && this.status == 200) {}};';
                $js.='xhttp.open("GET", "pic_call.php?  db='.$database.'&&assigment='.$value[id].'" , true);';
                $js.='xhttp.send();';
                $js.='xhttp.onload = function () {';
                $js.='if (xhttp.readyState === xhttp.DONE) {';
                $js.='if (xhttp.status === 200) {';
                $js.='$("#gallary").html(xhttp.responseText);} else {}}};';      
                $js.='object = new Array();';
                $js.='place = 0;';   
                $js.='$("#mygallery").modal();';
                $js.='$("#mygallery").css("display", "flex");';
                $js.='object = document.getElementsByClassName("gallery_items");';
                $js.='document.onkeydown = checkKey;';      
                $js.='function checkKey(e) {';  
                $js.='e = e || window.event;';
                $js.="if (e.keyCode == '37') {back();} ";
                $js.="else if (e.keyCode == '39') {forward()}}});";
           
                $x++;                 
            }
            $projects.='</section>';
            echo $projects;        
            ?>



                <div class="modal" id="mygallery" role="dialog" style="display: none;">
                    <div class="modal-dialog">
                        <div id="gallary" class="modal-content flex_b flex_column">
                            <img class='load' src='/images/studentwork/load.gif'>
                        </div>
                    </div>
                </div>







        </main>
        <footer>
            <?php 
        require '/footer.php';
        require '/js.php' ;
        ?>
        </footer>
        <?php
    jquery(0);
    nav();
    bootstrap(0);
    ?>
            <script>
                var object;
                var place;
                var xhttp = new XMLHttpRequest();
                <?php
                echo $js;

            ?>

            </script>
            <script src="../js/student_work_gallery.js"></script>
    </body>

    </html>
