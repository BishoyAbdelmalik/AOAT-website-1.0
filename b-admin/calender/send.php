<?php 
error_reporting(0);

function edit(){
    require '../db.php';

    $table="calender";
    $new_info=$_POST;
    update($table, $new_info);
        echo "Done";

}
function add(){
    require '../db.php';
    $table="calender";
    $info=$_POST;
    insert($table, $info);
        echo "Done";

}

function del(){
    require '../db.php';
    $id=$_POST['id'];  
    $table="calender";
    delete_row($table, $id);
    echo "Done";
}

session_start();

if($_SESSION["login"]==1){
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
}else{
    die("Session Expired Please Log in");
}

?>
