<!DOCTYPE html>
<html>
<head>
<title>Analog Clock</title>
<style>
body {
  margin: 0;
  padding: 0;
  background-color: #f0f0f0;
  font-family: sans-serif;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
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
  top:11%;
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
</style>
</head>
<body>
<div class="container">
  <div class="clock">
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
</div>

<script>
const hourHand = document.querySelector('.hour');
const minuteHand = document.querySelector('.minute');
const secondHand = document.querySelector('.second');

function updateClock() {
  const now = new Date();
  const hours = now.getHours();
  const minutes = now.getMinutes();
  const seconds = now.getSeconds();

  const hourRotation = (hours % 12) * 30 + minutes / 2; // 360deg / 12 hours
  const minuteRotation = minutes * 6; // 360deg / 60 minutes
  const secondRotation = seconds * 6; // 360deg / 60 seconds

  hourHand.style.transform = `translateX(-50%) rotate(${hourRotation}deg)`;
  minuteHand.style.transform = `translateX(-50%) rotate(${minuteRotation}deg)`;
  secondHand.style.transform = `translateX(-50%) rotate(${secondRotation}deg)`;
}

setInterval(updateClock, 1000); // Update every second
</script>
</body>
</html>





