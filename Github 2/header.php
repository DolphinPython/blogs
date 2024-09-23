<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style>
  .colbg{
    background: #fff;
    margin: 10px;
    max-width: 48%;
    padding: 15px 10px;
    display: flex;
    box-shadow: rgb(170, 170, 170) 0px 0px 10px 0px;
    border-radius: 10px;
    transition: transform 0.3s ease; 
  }
  .colbg>.leftsec>img{
    max-width: 100%;
    /* transition: transform 0.3s ease; */
  }
  .colbg:hover .leftsec img {
      transform: scale(1.1); 
      transition: transform 0.3s ease-in-out;
  }

  
  .colbgc>.leftsec>img {
      border-radius: 10px;
  }
  .colbgw>.leftsec>img {
      border-radius: 10px;
  }
  .colbga>.leftsec>img {
      border-radius: 10px;
  }
  .colbg>.leftsec>, .colbg>.rigthsec, .col-md-6{
      padding: 0px !important;
  }

  .rigthsec{
    padding: 20px 0px !important;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  .leftsec{
    padding:20px 30px 20px 10px;
  }

  .btnbuynow {
      background: #fff;
      color: #000;
      width: 80%;
      padding: 5px 0px;
      font-size: 15px;
      border: 2px solid #000;
      border-radius: 20px;
      font-weight: 600;
  }
  .btnbuynow:hover {
      color: #fff !important;
      border: 2px solid #000;
      background-color: #000;
  }
  
  
  
  .modeltype{
    font-size:16px;
  }
  .oprice{
    font-size:15px;
  }
  .sprice{
    font-size:15px;
  }
  .coupon{
    font-size:15px;
  }

  
  p>del{
    font-size:15px;
  }
  p, h4{
    margin:0px;
  }
  .colbg h4{
    font-size:25px;
  }
  .colbgc h4, .colbga h4{
    font-size:20px;
  }
.coupencode{
    color:#e97941;
  }

  .fs15{
    font-size:15px;
  }
  .fs16{
    font-size:16px;
  }
  .fs17{
    font-size:17px;
  }
  .fs18{
    font-size:18px;
  }
  .fw500{
    font-weight:500;
  }


.gradient-text {
  background: linear-gradient(to right, #feb202, #fd8800); 
  -webkit-background-clip: text; 
  -webkit-text-fill-color: transparent;
  font-size: 40px;
  font-weight: bold;
}


  /* Mobile section Start */
  @media screen and (max-width: 481px) {
    .colbg{
      max-width:100%;
    }
    .leftsec, .rigthsec {
        width: 50%;
    }
    
    .colbg h4,.colbgc h4, .colbga h4 {
      font-size: 18px;
    }
    .modeltype {
      font-size: 15px;
    }
  }
  /* Mobile section end */
</style>