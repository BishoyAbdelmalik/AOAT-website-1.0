<?php

error_reporting(0);

function edit(){
    require '../db.php';
/*
    var_dump($_POST);
*/
    $db="teachers";
    $new_info=$_POST;
    update($db, $new_info);
}
function add_teacher(){
    require '../db.php';
    $db="teachers";
    $info=$_POST;
    insert($db, $info);
}

function del(){
    require '../mysql.php';
    
    $query='SELECT * FROM `teachers` WHERE name = "'.$_POST[t].'";';
    $result=mysqli_query($connection,$query);
    $rows=array();
    while($row= mysqli_fetch_assoc($result)){
        array_push($rows, $row);
    }
    mysqli_free_result($result);
    mysqli_close($connection); 
    echo $query;
    require '../db.php';
    $id=$rows[0][id];  
    $db="teachers";
    delete_row($db, $id);
}


switch ($_GET[t]){
    case 0:
        del();
        break;
    case 1:
        edit();
        break;
    case 2:
        add_teacher();
        break;
}
?>
