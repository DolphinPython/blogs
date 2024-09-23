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



if($formfillby=="Doctor"){
    $certificateare = "hospital.jpg";    
}elseif($formfillby=="Citizen"){
    $certificateare = "Non-hospital.jpg";    
}

// $certificateare = "hospital.jpg";    



//  Client Copy Details 
    $to1 = "shivam@1solutions.biz"; 
    $from1 = "shivam@1solutions.biz";
    $headers1 = "From:" . $from1;
    $subject1 = "Pledge Certificate of Commitment";
    $message1 = "
Body Soon

With regards,
IHW Council
";
//  Client Copy Details 



// $to1 = "ritika@1solutions.biz,shivam@1solutions.biz";

$to = "shivam@1solutions.biz"; 
$from = "shivam@1solutions.biz";
$headers = "From:" . $from;

$subject = "Pledge Form From Fill By $formfillby";
$message = "
Full Fill By    :   $formfillby
Hospital        :   $hospital
Name            :   $name
Email           :   $email
Mobile          :   $phone
City            :   $city
";


if(empty($formfillby) AND empty($name) AND empty($email) AND empty($phone) AND empty($city)){
    echo "<script>
        window.location.href = 'index.php';
    </script>";
}

// DB Save Details
$query = "INSERT INTO `pledge_forms`(`date`, `datetime`, `formfillby`, `name`, `hospital`, `city`, `email`, `phone`) VALUES 
('$date','$datetime','$formfillby','$name','$hospital','$city','$email','$phone')";
mysqli_query($conn,$query);
// DB Save Details



if(mail($to,$subject,$message,$headers)){
    echo    "if";
    // Cleint Copy
        mail($to1,$subject1,$message1,$headers1);
    // Client Copy
    // echo "<script>window.location.href = 'index.php?msg=recvd';</script>";
}else{
    echo    "else";
    // echo "<script>window.location.href = 'index.php?msg=norecvd';</script>";
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pledge</title>
  <link href="style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
  <style>
.container {
  position: relative;
  text-align: center;
  color: white;
}

.top-left {
  position: absolute;
  top:140px;
  left:200px;
  font-size:30px;
}

.btn-danger {
    color: #fff;
    background-color: #2d7472;
    border-color: #2d7472;
}
.btn-danger:hover {
    color: #fff;
    background-color: #2d7472;
    border-color: #2d7472;
}
.btn-danger:active {
    color: #fff;
    background-color: #2d7472;
    border-color: #2d7472;
}   
.btn-danger:focus {
    color: #fff;
    background-color: #2d7472;
    border-color: #2d7472;
    box-shadow: 0 0 0 0.25rem rgb(45 116 114);
}



.btn-lg {
    padding: 0.5rem 0.5rem;
    font-size: 1rem;
    border-radius: 0.3rem;
}
.btn-danger {
    background-color: #ffffff;
    border-color: #ffffff;
}
</style>
</head>
<body>


<div class="col-md-12" style="background:#2d7472;padding:100px 0px 100px 0px">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="border:2px solid #fff;padding:50px 0px">
            <h2 class="text-center" style="color:#fe7e00;padding:20px 0px">INTEGRITY PLEDGE</h2>
            <h4 class="text-center" style="color:#fff;padding:5px 0px">Thank you for supporting the cause – Preserve The Uterus</h4>
            <p class="text-center" style="color:#fff;padding:5px 0px">
                Your commitment towards integrity will go a long way in saving womanhood in India.
            </p>
            <div class="col-md-12 text-center">
                <button onclick="generatePDF()" class="btn-lg" style="color: #cc9234;width:20%;border-radius:20px">Download Certificate</button>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>


<div class="col-md-12">
  <div class="row">
    <div class="col-md-2">
        <span class="float-end pt-2">
        <!--<button type="button" onclick="generatePDF()" class="btn-sm btn-danger pull-right">Export to PDF</button>-->
      </span>
    </div>
    <div class="col-md-8">
      
      
      
<!--<div class="col-md-12" style="border:2px solid #fff">-->
<!--    <h2 class="text-center">INTEGRITY PLEDGE</h2>-->
<!--    <h4 class="text-center">Thank you for supporting the cause – Preserve The Uterus</h4>-->
<!--    <p class="text-center">-->
<!--        Your commitment towards integrity will go a long way in saving womanhood in India.-->
<!--    </p>-->
<!--    <div class="col-md-12 text-center">-->
<!--        <button type="button" onclick="generatePDF()" class="btn-lg btn-danger pull-right">Download</button>-->
<!--    </div>-->
<!--</div>-->

      
      
        <div class="col-md-12" id="divToExport">
      <div class="my-3">
    
<div class="container">
  <img src="img/<?= $certificateare ?>" alt="Snow" style="width:100%;">
  <div class="top-left"><?= $name ?></div>
</div>


      </div>
      </div>
    </div>
    
    
    
    <div class="col-md-2"></div>
  </div>
</div>
<script type="text/javascript">
  function generatePDF() {
        
        // Choose the element id which you want to export.
        var element = document.getElementById('divToExport');
        // element.style.width = '700px';
        // element.style.height = '500px';
        var opt = {
            // margin:       0.5,
            filename:     'Pledge-Certificate.pdf',
            image:        { type: 'jpeg', quality: 1 },
            html2canvas:  { scale: 2 },
            // jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait',precision: '12' }
            
            
            jsPDF: { unit: 'in', format: 'A3', orientation: 'landscape',precision: '12',beginFormObject:'200'}
          };
        
        // choose the element and pass it to html2pdf() function and call the save() on it to save as pdf.
        // html2pdf().set(opt).from(element).save();
        html2pdf().set(opt).from(element).save();
      }
      generatePDF();
</script>
</body>
</html>

