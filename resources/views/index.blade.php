@extends('layout.app')


@section('content')
    <div>
        <!-- Sun / Logo (SVG) -->
        <svg class="sun" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="g" x1="0" x2="1">
                    <stop offset="0%" stop-color="#ff2d73" />
                    <stop offset="100%" stop-color="#ff8a00" />
                </linearGradient>
            </defs>
            <circle cx="50" cy="50" r="22" fill="url(#g)" />
            <g fill="url(#g)">
                <polygon points="50,5 42,22 58,22" />
                <polygon points="95,50 78,42 78,58" />
                <polygon points="50,95 42,78 58,78" />
                <polygon points="5,50 22,42 22,58" />
                <polygon points="80,20 68,30 74,36" />
                <polygon points="20,20 30,32 36,26" />
                <polygon points="80,80 68,70 74,64" />
                <polygon points="20,80 30,68 36,74" />
            </g>
        </svg>

        <div class="amount">1000</div>
        <div class="ticker">$Ghost</div>

        <div class="my-3">
            <button class="btn btn-gradient" id="connectBtn"><i class="bi bi-wallet2 me-2"></i>Connect
                Wallet</button>
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
    </div>


    @push('js')
        <script>
            /* Simple demo interactions – you can wire to real backend later */
            const ratePerHour = 400; // tokens/hour
            const ratePerSec = ratePerHour / 3600; // ~0.1111 token/second
            let mining = false;
            let mined = 0;
            let timer = null;

            const mineValue = document.getElementById('mineValue');
            const startBtn = document.getElementById('startBtn');
            const claimBtn = document.getElementById('claimBtn');
            const boostBtn = document.getElementById('boostBtn');

            function fmt(n) {
                return n.toFixed(2)
            }

            function tick() {
                mined += ratePerSec;
                mineValue.textContent = fmt(mined);
            }

            startBtn.addEventListener('click', () => {
                mining = !mining;
                if (mining) {
                    startBtn.textContent = 'Pause Mining';
                    timer = setInterval(tick, 1000);
                } else {
                    startBtn.textContent = 'Start Mining';
                    clearInterval(timer);
                }
            });

            claimBtn.addEventListener('click', () => {
                if (mined <= 0) return;
                alert('Claimed ' + fmt(mined) + ' $Ghost');
                mined = 0;
                mineValue.textContent = fmt(mined);
            });

            boostBtn.addEventListener('click', () => {
                alert('Boost activated! (demo)');
            });

            document.getElementById('connectBtn').addEventListener('click', () => {
                alert('Connect wallet (demo)');
            });
        </script>
    @endpush
@endsection
