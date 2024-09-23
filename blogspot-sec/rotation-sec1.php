<title>test 1</title>

<style>
  .circle {
    position: relative;
    width: 60px;
    height: 60px;
    background-color: black;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    text-align: center;
  }

  .text {
    width: 100%;
    height: 100%;
    position: absolute;
    animation: anim 3s linear infinite;
  }

  .circle h2 {
    font-size: 2rem;
  }

  @keyframes anim {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

  .text span {
    position: absolute;
    left: 50%;
    transform-origin: 0 30px;
    color: white;
    text-align: center;
    font-size: smaller;
  }

  .text h2 {
    align-items: center;
  }

  .hand {
    font-size: 2rem;
    display: inline-block;
    transition: transform 0.1s ease;
  }

  #okapi-wasb-button {
    position: fixed;
    z-index: 9999999;
  }

  #okapi-wasb-button {
    bottom: 15px;
    right: 15px;
  }

  body {
    background: #a6a6a9;
  }
</style>

<body>
  <!-- get in touch  -->
  <div id="okapi-wasb-button" target="_blank">
    <a href="https://calendly.com/1solutionsbiz/" onmouseover="startHandWaving(this)" onmouseout="stopHandWaving(this)">
      <div class="circle" onmouseover="bigImg(this)" onmouseout="normalImg(this)">
        <div class="text">
          <p>Get in touch - Get in touch</p>
        </div>
        <h2 class="hand">👋</h2>
      </div>
    </a>
  </div>
  <!-- get in touch end  -->
</body>

<script>
  let handInterval;

  function startHandWaving(element) {
    const hand = element.querySelector('.hand');
    let angle = 0;
    let direction = 1;

    handInterval = setInterval(() => {
      if (angle >= 20) {
        direction = -1;
      } else if (angle <= -20) {
        direction = 1;
      }

      angle += direction * 5;
      hand.style.transform = `rotate(${angle}deg)`;
    }, 10);
  }

  function stopHandWaving(element) {
    clearInterval(handInterval);
    const hand = element.querySelector('.hand');
    hand.style.transform = 'rotate(0deg)';
  }

  const text = document.querySelector('.text p');
  text.innerHTML = text.innerText.split('').map(
    (char, i) => `<span style="transform:rotate(${i * 15}deg)">${char}</span>`
  ).join('');

  function bigImg(x) {
    x.style.height = "62px";
    x.style.width = "62px";
  }

  function normalImg(x) {
    x.style.height = "60px";
    x.style.width = "60px";
  }
</script>
