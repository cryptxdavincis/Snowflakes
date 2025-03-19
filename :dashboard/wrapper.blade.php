<style>
  /* Gaya elemen angka dan rumus matematika */
  .snowflake {
    color: #fff;
    font-size: 1em;
    font-family: Arial, sans-serif;
    text-shadow: 0 0 5px #000;
  }

  .snowflake, .snowflake .inner {
    animation-iteration-count: infinite;
    animation-play-state: running;
  }

  @keyframes snowflakes-fall {
    0% { transform: translateY(0); }
    100% { transform: translateY(110vh); }
  }

  @keyframes snowflakes-shake {
    0%, 100% { transform: translateX(0); }
    50% { transform: translateX(80px); }
  }

  .snowflake {
    position: fixed;
    top: -10%;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
    animation-name: snowflakes-shake;
    animation-duration: 3s;
    animation-timing-function: ease-in-out;
  }

  .snowflake .inner {
    animation-duration: 10s;
    animation-name: snowflakes-fall;
    animation-timing-function: linear;
  }

  /* Posisi awal dan animasi delay untuk variasi */
  .snowflake:nth-of-type(1) { left: 5%; animation-delay: 0s; }
  .snowflake:nth-of-type(2) { left: 15%; animation-delay: 1s; }
  .snowflake:nth-of-type(3) { left: 25%; animation-delay: 2s; }
  .snowflake:nth-of-type(4) { left: 35%; animation-delay: 3s; }
  .snowflake:nth-of-type(5) { left: 45%; animation-delay: 4s; }
  .snowflake:nth-of-type(6) { left: 55%; animation-delay: 2s; }
  .snowflake:nth-of-type(7) { left: 65%; animation-delay: 1s; }
  .snowflake:nth-of-type(8) { left: 75%; animation-delay: 3s; }
  .snowflake:nth-of-type(9) { left: 85%; animation-delay: 5s; }
  .snowflake:nth-of-type(10) { left: 95%; animation-delay: 4s; }
</style>

<div class="snowflakes" aria-hidden="true">
  <div class="snowflake"><div class="inner">E=mc²</div></div>
  <div class="snowflake"><div class="inner">π ≈ 3.14</div></div>
  <div class="snowflake"><div class="inner">9.81 m/s²</div></div>
  <div class="snowflake"><div class="inner">F=ma</div></div>
  <div class="snowflake"><div class="inner">√2 ≈ 1.41</div></div>
  <div class="snowflake"><div class="inner">c = 299,792,458 m/s</div></div>
  <div class="snowflake"><div class="inner">P = IV</div></div>
  <div class="snowflake"><div class="inner">H₂O</div></div>
  <div class="snowflake"><div class="inner">e = 2.718</div></div>
  <div class="snowflake"><div class="inner">Ω = V/I</div></div>
</div>

<img src="/extensions/snowflakes/snow.png" class="snow">

<style id="snowflakes-extension">
  #app {
    background: none !important;
    background-color: none !important;
  }

  .snowflake {
    z-index: 99 !important;
  }

  .snow {
    position: fixed;
    left: 0;
    bottom: 0px;
    width: 100%;
    height: 50px;
    border: none;
    z-index: 100;
  }
</style>
