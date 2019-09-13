@extends('layout.main')

@section('adds')
    <script src="{{url('js/jadwal.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.css">
    <link rel="stylesheet" href="{{url('css/jadwal.css')}}">
@endsection

@section('title', 'Geo-Pengajian | Jadwal Pengajian')   

@section('content')
    
    <div class="jadwal">
        <div class="card">
            <div class="card-body p-0">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
    

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
@endsection

@section('widget')
    @include("widget/past")
    @include("widget/adsense")
@endsection