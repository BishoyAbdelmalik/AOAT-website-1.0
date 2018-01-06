<?php


function post($username,$password){
    require_once 'mysql.php';

    $query='SELECT username, password FROM `users` WHERE username = "'.$username.'";';
    $result=mysqli_query($connection,$query);
    $rows=array();
    while($row= mysqli_fetch_assoc($result)){
        array_push($rows, $row);
    }
    $hash=$rows[0][password];
    if(!password_verify ( $password , $hash)){
        echo "user name or password is wrong";
    }else{
        echo "true";
    }
}
function verify($username,$password, $page){
    require_once 'mysql.php';

    $query='SELECT username, password FROM `users` WHERE username = "'.$username.'";';
    $result=mysqli_query($connection,$query);
    $rows=array();
    while($row= mysqli_fetch_assoc($result)){
        array_push($rows, $row);
    }
    $hash=$rows[0][password];
    if(!password_verify ( $password , $hash)){
        echo "user name or password is wrong";
    }else{
        page($page);
    }
}
function page($page){
    switch ($page) {
        case "home":
            require "home.php";
            break;
        
    }
    
}

?>
