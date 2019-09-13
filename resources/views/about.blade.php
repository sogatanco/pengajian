<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/app.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Martel|Raleway&display=swap" rel="stylesheet">
    <!-- calender -->
    <title>Geo-Pengajian | Lokasi Pengajian</title>
</head>
<body>
    
     <!-- header -->
     @include("template/header")

    <!-- navbar -->
    @include("template/navbar")

    <div class="home">
        <div class="row">

            <div class="col-sm-8 col-12">
                <!-- edit here -->
            </div>
            
            <!-- widget here -->
            <div class="col-sm-4 d-none d-sm-block">
                <!-- past -->
                @include("widget/past")
                <!-- iklan -->
                @include("widget/adsense")
            </div>

        </div>
    </div>

    <!-- footer -->
    @include("template/footer")

</body>
</html>