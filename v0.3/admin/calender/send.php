<?php 
error_reporting(0);

function edit(){
    require '../db.php';

    $table="calender";
    $new_info=$_POST;
    update($table, $new_info);
}
function add(){
    require '../db.php';
    $table="calender";
    $info=$_POST;
    insert($table, $info);
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
        add();
        break;
}
?>
