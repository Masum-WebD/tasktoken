@extends('layout.app')

@push('css')
    <style>
        body {
            background-color: #271f44;
        }

        .task-section-title {
            font-size: 35px;
            color: #fff;
            text-align: center;
        }

        .task-card {
            background-color: #383153;
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 12px;
        }

        .task-title {
            font-size: 20px;
            font-weight: 600;
            color: rgb(235, 235, 235);
        }

        .task-icon {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .task-user-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .task-reward {
            color: rgb(231, 231, 231);
            font-size: 14px;
            margin-top: 4px;
            display: block;
        }

        .go-btn {
            padding: 4px 16px;
            border-radius: 4px;
        }
    </style>
@endpush

@section('content')
    <div class="py-4">
       <h1 class="task-section-title py-2">Daily Tasks</h1>
       <div class="task-card d-flex justify-content-between align-items-center">
            <div class="task-title">
                <img src="{{asset('assets/images/schedule.png')}}" class="task-icon" alt="">
                Daily Checkin
            </div>
             <div>
                <a href="#" class="gradient go-btn">Go</a>
             </div>
       </div>

       <h1 class="task-section-title py-3 mb-2 mt-3">Special Tasks</h1>

       <div class="task-card d-flex justify-content-between align-items-center">
            <div class="task-title d-flex align-items-center gap-2">
                <div class="rounded-circle d-flex justify-content-center align-items-center" style="margin-right:5px">
                    <img src="{{asset('assets/images/user.png')}}" class="task-user-icon" alt="">
                </div>
                <div>
                    Daily Checkin
                    <span class="task-reward">+20000 $Ghost</span>
                </div>
            </div>
            <div>
                <a href="#" class="gradient go-btn">Go</a>
            </div>
       </div>

       <div class="task-card d-flex justify-content-between align-items-center">
            <div class="task-title d-flex align-items-center gap-2">
                <div class="rounded-circle d-flex justify-content-center align-items-center" style="margin-right:5px">
                    <img src="{{asset('assets/images/user.png')}}" class="task-user-icon" alt="">
                </div>
                <div>
                    Invite 10 friends
                    <span class="task-reward">+20000 $Ghost</span>
                </div>
            </div>
            <div>
                <a href="#" class="gradient go-btn">Go</a>
            </div>
       </div>

       <div class="task-card d-flex justify-content-between align-items-center">
            <div class="task-title d-flex align-items-center gap-2">
                <div class="rounded-circle d-flex justify-content-center align-items-center" style="margin-right:5px">
                    <img src="{{asset('assets/images/user.png')}}" class="task-user-icon" alt="">
                </div>
                <div>
                    Daily Checkin
                    <span class="task-reward">+20000 $Ghost</span>
                </div>
            </div>
            <div>
                <a href="#" class="gradient go-btn">Go</a>
            </div>
       </div>

       <div class="task-card d-flex justify-content-between align-items-center">
            <div class="task-title d-flex align-items-center gap-2">
                <div class="rounded-circle d-flex justify-content-center align-items-center" style="margin-right:5px">
                    <img src="{{asset('assets/images/user.png')}}" class="task-user-icon" alt="">
                </div>
                <div>
                    Invite 10 friends
                    <span class="task-reward">+20000 $Ghost</span>
                </div>
            </div>
            <div>
                <a href="#" class="gradient go-btn">Go</a>
            </div>
       </div>

       <div class="task-card d-flex justify-content-between align-items-center">
            <div class="task-title d-flex align-items-center gap-2">
                <div class="rounded-circle d-flex justify-content-center align-items-center" style="margin-right:5px">
                    <img src="{{asset('assets/images/user.png')}}" class="task-user-icon" alt="">
                </div>
                <div>
                    Daily Checkin
                    <span class="task-reward">+20000 $Ghost</span>
                </div>
            </div>
            <div>
                <a href="#" class="gradient go-btn">Go</a>
            </div>
       </div>
    </div>
@endsection
