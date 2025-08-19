@extends('layout.app')

@push('css')
    <style>
        body {
            background-color: #271f44;
        }
    </style>
@endpush

@section('content')
    <div class="py-4">
       <h1 class="text-white text-center py-2">Daily Tasks</h1>
       <div class="p-3 rounded-2" style="background-color: #383153">
        <div class="d-flex justify-content-between align-items-center">
            <div style="font-size: 20px;font-weight:600;color:rgb(235, 235, 235)">
                <img src="{{asset('assets/images/schedule.png')}}" style="width: 40px;heigh:40px;margin-right:10px" alt="">
                Daily Checkin
            </div>
             <div>
                <a href="#" class="gradient py-1 px-4 rounded-1">Go</a>
             </div>
        </div>
       </div>

            <h1 class="text-white text-center py-3 mb-4">Special Tasks</h1>
             <div class="d-flex justify-content-between align-items-center p-3 mb-2 rounded-2"style="background-color: #383153 " >
               <div style="font-size: 20px;font-weight:600;color:rgb(235, 235, 235)" class=" d-flex align-items-center gap-2">
              <div style="margin-right:5px" class="rounded-circle d-flex justify-content-center align-items-center">
                <img src="{{asset('assets/images/user.png')}}" style="width:50px;height:50px;" alt="" class="rounded-circle">
              </div>
               <div>
                 Daily Checkin
                <span style="color: rgb(231, 231, 231);font-size:14px" class="d-block"> +20000 $Ghost </span>
               </div>
            </div>
             <div>
                <a href="#" class="gradient py-1 px-4 rounded-1">Go</a>
             </div>
        </div>
          <div class="d-flex justify-content-between align-items-center p-3 mb-2 rounded-2"style="background-color: #383153 " >
               <div style="font-size: 20px;font-weight:600;color:rgb(235, 235, 235)" class=" d-flex align-items-center gap-2">
              <div style="margin-right:5px" class="rounded-circle d-flex justify-content-center align-items-center">
                <img src="{{asset('assets/images/user.png')}}" style="width:50px;height:50px;" alt="" class="rounded-circle">
              </div>
               <div>
                 Daily Checkin
                <span style="color: rgb(231, 231, 231);font-size:14px" class="d-block"> +20000 $Ghost </span>
               </div>
            </div>
             <div>
                <a href="#" class="gradient py-1 px-4 rounded-1">Go</a>
             </div>
        </div>
          <div class="d-flex justify-content-between align-items-center p-3 mb-2 rounded-2"style="background-color: #383153 " >
               <div style="font-size: 20px;font-weight:600;color:rgb(235, 235, 235)" class=" d-flex align-items-center gap-2">
              <div style="margin-right:5px" class="rounded-circle d-flex justify-content-center align-items-center">
                <img src="{{asset('assets/images/user.png')}}" style="width:50px;height:50px;" alt="" class="rounded-circle">
              </div>
               <div>
                 Daily Checkin
                <span style="color: rgb(231, 231, 231);font-size:14px" class="d-block"> +20000 $Ghost </span>
               </div>
            </div>
             <div>
                <a href="#" class="gradient py-1 px-4 rounded-1">Go</a>
             </div>
        </div>
          <div class="d-flex justify-content-between align-items-center p-3 mb-2 rounded-2"style="background-color: #383153 " >
               <div style="font-size: 20px;font-weight:600;color:rgb(235, 235, 235)" class=" d-flex align-items-center gap-2">
              <div style="margin-right:5px" class="rounded-circle d-flex justify-content-center align-items-center">
                <img src="{{asset('assets/images/user.png')}}" style="width:50px;height:50px;" alt="" class="rounded-circle">
              </div>
               <div>
                 Daily Checkin
                <span style="color: rgb(231, 231, 231);font-size:14px" class="d-block"> +20000 $Ghost </span>
               </div>
            </div>
             <div>
                <a href="#" class="gradient py-1 px-4 rounded-1">Go</a>
             </div>
        </div>

          <div class="d-flex justify-content-between align-items-center p-3 mb-2 rounded-2"style="background-color: #383153 " >
               <div style="font-size: 20px;font-weight:600;color:rgb(235, 235, 235)" class=" d-flex align-items-center gap-2">
              <div style="margin-right:5px" class="rounded-circle d-flex justify-content-center align-items-center">
                <img src="{{asset('assets/images/user.png')}}" style="width:50px;height:50px;" alt="" class="rounded-circle">
              </div>
               <div>
                 Daily Checkin
                <span style="color: rgb(231, 231, 231);font-size:14px" class="d-block"> +20000 $Ghost </span>
               </div>
            </div>
             <div>
                <a href="#" class="gradient py-1 px-4 rounded-1">Go</a>
             </div>
        </div>
    </div>
@endsection
