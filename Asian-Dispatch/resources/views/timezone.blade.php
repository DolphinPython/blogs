<!DOCTYPE html>
<html>
<head>
<title>Analog Clocks</title>
<style>
body {
  margin: 0;
  padding: 0;
  background-color: #f0f0f0;
  font-family: sans-serif;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 20px;
}

.clock {
  width: 300px;
  height: 300px;
  border-radius: 50%;
  background-color: #fff;
  border: 2px solid #ccc;
  position: relative;
}

.hand {
  position: absolute;
  left: 50%;
  bottom: 50%;
  transform-origin: bottom;
  background-color: #000;
  border-radius: 10px;
}

.hour {
  width: 8px;
  height: 80px;
  transform: translateX(-50%) rotate(90deg);
}

.minute {
  width: 4px;
  height: 120px;
  transform: translateX(-50%) rotate(90deg);
}

.second {
  width: 2px;
  height: 140px;
  background-color: red;
  transform: translateX(-50%) rotate(90deg);
}

.center {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 10px;
  height: 10px;
  background-color: #000;
  border-radius: 50%;
}

.number {
  position: absolute;
  font-size: 20px;
  font-weight: bold;
  transform: translate(-50%, -50%);
  color: #333;
}

.number-1 {
  left: 72%;
  top: 11%;
}

.number-2 {
  left: 90%;
  top: 30%;
}

.number-3 {
  left: 95%;
  top: 50%;
}

.number-4 {
  left: 90%;
  top: 72%;
}

.number-5 {
  left: 72%;
  top: 89%;
}

.number-6 {
  left: 50%;
  top: 95%;
}

.number-7 {
  left: 26%;
  top: 89%;
}

.number-8 {
  left: 9%;
  top: 72%;
}

.number-9 {
  left: 5%;
  top: 50%;
}

.number-10 {
  left: 12%;
  top: 29%;
}

.number-11 {
  left: 27%;
  top: 11%;
}

.number-12 {
  left: 50%;
  top: 5%;
}

.timezone-label {
  margin-top: 10px;
  font-size: 20px;
  font-weight: bold;
}
</style>
</head>
<body>





<div>
  <h2><b>Terms and Conditions for HONOR 200 Series Survey</b></h2>
<ul>
  <li>
    <b>Eligibility:</b> This survey is open to all individuals who wish to provide feedback on their smartphone usage experiences.
  </li>
  <br>
  <li>
    <b>Survey Period:</b> The survey begins on 25th July 2024 and will end on 28th July 2024. Each day, a new question will be available for response.
  </li>
  <br>
  <li>
    <b>Participation:</b> Participants must answer the daily question posted on our official page. Responses must be submitted within 24 hours from the time of the question posting.
  </li>
  <br>
  <li>
    <b>Data Use and Privacy:</b> All personal information collected from the participants will be used solely for the purpose of this survey and improving our products.
  </li>
  <br>
  <li>
    <b>Prizes and Incentives:</b> Participants who answer all questions throughout the survey period will be eligible for a chance to win HONOR Choice X5. The winners will be selected randomly by HONOR and announced 7 days after the survey’s conclusion. All participants who complete every question are eligible for this prize.
  </li>
  <br>
  <li>
    <b>No Purchase Necessary:</b> No purchase is required to enter or win.
  </li>
  <br>
  <li>
    <b>PLiability Release:</b> By participating, you agree to release and hold harmless HONOR and its affiliates from any liability, illness, injury, death, loss, litigation, claim, or damage that may occur, directly or indirectly, whether caused by negligence or not, from participating in the survey or acceptance, possession, use, or misuse of any prize awarded.
  </li>
  <br>
  <li>
    <b>PGeneral Conditions:</b> HONOR reserves the right to cancel, suspend, and/or modify the survey, or any part of it, if any fraud, technical failures, or any other factor beyond HONOR’s control impairs the integrity or proper functioning of the survey, as determined by HONOR in its sole discretion.
  </li>
