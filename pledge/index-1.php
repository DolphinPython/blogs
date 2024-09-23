<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Pledge</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
    
    
<style>
p{
    font-size: 17px;
    font-weight: 500;
    text-align: justify;
}
 .btn-lg {
    padding: 15px 25px;
    font-size: 20px;
    font-weight: 500;
     
 }
div.doctorfrmpdg{
    padding:5px 0px 5px 0px;
}

.doctorheading{
    color: #ffff00;
    font-size:18px;
    font-weight: 500;
}
.citizenheading{
    color: #ffff00;
    font-size:18px;
    font-weight: 500;
}
.lableclr{
    color:#fff;
}
</style>




<div class="col-md-12">
  
  
<!---->





<!---->


  
  <div class="row">
      <img src="img/image-000.jpg" style="width:100%;margin-bottom:200px">
  </div>
  
  <br>&ensp;<br>


  <div class="row" style="pading-bottom:50px;padding-top:50px;background: url('pledge-bg-1.png') no-repeat;">
    <div class="col-md-12">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <p>
                According to the fourth National Family Health Survey (2015–16) out of the 700,000 women between the age of 15-49 years 22,000 had undergone a hysterectomy. Hysterectomy is the most commonly performed surgery amongst women globally after the caesarean section and has serious implication on the physical and mental wellbeing of women. The number of cases was higher in rural India, where women are expected to do physical work and are not aware of the impact of such surgeries on their physical and mental wellbeing.
            </p>
            <br>
            <p>
                Preserve the Uterus was launched as a nationwide campaign in April 2022, by Bayer in collaboration with Federation of Obstetric and Gynaecological Societies of India (FOGSI) and IHW Council to empower women with the right awareness thus enabling them to make empowered choices. The initiative also focussed on capacity building of health practitioners and on policy perspectives in states, strengthening health systems to tackle the issue and most importantly the use of media to create awareness on the impact of hysterectomies. The need of the hour is to come forward and support the campaign for better health of our women and families……
            </p>
        </div>
        <div class="col-md-1"></div>
    </div>
      
      <div class="col-md-12">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <img src="img/Asset33.png" style="width:100%">
        </div>
        <div class="col-md-4"></div>
      </div>
  </div>

  <br>&ensp;<br>







<script>
function doctorsectionfun() {
    // alert('Doctor');
  document.getElementById("citizensection").style.display = "none";
  document.getElementById("doctorsection").style.display = "block";
}
function citizensectionfun() {
    // alert('Citizen');
  document.getElementById("citizensection").style.display = "block";
  document.getElementById("doctorsection").style.display = "none";
}



function doctoorpledgeform() {
    // alert('work');
    var name = $("#dname").val();
    var nlen = name.length;
    if(nlen <= 3){
        $("#dne").html("<span style='color:red'>Invalid Name</sapn>");
        return 0;
    }
    
    var hospital = $("#dhosptl").val();
    var hospitallen = hospital.length;
    if(hospitallen <= 3){
        $("#dhe").html("<span style='color:red'>Invalid Name</sapn>");
        return 0;
    }
    
    var city = $("#dcity").val();
    // var citylen = city.length;
    // if(city <= 3){
    //     $("#dce").html("<span style='color:red'>Invalid Name</sapn>");
    //     return 0;
    // }
    
    var email = $("#demail").val();
    // var nlen = name.length;
    // if(nlen <= 3){
    //     $("#dee").html("<span style='color:red'>Invalid Name</sapn>");
    //     return 0;
    // }
    
    var phone = $("#dphone").val();
    // var nlen = name.length;
    // if(nlen <= 3){
    //     $("#dpe").html("<span style='color:red'>Invalid Name</sapn>");
    //     return 0;
    // }
    
    var formfil = $("#dformfill").val();
    
    
    $("#certificatenaema").val(name);
    $("#formfila").val(formfil);
    
$.ajax({
    url:"savedetails.php",
    method:"POST",
    data:{name:name,hospital:hospital,city:city,email:email,phone:phone,formfil:formfil},
    success:function(data){
        certificate();
        // alert(data);
        // $("#rdata").html(data);
    }
});
}



function certificate(){
  document.getElementById("aftersubmitform").style.display = "block";
  document.getElementById("startingform").style.display = "none";
}

</script>

<!--<center>-->
<!--    <span onclick="certificate()">certificate</span>-->
<!--</center>-->





