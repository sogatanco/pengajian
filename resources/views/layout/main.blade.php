<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <script src="{{url('js/app.js')}}"></script>
    
    @yield('adds')
    <link href="https://fonts.googleapis.com/css?family=Martel|Raleway&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <!-- header -->
    @include("template/header")

    <!-- navbar -->
    @include("template/navbar")

    <!-- isi home -->
    <div class="home">
        <div class="row">

            <div class="col-sm-8 col-12">
                @yield('content')
            </div>

            <div class="col-sm-4 d-none d-sm-block">
               @yield('widget')
            </div>

        </div>
    </div>

    <!-- footer -->
    @include("template/footer")
</body>
</html>