</ul>
  
</div>

  
  
<div class="container">
  <div class="clock" id="clock-ist">
    <div class="hand hour"></div>
    <div class="hand minute"></div>
    <div class="hand second"></div>
    <div class="center"></div>
    <div class="number number-1">1</div>
    <div class="number number-2">2</div>
    <div class="number number-3">3</div>
    <div class="number number-4">4</div>
    <div class="number number-5">5</div>
    <div class="number number-6">6</div>
    <div class="number number-7">7</div>
    <div class="number number-8">8</div>
    <div class="number number-9">9</div>
    <div class="number number-10">10</div>
    <div class="number number-11">11</div>
    <div class="number number-12">12</div>
  </div>
  <div class="timezone-label">IST</div>
</div>

<div class="container">
  <div class="clock" id="clock-pkt">
    <div class="hand hour"></div>
    <div class="hand minute"></div>
    <div class="hand second"></div>
    <div class="center"></div>
    <div class="number number-1">1</div>
    <div class="number number-2">2</div>
    <div class="number number-3">3</div>
    <div class="number number-4">4</div>
    <div class="number number-5">5</div>
    <div class="number number-6">6</div>
    <div class="number number-7">7</div>
    <div class="number number-8">8</div>
    <div class="number number-9">9</div>
    <div class="number number-10">10</div>
    <div class="number number-11">11</div>
    <div class="number number-12">12</div>
  </div>
  <div class="timezone-label">PKT</div>
</div>

<div class="container">
  <div class="clock" id="clock-npt">
    <div class="hand hour"></div>
    <div class="hand minute"></div>
    <div class="hand second"></div>
    <div class="center"></div>
    <div class="number number-1">1</div>
    <div class="number number-2">2</div>
    <div class="number number-3">3</div>
    <div class="number number-4">4</div>
    <div class="number number-5">5</div>
    <div class="number number-6">6</div>
    <div class="number number-7">7</div>
    <div class="number number-8">8</div>
    <div class="number number-9">9</div>
    <div class="number number-10">10</div>
    <div class="number number-11">11</div>
    <div class="number number-12">12</div>
  </div>
  <div class="timezone-label">NPT</div>
</div>

<div class="container">
  <div class="clock" id="clock-bst">
    <div class="hand hour"></div>
    <div class="hand minute"></div>
    <div class="hand second"></div>
    <div class="center"></div>
    <div class="number number-1">1</div>
    <div class="number number-2">2</div>
    <div class="number number-3">3</div>
    <div class="number number-4">4</div>
    <div class="number number-5">5</div>
    <div class="number number-6">6</div>
    <div class="number number-7">7</div>
    <div class="number number-8">8</div>
    <div class="number number-9">9</div>
    <div class="number number-10">10</div>
    <div class="number number-11">11</div>
    <div class="number number-12">12</div>
  </div>
  <div class="timezone-label">BST</div>
</div>

<div class="container">
  <div class="clock" id="clock-mmt">
    <div class="hand hour"></div>
    <div class="hand minute"></div>
    <div class="hand second"></div>
    <div class="center"></div>
    <div class="number number-1">1</div>
    <div class="number number-2">2</div>
    <div class="number number-3">3</div>
    <div class="number number-4">4</div>
    <div class="number number-5">5</div>
    <div class="number number-6">6</div>
    <div class="number number-7">7</div>
    <div class="number number-8">8</div>
    <div class="number number-9">9</div>
    <div class="number number-10">10</div>
    <div class="number number-11">11</div>
    <div class="number number-12">12</div>
  </div>
  <div class="timezone-label">MMT</div>
</div>

