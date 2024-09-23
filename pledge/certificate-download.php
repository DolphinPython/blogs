<?php
error_reporting(1);
extract($_REQUEST);
include "config.php";

    $name = $_POST['certificatenaem'];
    $name = ucwords($name);
    $formfillby =  $_POST['formfila'];
    
    if($formfillby=="Doctor"){
        $certificateare = "hospital.jpg";    
    }elseif($formfillby=="Citizen"){
        $certificateare = "Non-hospital.jpg";    
    }
    
    
    // 
        // $certificateare = "Non-hospital.jpg";    
        // $name = "Testing";
    // 
    
    
    if(empty($name)){
        echo "<script>
            window.location.href = 'index.php';
        </script>";
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
.containerare {
  position: relative;
  text-align: center;
  color: white;
}

.top-left {
  position: absolute;
  top:310px;
  left:300px;
  font-size:30px;
}

</style>
</head>
<body>


        <div class="col-md-12 my-5" id="divToExport">
            <div class="containerare">
              <img src="img/<?= $certificateare ?>" alt="Pledge">
              <div class="top-left"><?= $name ?></div>
            </div>
      </div>
      
    <center>
        <button class="btn btn-success" onclick="generatePDF()">Download (if not auto downlaod)</button>
    </center>
    
    
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

