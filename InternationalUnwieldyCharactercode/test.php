<div class="spinner">
    <div class="spinnerin"></div>
</div>

<style>
  .spinner {
    width: 3em;
    height: 3em;
    cursor: not-allowed;
    border-radius: 50%;
    border: 2px solid #444;
    box-shadow: -10px -10px 10px #6359f8, 0px -10px 10px 0px #9c32e2, 10px -10px 10px #f36896, 10px 0 10px #ff0b0b, 10px 10px 10px 0px#ff5500, 0 10px 10px 0px #ff9500, -10px 10px 10px 0px #ffb700;
    animation: rot55 0.7s linear infinite;
  }

  .spinnerin {
    border: 2px solid #444;
    width: 1.5em;
    height: 1.5em;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  @keyframes rot55 {
    to {
      transform: rotate(360deg);
    }
  }

</style>

<br>
<br>


<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(147,215,175,0"></use>
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(147,215,175,0"></use>
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(147,215,175,0"></use>
<use xlink:href="#gentle-wave" style="fill: #8FCFEA" x="48" y="0"></use>
<!-- Pattern courtesy of https://iros.github.io/patternfills/ -->
</g>
</svg>
</div>