<div class="container">
  <div class="clock" id="clock-wib">
    <div class="hand hour"></div>
    <div class="hand minute"></div>
    <div class="hand second"></div>
    <div class="center"></div>
    <div class="number number-1">1</div>
    <div class="number number-2">2</div>
    <div class="number number-3">3</div>
    <div class="number number-4">4</div>
    <div class="number number-5">5</div>
    <div class="number number-6">6</div>
    <div class="number number-7">7</div>
    <div class="number number-8">8</div>
    <div class="number number-9">9</div>
    <div class="number number-10">10</div>
    <div class="number number-11">11</div>
    <div class="number number-12">12</div>
  </div>
  <div class="timezone-label">WIB</div>
</div>

<div class="container">
  <div class="clock" id="clock-pht">
    <div class="hand hour"></div>
    <div class="hand minute"></div>
    <div class="hand second"></div>
    <div class="center"></div>
    <div class="number number-1">1</div>
    <div class="number number-2">2</div>
    <div class="number number-3">3</div>
    <div class="number number-4">4</div>
    <div class="number number-5">5</div>
    <div class="number number-6">6</div>
    <div class="number number-7">7</div>
    <div class="number number-8">8</div>
    <div class="number number-9">9</div>
    <div class="number number-10">10</div>
    <div class="number number-11">11</div>
    <div class="number number-12">12</div>
  </div>
  <div class="timezone-label">PHT</div>
</div>

<div class="container">
  <div class="clock" id="clock-jst">
    <div class="hand hour"></div>
    <div class="hand minute"></div>
    <div class="hand second"></div>
    <div class="center"></div>
    <div class="number number-1">1</div>
    <div class="number number-2">2</div>
    <div class="number number-3">3</div>
    <div class="number number-4">4</div>
    <div class="number number-5">5</div>
    <div class="number number-6">6</div>
    <div class="number number-7">7</div>
    <div class="number number-8">8</div>
    <div class="number number-9">9</div>
    <div class="number number-10">10</div>
    <div class="number number-11">11</div>
    <div class="number number-12">12</div>
  </div>
  <div class="timezone-label">JST</div>
</div>

<script>
const clocks = [
  { id: 'clock-ist', offset: 5.5 },  // IST (Indian Standard Time)
  { id: 'clock-pkt', offset: 5 },    // PKT (Pakistan Standard Time)
  { id: 'clock-npt', offset: 5.75 }, // NPT (Nepal Time)
  { id: 'clock-bst', offset: 6 },    // BST (Bangladesh Standard Time)
  { id: 'clock-mmt', offset: 6.5 },  // MMT (Myanmar Time)
  { id: 'clock-wib', offset: 7 },    // WIB (Western Indonesian Time)
  { id: 'clock-pht', offset: 8 },    // PHT (Philippine Time)
  { id: 'clock-jst', offset: 9 },    // JST (Japan Standard Time)
];

function updateClocks() {
  clocks.forEach(clock => {
    const element = document.getElementById(clock.id);
    const hourHand = element.querySelector('.hour');
    const minuteHand = element.querySelector('.minute');
    const secondHand = element.querySelector('.second');

    const now = new Date();
    const utcHours = now.getUTCHours();
    const utcMinutes = now.getUTCMinutes();
    const utcSeconds = now.getUTCSeconds();

    const localHours = (utcHours + clock.offset) % 24;
    const localMinutes = utcMinutes;
    const localSeconds = utcSeconds;

    const hourRotation = (localHours % 12) * 30 + localMinutes / 2; // 360deg / 12 hours
    const minuteRotation = localMinutes * 6; // 360deg / 60 minutes
    const secondRotation = localSeconds * 6; // 360deg / 60 seconds

    hourHand.style.transform = `translateX(-50%) rotate(${hourRotation}deg)`;
    minuteHand.style.transform = `translateX(-50%) rotate(${minuteRotation}deg)`;
    secondHand.style.transform = `translateX(-50%) rotate(${secondRotation}deg)`;
  });
}

setInterval(updateClocks, 1000); // Update every second
</script>
</body>
</html>
