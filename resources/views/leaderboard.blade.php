@extends('layout.app')

@push('css')
    <style>
        body {
            background-color: #271f44;
        }

        .task-section-title {
            font-size: 35;
            font-weight: 700;
            color: #fff;
            text-align: center;
            margin-bottom: 16px;
        }

        .info-text {
            text-align: center;
            color: #bbb;
            font-size: 14px;
            margin-bottom: 20px;
        }

        /* Highlighted Card (Your Rank) */
        .leaderboard-card {
            background-color: #383153;
            border-radius: 12px;
            padding: 12px 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 14px;
            transition: 0.3s ease;
        }

        .leaderboard-card:hover {
            background-color: #48406a;
        }

        /* Transparent Flat Row */
        .leaderboard-flat {
            background: transparent;
            padding: 8px 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px dashed #555;
            margin-bottom: 6px;
        }

        .task-title {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
        }

        .icons {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 700;
            font-size: 16px;
            text-transform: uppercase;
        }

        .bg_nth_child:nth-child(3) .icons {
            background-color: #ff6b6b;
        }

        .bg_nth_child:nth-child(4) .icons {
            background-color: #feca57;
        }

        .bg_nth_child:nth-child(5) .icons {
            background-color: #1dd1a1;
        }

        .bg_nth_child:nth-child(6) .icons {
            background-color: #5f27cd;
        }

        .bg_nth_child:nth-child(7) .icons {
            background-color: #54a0ff;
        }

        .bg_nth_child:nth-child(8) .icons {
            background-color: #ff9ff3;
        }

        .bg_nth_child:nth-child(9) .icons {
            background-color: #48dbfb;
        }

        .bg_nth_child:nth-child(10) .icons {
            background-color: #c8d6e5;
        }

        .bg_nth_child:nth-child(11) .icons {
            background-color: #ee5253;
        }

        .bg_nth_child:nth-child(12) .icons {
            background-color: #f368e0;
        }

        .bg_nth_child:nth-child(13) .icons {
            background-color: #00d2d3;
        }

        .bg_nth_child:nth-child(14) .icons {
            background-color: #ff9f43;
        }

        .bg_nth_child:nth-child(15) .icons {
            background-color: #576574;
        }

        .bg_nth_child:nth-child(16) .icons {
            background-color: #01a3a4;
        }

        .bg_nth_child:nth-child(17) .icons {
            background-color: #341f97;
        }

        .bg_nth_child:nth-child(18) .icons {
            background-color: #2e86de;
        }

        .bg_nth_child:nth-child(19) .icons {
            background-color: #ff6b81;
        }

        .bg_nth_child:nth-child(20) .icons {
            background-color: #f1c40f;
        }

        .bg_nth_child:nth-child(21) .icons {
            background-color: #8e44ad;
        }

        .bg_nth_child:nth-child(22) .icons {
            background-color: #2ecc71;
        }

        .task-reward {
            display: block;
            margin-top: 2px;
            font-size: 15px;
            color: #fc3876;
            font-weight: 500;
        }

        .rank {
            font-size: 16px;
            font-weight: 700;
            color: #fff;
        }

        .boost-btn {
            background: linear-gradient(135deg, #8b82dd, #5a52b3);
            color: #fff;
            font-weight: 600;
            padding: 10px 16px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 20px;
            display: inline-block;
            transition: 0.25s ease;
            margin: 10px 0;
        }

        .boost-btn:hover {
            transform: translateY(-2px);
            opacity: 0.9;
        }
    </style>
@endpush

@section('content')
    <div class="py-4">
        <h1 class="task-section-title">🏆 Leaderboard</h1>
        <p class="info-text">Ranking Info <i class="bi bi-info-circle"></i></p>

        <h1 class="task-section-title">Your Rank</h1>

        <!-- Highlighted Card (Your Rank) -->
        <div class="leaderboard-card bg_nth_child">
            <div class="task-title">
                <div class="icons r">R</div>
                <div>
                    <h4 class="mb-0">Rakib Hasan</h4>
                    <span class="task-reward"><i class="bi bi-brightness-high-fill"></i> 700</span>
                </div>
            </div>
            <div class="rank">#7</div>
        </div>

        <!-- Boost Button -->
        <div class="text-center">
            <a href="#" class="boost-btn">🚀 Boost Your Rank</a>
        </div>

        <!-- Flat Leaderboard Rows -->
        <div class="leaderboard-flat bg_nth_child">
            <div class="task-title">
                <div class="icons r">R</div>
                <div>
                    <h4 class="mb-0">Redwan</h4>
                    <span class="task-reward"><i class="bi bi-brightness-high-fill"></i> 7100</span>
                </div>
            </div>
            <div class="rank">#1</div>
        </div>

        <div class="leaderboard-flat bg_nth_child">
            <div class="task-title">
                <div class="icons a">A</div>
                <div>
                    <h4 class="mb-0">Alice</h4>
                    <span class="task-reward"><i class="bi bi-brightness-high-fill"></i> 680</span>
                </div>
            </div>
            <div class="rank">#2</div>
        </div>
    </div>
@endsection
