<!DOCTYPE html>
<html>
<head>
<title>Analog and Digital Clocks</title>
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

.containersection {
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

.digital-clock {
  font-size: 20px;
  font-weight: bold;
  margin-top: 5px;
}
</style>
</head>
<body>
<div class="containersection">
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
  <div class="digital-clock" id="digital-clock-ist"></div>
</div>

<div class="containersection">
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
  <div class="digital-clock" id="digital-clock-pkt"></div>
</div>

<div class="containersection">
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
  <div class="digital-clock" id="digital-clock-npt"></div>
</div>

<div class="containersection">
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
  <div class="digital-clock" id="digital-clock-bst"></div>
</div>

<div class="containersection">
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
  <div class="digital-clock" id="digital-clock-mmt"></div>
</div>

<div class="containersection">
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
  <div class="digital-clock" id="digital-clock-wib"></div>
</div>

<div class="containersection">
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
  <div class="digital-clock" id="digital-clock-pht"></div>
</div>

<div class="containersection">
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
  <div class="digital-clock" id="digital-clock-jst"></div>
</div>

<script>
const clocks = [
  { id: 'clock-ist', digitalId: 'digital-clock-ist', offset: 5.5 },  // IST (Indian Standard Time)
  { id: 'clock-pkt', digitalId: 'digital-clock-pkt', offset: 5 },    // PKT (Pakistan Standard Time)
  { id: 'clock-npt', digitalId: 'digital-clock-npt', offset: 5.75 }, // NPT (Nepal Time)
  { id: 'clock-bst', digitalId: 'digital-clock-bst', offset: 6 },    // BST (Bangladesh Standard Time)
  { id: 'clock-mmt', digitalId: 'digital-clock-mmt', offset: 6.5 },  // MMT (Myanmar Time)
  { id: 'clock-wib', digitalId: 'digital-clock-wib', offset: 7 },    // WIB (Western Indonesian Time)
  { id: 'clock-pht', digitalId: 'digital-clock-pht', offset: 8 },    // PHT (Philippine Time)
  { id: 'clock-jst', digitalId: 'digital-clock-jst', offset: 9 },    // JST (Japan Standard Time)
];

function updateClocks() {
  clocks.forEach(clock => {
    const element = document.getElementById(clock.id);
    const hourHand = element.querySelector('.hour');
    const minuteHand = element.querySelector('.minute');
    const secondHand = element.querySelector('.second');
    const digitalElement = document.getElementById(clock.digitalId);

    const now = new Date();
    const utcHours = now.getUTCHours();
    const utcMinutes = now.getUTCMinutes();
    const utcSeconds = now.getUTCSeconds();

    const offsetHours = Math.floor(clock.offset);
    const offsetMinutes = (clock.offset - offsetHours) * 60;

    const localHours = (utcHours + offsetHours + Math.floor((utcMinutes + offsetMinutes) / 60)) % 24;
    const localMinutes = (utcMinutes + offsetMinutes) % 60;
    const localSeconds = utcSeconds;

    const hourRotation = (localHours % 12) * 30 + localMinutes / 2; // 360deg / 12 hours
    const minuteRotation = localMinutes * 6; // 360deg / 60 minutes
    const secondRotation = localSeconds * 6; // 360deg / 60 seconds

    hourHand.style.transform = `translateX(-50%) rotate(${hourRotation}deg)`;
    minuteHand.style.transform = `translateX(-50%) rotate(${minuteRotation}deg)`;
    secondHand.style.transform = `translateX(-50%) rotate(${secondRotation}deg)`;

    const formattedHours = String(localHours).padStart(2, '0');
    const formattedMinutes = String(localMinutes).padStart(2, '0');
    const formattedSeconds = String(localSeconds).padStart(2, '0');

    digitalElement.textContent = `${formattedHours}:${formattedMinutes}:${formattedSeconds}`;
  });
}

setInterval(updateClocks, 1000); // Update every second
updateClocks(); // Initial call to set the correct time immediately
</script>
</body>
</html>
