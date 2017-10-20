<?php
$var="";


function jquery($var) {
    $jquery='<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>';
    $jquery_cdn='<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
    if($var=="local"){
        echo $jquery;
    }else{
        echo $jquery_cdn;
    }
    
}
function bootstrap($var) {
    $bootstrap ='<script src="js/bootstrap.min.js"></script>';
    $bootstrap_cdn ='<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>';

    if($var=="local"){
        echo $bootstrap;
    }else{
        echo $bootstrap_cdn;
    }
    
}
function nav() {
    $nav ='<script type="text/javascript" src="js/navbar.js"></script>';
    echo $nav;
    
}
function home() {
    $home ='<script type="text/javascript" src="js/homepagescript.js"></script>';
    echo $home;
    
}
function form() {
    $form ='<script type="text/javascript" src="js/contact_form.js"></script>';
    echo $form;
    
}

function calender() {
    $calender ='<script type="text/javascript" src="js/calender.js"></script>';
    echo $calender;
}

function student_work(){
    $work ='<script type="text/javascript" src="js/student_work.js"></script>';
    echo $work;
}
?>
