<?php
$to= 'info@theaoat.org';

$error=array();
$first_name=trim($_POST[first_name]);
$last_name=trim($_POST[last_name]);
$email=trim($_POST[email]);
$number=trim($_POST[numb]);
$msg=$_POST[paragraph_text];
$teacher="";
$Parent="";
$student="";
$Business="";
$Partner="";
$other="";
if ($_POST[parent]){$Parent="Parent";}
if ($_POST[student]){$student="Student";}
if ($_POST[teacher]){$teacher="Teacher";}
if ($_POST[business]){$Business="Business";}
if ($_POST[Partner]){$Partner="Partner";}
if ($_POST[people]){$other="Other";}
$iam=$teacher . $student . $Parent .$Business.$Partner.$other;
$headers = 'From: webmaster@theaoat.org' . "\r\n" .
    'Reply-To: '.$email.' '. "\r\n" .
    'X-Mailer: PHP/' . phpversion();


if (isset($first_name)){
    if (is_numeric($first_name)){
        array_push($error, "First Name Can't be numeric");
    }
}
if(!isset($first_name)||is_null($first_name) || $first_name==""){array_push($error," First Name is Required");}
if (isset($last_name)){
    if (is_numeric($last_name)){
        array_push($error, "Last Name Can't be numeric");
    }
}if(!isset($last_name)||is_null($last_name)  || $last_name==""){array_push($error," Last Name is Required");}
    

if(!isset($email)||is_null($email) || $email==""){array_push($error,"Email field is required");}

if(isset($number)){if(is_numeric($number)){if(strlen($number)<11 && strlen($number)>5){}else{array_push($error,"The phone number is not valid");}}}
if (!isset($msg)){array_push($error," Message field is required");}

if ($iam){
    
}else {
    array_push($error,"You have to select who you are");
}
if(!isset($msg)||is_null($msg) || $msg==""){array_push($error,"What is your message?");}
if (!$error){
    $subject= "Website Form";
    $message = 'First Name: '. $first_name . "\r\n";
    $message .= 'Last Name: '. $last_name . "\r\n";
    $message .= 'Phone Number: '. $number . "\r\n";
    $message .= 'I am: '. $iam. "\r\n"."\r\n"."\r\n";
    $message .= $msg;
    
    
    
    $success = mail($to, $subject, $message, $headers);
    echo "your message has been sent";

    if (!$success) {
        $errorMessage = error_get_last()['message'];
    }
}else{
    $errorMessage="";
    $errorMessage .= "<ul>";
    foreach ($error as $err){
        $errorMessage .= "<li>". $err ."</li>";
    }
    $errorMessage .= "</ul>";
    echo  $errorMessage ;
}



?>
