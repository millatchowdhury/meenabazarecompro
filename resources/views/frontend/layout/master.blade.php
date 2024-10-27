<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
</head>
<body>
    
    @include('frontend.partials.nav')

      <div class="container-fluid">
        <div class="row">
            @include('frontend.partials.sidebar')
            @yield('content')
        </div>
      </div>


      @include('frontend.partials.footer')





    <script src="{{ asset('frontend/assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>