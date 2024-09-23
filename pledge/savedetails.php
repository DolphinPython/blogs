<?php
error_reporting(1);
extract($_REQUEST);
include "config.php";

date_default_timezone_set('Asia/Kolkata');

$date = date('Y-m-d');
$datetime = date('Y-m-d H:m:s');
$formfillby =  $_POST['formfil'];
$name = $_POST['name'];
$hospital =  $_POST['hospital'];
$city =  $_POST['city'];
$email =  $_POST['email'];
$phone =  $_POST['phone'];


// Mail Send Form Common Client and Admin
    $mailfrom = "shivam@1solutions.biz";
// Mail Send Form Common Client and Admin


// Admin Copy Details
    // $to1 = "ritika@1solutions.biz,shivam@1solutions.biz";
    $to = "shivam@1solutions.biz"; 
    $headers = "From:" . $mailfrom;
    $subject = "Pledge Form From Fill By $formfillby";
    
    if($formfillby=="Doctor"){
        $message = "
            Full Fill By    :   $formfillby
            Hospital        :   $hospital
            Name            :   $name
            Email           :   $email
            Mobile          :   $phone
            City            :   $city
        ";
    }elseif($formfillby=="Citizen"){
        $message = "
            Full Fill By    :   $formfillby
            Name            :   $name
            Email           :   $email
            Mobile          :   $phone
            City            :   $city
        ";
    }
// Admin Copy Details


//  Client Copy Details 
    $to1 = "$email"; 
    $headers1 = "From:" . $mailfrom;
    $subject1 = "Pledge Certificate of Commitment";
    $message1 = "
        Body Soon
        
        With regards,
        IHW Council
    ";
//  Client Copy Details 


// DB Save Details
$query = "INSERT INTO `pledge_forms`(`date`, `datetime`, `formfillby`, `name`, `hospital`, `city`, `email`, `phone`) VALUES 
('$date','$datetime','$formfillby','$name','$hospital','$city','$email','$phone')";
mysqli_query($conn,$query);
// DB Save Details


if(mail($to,$subject,$message,$headers)){
    echo    "if";
    mail($to1,$subject1,$message1,$headers1);
}else{
    echo    "else";
}





?>
