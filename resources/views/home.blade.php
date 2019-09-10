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
    <title>Geo-Pengajian | Sistem Informasi Lokasi Pengajian</title>
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
                <div class="card mb-3 card-list">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2  text-center align-self-center">
                                <h3>23<br>OCT</h3>
                            </div>
                            <div class="col-10">
                                <h4 class="card-title mb-0">Kitab Ianatuth thalibibin</h4>
                                <p class="card-text small mb-1 text-muted"> 
                                    <span class="fas fa-calendar-alt"></span> Senin &nbsp&nbsp
                                    <span class="fas fa-clock"></span> 05:00 &nbsp&nbsp
                                    <span class="fas fa-map-marker-alt"></span> Meunasah
                                </p>
                                <p class="card-text">card-title to add card titles to any heading element. The .card-text class is used to remove bottom margins for a p element if it is the last child (or the only one) in card-body.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 card-list">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2  text-center align-self-center">
                                <h3>23<br>OCT</h3>
                            </div>
                            <div class="col-10">
                                <h4 class="card-title mb-0">Kitab Ianatuth thalibibin</h4>
                                <p class="card-text small mb-1 text-muted"> 
                                    <span class="fas fa-calendar-alt"></span> Senin &nbsp&nbsp
                                    <span class="fas fa-clock"></span> 05:00 &nbsp&nbsp
                                    <span class="fas fa-map-marker-alt"></span> Meunasah
                                </p>
                                <p class="card-text">card-title to add card titles to any heading element. The .card-text class is used to remove bottom margins for a p element if it is the last child (or the only one) in card-body.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 card-list">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2  text-center align-self-center">
                                <h3>23<br>OCT</h3>
                            </div>
                            <div class="col-10">
                                <h4 class="card-title mb-0">Kitab Ianatuth thalibibin</h4>
                                <p class="card-text small mb-1 text-muted"> 
                                    <span class="fas fa-calendar-alt"></span> Senin &nbsp&nbsp
                                    <span class="fas fa-clock"></span> 05:00 &nbsp&nbsp
                                    <span class="fas fa-map-marker-alt"></span> Meunasah
                                </p>
                                <p class="card-text">card-title to add card titles to any heading element. The .card-text class is used to remove bottom margins for a p element if it is the last child (or the only one) in card-body.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 card-list">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2  text-center align-self-center">
                                <h3>23<br>OCT</h3>
                            </div>
                            <div class="col-10">
                                <h4 class="card-title mb-0">Kitab Ianatuth thalibibin</h4>
                                <p class="card-text small mb-1 text-muted"> 
                                    <span class="fas fa-calendar-alt"></span> Senin &nbsp&nbsp
                                    <span class="fas fa-clock"></span> 05:00 &nbsp&nbsp
                                    <span class="fas fa-map-marker-alt"></span> Meunasah
                                </p>
                                <p class="card-text">card-title to add card titles to any heading element. The .card-text class is used to remove bottom margins for a p element if it is the last child (or the only one) in card-body.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            

            <div class="col-sm-4 d-none d-sm-block">
                <!-- search -->
                @include("widget/search")
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