<?php
error_reporting(0);
global  $connection;
set_include_path('../php_dependancy');

require 'mysql.php';
mysql_connection();
if (isset($_GET)){
    $db=$_GET[db]; 
    $assigment=$_GET[assigment];

    $query="SELECT * FROM `";
    $query.=$db;
    $query.="` WHERE id = ".$assigment;
    $query.=" ORDER BY id ASC;";
    $result=mysqli_query($connection,$query);
    $rows=array();
    while($row= mysqli_fetch_assoc($result)){
        array_push($rows, $row);
    }

    $images = preg_split("/[\s,]+/", $rows[0][images]);
    $modal='';
    $modal.='<div class="modal-header">';
    $modal.='<button type="button" class="close" data-dismiss="modal">×</button></div>';
    $modal.='<div class="modal-body">';
    $modal.='<span id="back" onclick="back()" class="fa fa-chevron-left fa-2x"></span>';
    $modal.='<img class="gallery_viewing" src='.$images[0].'>';
    $modal.='<span id="forward"  onclick="forward()" class="fa fa-chevron-right fa-2x"></span>';
    $modal.='    </div>';
    $modal.='<div class="modal-footer">';
    $p=0;
    $modal.='<div class="flex_b">';
    foreach($images  as $image){
        $modal.='<img id="'.$p.'" class="gallery_items"   src='.$image.'>';
        $p++;
     }
    $modal.='</div>';
    $modal.="<script>";
    $modal.='$(".gallery_items").click(function () {
        var src = $(this).attr("src");
        $(".gallery_viewing").attr("src", src);
        place=$(this).attr("id")
    });';
    $modal.="</script>";

    $modal.='</div>';
    echo $modal;
    mysqli_free_result($result);
    mysqli_close($connection); 
    
}


?>
