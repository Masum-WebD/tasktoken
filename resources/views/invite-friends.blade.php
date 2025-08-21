@extends('layout.app')

@push('css')
    <style>
        body {
            background-color: #271f44;
            font-family: 'Inter', sans-serif;
        }

        .section-title {
            font-size: 35px;
            font-weight: 700;
            color: #fff;
            text-align: center;
            margin-bottom: 24px;
        }

        .task-card {
            background-color: #383153;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
        }

        .task-icon {
            font-size: 56px;
            color: #fc3876;
        }

        .task-title {
            font-size: 25px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 6px;
        }

        .task-reward {
            color: #ffd166;
            font-size: 18px;
            font-weight: 500;
        }


        .stats {
            font-size: 18px;
            color: #ddd;
        }

        .empty-text {
            font-size: 16px;
            color: #aaa;
            margin-top: 10px;
        }
    </style>
@endpush

@section('content')
    <div class="py-4">
        <h1 class="section-title">Invite Friends & Earn $Ghost</h1>

        <div class="task-card">
            <div class="d-flex align-items-center gap-3">
                <i class="bi bi-brightness-high-fill task-icon"></i>
                <div>
                    <h2 class="task-title">Invite Friends</h2>
                    <span class="task-reward">🎁 100 $Ghost Reward</span>
                </div>
            </div>

            <div class="mt-3 d-flex gap-3 justify-content-center">
               <a href="#" class="gradient px-3 py-2 rounded-1">
    <i class="bi bi-person-plus"></i> Invite Friends
</a>

         <a href="#" class="gradient px-3 py-2 rounded-1">
    <i class="bi bi-clipboard"></i> Copy Link
</a>

            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center stats">
            <p>👥 0 Friends</p>
            <p>💰 0 Ghost</p>
        </div>

        <p class="text-center empty-text">No friends invited yet...</p>
    </div>
@endsection
