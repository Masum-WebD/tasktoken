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
     <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
     @stack('css')
 
</head>

<body>
    <div class="wrap">
        @yield('content')
       
    </div>

    <!-- Bottom Navigation -->
    @include('layout.menu')

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('js')
  
</body>

</html>
