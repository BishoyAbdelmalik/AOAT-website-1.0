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
        session_start();
        $_SESSION["login"] = 1;
        
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
        session_start();
        session_unset();
        session_destroy();
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
