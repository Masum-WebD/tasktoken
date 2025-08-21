@extends('layout.app')

@push('css')
<style>
body {
    background-color: #271f44;
}

.task-section-title {
    font-size: 35px;
    font-weight: 700;
    color: #fff;
    text-align: center;
    margin-bottom: 16px;
}

/* Special Task Card */
.task-card {
    background-color: #383153;
    border-radius: 12px;
    padding: 16px 20px;
    margin-top: 20px;
    color: #fff;
    transition: 0.3s ease;
}
.task-card:hover {
    background-color: #48406a;
}

.task-card .task-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
}

.task-card .task-user-icon {
    width: 50px;
    height: 50px;
}

.task-card .task-title {
    font-size: 18px;
    font-weight: 600;
    flex: 1;
}



.task-card .description {
    font-size: 15px;
    color: #ccc;
    margin-bottom: 12px;
}

.task-card .btn-complete {
    background-color: #28a745;
    border: none;
    color: #fff;
    padding: 8px 16px;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    margin-right: 10px;
    transition: 0.25s ease;
}

.task-card .btn-complete:hover {
    background-color: #218838;
}

.task-card .close-btn {
    background-color: #6c757d;
    border: none;
    color: #fff;
    padding: 8px 16px;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.25s ease;

}

.task-card .close-btn:hover {
    background-color: #5a6268;
}
   .go-btn {
            padding: 4px 16px;
            border-radius: 4px;
        }
</style>
@endpush

@section('content')
<div class="py-4">
    <h1 class="task-section-title">Special Task</h1>

    <div class="task-card">
        <!-- Header -->
        <div class="task-header">
            <img src="{{asset('assets/images/youtube.png')}}" class="task-user-icon" alt="Task Icon">
            <div class="task-title">Mi Chat Account</div>
             <a href="#" class="gradient go-btn">Go</a>
        </div>

        <!-- Description -->
        <div class="description">
            <p>First Name: Erline</p>
            <p>Last Name: Smith</p>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn-complete">Complete</button>
        </div>
        <!-- Action Buttons -->
      <!-- Action Button on the Right with Top Border -->
<div class=" mt-4 d-flex justify-content-end pt-3" style=" border-top: 1px dashed rgb(212, 212, 212)">
    <button class="close-btn">Close</button>
</div>

    </div>
</div>
@endsection
