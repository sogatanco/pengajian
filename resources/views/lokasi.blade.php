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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALisurDb7RVJUKs2Es67Tw2jQL55LoClw"></script>
    <script src="js/peta.js"></script>
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
                <div id="map">
                </div>
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

    <!-- event modal -->
    <div id="modal-view-event" class="modal modal-top fade calendar-modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<h4 class="modal-title"><span class="event-icon"></span><span class="event-title"></span></h4>
					<div class="event-body"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
    </div>
</body>
</html>