<!---->
<div class="row" id="aftersubmitform" style="display:none;background:#2d7473;padding:80px 0px 80px 0px;">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="border:2px solid #fff;padding:50px 0px">
        <h2 class="text-center" style="color:#fe7e00;padding:20px 0px">INTEGRITY PLEDGE</h2>
        <h4 class="text-center" style="color:#fff;padding:5px 0px">Thank you for supporting the cause – Preserve The Uterus</h4>
        <p class="text-center" style="color:#fff;padding:5px 0px">
            Your commitment towards integrity will go a long way in saving womanhood in India.
        </p>
        <div class="col-md-12 text-center">
            <form method="post" action="certificate-download.php" target="_blank">
                <input type="hidden" name="certificatenaem" id="certificatenaema">
                <input type="hidden" name="formfila" id="formfila">
                <button onclick="generatePDF()" class="btn" style="color: #cc9234;width:50%;border-radius:20px">Download Certificate</button>
            </form>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<!---->














  <div class="row" id="startingform" style="display:block;background:#2d7473;padding:80px 0px 80px 0px;">
      <div class="col-md-2"></div>
      <div class="col-md-8" style="border:2px solid #fff">
          <h2 class="text-center" style="color:#fe7e00">INTEGRITY PLEDGE</h2>
          <br>

          <div class="row">
              <div class="col-md-12 text-center" style="padding:20px 0px">
                  <div class="col-md-5">
                      <button  onclick="doctorsectionfun()" class="btn btn-md" style="background:#ff0;color:#000000">AS A DOCTOR</button>
                  </div>
                  <div class="col-md-2" style="color:#fff">
                      ------- OR --------
                  </div>
                  <div class="col-md-5">
                      <button  onclick="citizensectionfun()" class="btn btn-md" style="background:#fe7e00;color:#fff">AS A CITIZEN</button>
                  </div>
              </div>
              
              <div class="col-md-12 text-center" style="color:#fff;padding:20px 0px">
                  <h3>TAKE PLEDGE IN TWO EASY STEPS</h3>
              </div>
              
              <br>

              <!--<div class="col-md-12 text-center" style="margin-bottom:50px;padding:20px 0px">-->
              <!--    <div class="col-md-5">-->
              <!--        <span style="color:#fff">ENTER BASIC DETAILS</span>-->
              <!--    </div>-->
              <!--    <div class="col-md-2"></div>-->
              <!--    <div class="col-md-5">-->
              <!--        <span style="color:#fff">READ & TAKE PLEDGE</span>-->
              <!--    </div>-->
              <!--</div>-->


                <div class="col-md-12">
                    <!--    Doctor    -->
                        <div id="doctorsection" class="col-md-12" style="display:none;padding:10px 80px 100px 80px">
                            <!--<h3 class="text-center doctorheading"> Enter Basic Details </h3>-->
                            
<div class="col-md-12 text-center" style="margin-bottom:50px;padding:20px 0px">
        <div class="col-md-5">
            <span class="doctorheading">ENTER BASIC DETAILS</span>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5">
            <span style="color:#fff">READ & TAKE PLEDGE</span>
        </div>
</div>
                            
                            <!--<form action="#">-->
                                <div class="col-md-12 doctorfrmpdg">
                                    <label class="lableclr">Name *</label>
                                    <input type="text" name="name" id="dname" class="form-control" required>
                                    <span id="dne"></span>
                                </div>
                                <div class="col-md-12 doctorfrmpdg">
                                    <label class="lableclr">Hospital *</label>
                                    <input type="text" name="hospital" id="dhosptl"  class="form-control" required>
                                    <span id="dhe"></span>
                                </div>
                                <div class="col-md-12 doctorfrmpdg">
                                    <label class="lableclr">City *</label>
                                    <input type="text" name="city" id="dcity" class="form-control" required>
                                    <span id="dce"></span>
                                </div>
                                <div class="col-md-12 doctorfrmpdg">
                                    <label class="lableclr">Email *</label>
                                    <input type="text" name="email" id="demail"  class="form-control" required>
                                    <span id="dee"></span>
                                </div>
                                <div class="col-md-12 doctorfrmpdg">
                                    <label class="lableclr">Phone *</label>
                                    <input type="text" name="phone" id="dphone" class="form-control" required>
                                    <span id="dpe"></span>
                                </div>
                                <div class="col-md-12 text-center doctorfrmpdg"><br>
                                    <input type="hidden" name="formfil" id="dformfill" value="Doctor">
                                    <input type="submit" onclick="doctoorpledgeform()" name="doctorform" value="TAKE PLEDGE" class="btn btn-default" style="background:#fff;color:#984807;width:40%">
                                </div>
                            <!--</form>-->
                    </div>
                    <!--    Doctor    -->
                    <!--    Citizen    -->
                    <div id="citizensection" class="col-md-12" style="display:none;padding:10px 80px 100px 80px">
                        <!--<h3 class="text-center citizenheading"> Enter Basic Details </h3>-->
<div class="col-md-12 text-center" style="margin-bottom:50px;padding:20px 0px">
        <div class="col-md-5">
            <span class="citizenheading">ENTER BASIC DETAILS</span>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5">
            <span style="color:#fff">READ & TAKE PLEDGE</span>
        </div>
</div>
                        <form method="post" action="certificate.php">
                            <div class="col-md-12 doctorfrmpdg">
                                <label class="lableclr">Name *</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="col-md-12 doctorfrmpdg">
                                <label class="lableclr">City *</label>
                                <input type="text" name="city"  class="form-control" required>
                            </div>
                            <div class="col-md-12 doctorfrmpdg">
                                <label class="lableclr">Email *</label>
                                <input type="text" name="email"  class="form-control" required>
                            </div>
                            <div class="col-md-12 doctorfrmpdg">
                                <label class="lableclr">Phone *</label>
                                <input type="text" name="phone"  class="form-control" required>
                            </div>
                            <div class="col-md-12 text-center doctorfrmpdg"><br>
                                <input type="hidden" name="formfil" value="Citizen">
                                <input type="hidden" name="hospital"  value="">
                                <input type="submit" name="doctorform" value="TAKE PLEDGE" class="btn btn-default" style="background:#fff;color:#984807;width:40%">
                            </div>
                        </form>
                    </div>
                    <!--    Citizen    -->
                </div>


          </div>

      </div>
      <div class="col-md-2"></div>
  </div>











</div>



</body>
</html>
