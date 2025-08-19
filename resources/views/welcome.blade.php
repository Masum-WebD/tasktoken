<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>Ghost Miner – Mobile</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    :root{
      --brand:#ff2d73;
      --brand-2:#ff8a00;
      --mint:#0bd06d;
      --deep:#2b1e19;   /* dark card */
      --deep-2:#3a2a23; /* darker */
      --lav:#b2a4ff;
      --pill-radius:2rem;
    }

    body{background:#fff; font-family: system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, "Apple Color Emoji","Segoe UI Emoji";}
    .sun{width:92px;height:72px;display:block;margin:18px auto 10px auto}
    .amount{font-size:20px;line-height:1;font-weight:500;text-align:center}
    .ticker{font-size:22px;text-align:center;margin-top:4px}

    .btn-gradient{background: linear-gradient(90deg, var(--brand), var(--brand-2)); color:#fff; border:none; border-radius:22px; padding:14px 18px; font-weight:600; width:100%;}
    .btn-pill{border-radius: var(--pill-radius); padding:12px 16px; font-weight:700;}

    .stats-card{background: #3e2e28; border:0; border-radius:20px; color:#fff;}
    .stats-card .title{font-size:24px; font-weight:700}
    .stats-card .value{font-size:25px; font-weight:800}
    .rate{opacity:.9; font-size:18px}

    .action-btn{background:#000; color:#fff; border:3px solid var(--mint); border-radius: 2.2rem; padding:10px 22px; font-size:17px; font-weight:500}
    .action-btn:active{transform:scale(.98)}

    .boost{background:var(--lav); color:#fff; border:none; border-radius: 2.2rem; padding:10px; font-size:20px; font-weight:800}

    .bottom-nav{position:fixed; left:0; right:0; bottom:0; background:#0e0e0e; color:#fff; padding:8px 6px;}
    .nav-itemx{flex:1; text-align:center; color:#dcdcdc; font-size:18px}
    .nav-itemx .ico{width:46px;height:46px;border-radius:14px;display:inline-flex;align-items:center;justify-content:center;background:#1c1c1c;margin-bottom:6px}
    .nav-itemx.active{color:#ffebc2}
    .nav-itemx.active .ico{background:#ffebc2;color:#1c1c1c}

    /* mobile-first spacing */
    .wrap{max-width:520px;margin:0 auto; padding: 10px 14px 120px}

    /* media tweaks */
    @media (min-width:480px){
      .amount{font-size:20px}
      .ticker{font-size:22px}
    }
  </style>
</head>
<body>
  <main class="wrap">
    <!-- Sun / Logo (SVG) -->
    <svg class="sun" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="g" x1="0" x2="1">
          <stop offset="0%" stop-color="#ff2d73"/>
          <stop offset="100%" stop-color="#ff8a00"/>
        </linearGradient>
      </defs>
      <circle cx="50" cy="50" r="22" fill="url(#g)"/>
      <g fill="url(#g)">
        <polygon points="50,5 42,22 58,22"/>
        <polygon points="95,50 78,42 78,58"/>
        <polygon points="50,95 42,78 58,78"/>
        <polygon points="5,50 22,42 22,58"/>
        <polygon points="80,20 68,30 74,36"/>
        <polygon points="20,20 30,32 36,26"/>
        <polygon points="80,80 68,70 74,64"/>
        <polygon points="20,80 30,68 36,74"/>
      </g>
    </svg>

    <div class="amount">1000</div>
    <div class="ticker">$Ghost</div>

    <div class="my-3">
      <button class="btn btn-gradient" id="connectBtn"><i class="bi bi-wallet2 me-2"></i>Connect Wallet</button>
    </div>

    <!-- Stats Card -->
    <div class="card stats-card my-3 p-4">
      <div class="d-flex justify-content-between align-items-start mb-2">
        <div class="title">Mined Tokens</div>
        <i class="bi bi-info-circle fs-4"></i>
      </div>
      <div class="value" id="mineValue">0.00</div>
      <div class="d-flex align-items-center gap-2 rate mt-1">
        <i class="bi bi-sun-fill"></i>
        <span><span id="rate">400</span> tokens profit per hour</span>
        <i class="bi bi-info-circle ms-1"></i>
      </div>
    </div>

    <!-- Actions -->
    <div class="d-flex gap-3 justify-content-between my-3">
      <button class="action-btn flex-grow-1" id="startBtn">Start Mining</button>
      <button class="action-btn flex-grow-1" id="claimBtn">Claim</button>
    </div>

    <div class="my-3">
      <button class="boost w-100" id="boostBtn">Boost Mining</button>
    </div>
  </main>

  <!-- Bottom Navigation -->
  <nav class="bottom-nav">
    <div class="d-flex align-items-end">
      <a href="#" class="nav-itemx text-decoration-none">
        <div class="ico"><i class="bi bi-house-door fs-4"></i></div>
        <div>Home</div>
      </a>
      <a href="#" class="nav-itemx active text-decoration-none">
        <div class="ico"><i class="bi bi-clipboard2-check fs-4"></i></div>
        <div>Mission</div>
      </a>
      <a href="#" class="nav-itemx text-decoration-none">
        <div class="ico"><i class="bi bi-people fs-4"></i></div>
        <div>Friends</div>
      </a>
      <a href="#" class="nav-itemx text-decoration-none">
        <div class="ico"><i class="bi bi-trophy fs-4"></i></div>
        <div>Leaders</div>
      </a>
    </div>
  </nav>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    /* Simple demo interactions – you can wire to real backend later */
    const ratePerHour = 400; // tokens/hour
    const ratePerSec  = ratePerHour / 3600; // ~0.1111 token/second
    let mining = false;
    let mined = 0;
    let timer = null;

    const mineValue = document.getElementById('mineValue');
    const startBtn  = document.getElementById('startBtn');
    const claimBtn  = document.getElementById('claimBtn');
    const boostBtn  = document.getElementById('boostBtn');

    function fmt(n){return n.toFixed(2)}

    function tick(){
      mined += ratePerSec;
      mineValue.textContent = fmt(mined);
    }

    startBtn.addEventListener('click', () => {
      mining = !mining;
      if(mining){
        startBtn.textContent = 'Pause Mining';
        timer = setInterval(tick, 1000);
      }else{
        startBtn.textContent = 'Start Mining';
        clearInterval(timer);
      }
    });

    claimBtn.addEventListener('click', () => {
      if(mined <= 0) return;
      alert('Claimed ' + fmt(mined) + ' $Ghost');
      mined = 0; mineValue.textContent = fmt(mined);
    });

    boostBtn.addEventListener('click', () => {
      alert('Boost activated! (demo)');
    });

    document.getElementById('connectBtn').addEventListener('click',() => {
      alert('Connect wallet (demo)');
    });
  </script>
</body>
</html>
