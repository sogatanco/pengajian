@extends('layout.main')

@section('adds')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALisurDb7RVJUKs2Es67Tw2jQL55LoClw"></script>
    <script src="{{url('js/detailpeta.js')}}"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d8aba5a1d7aaedc"></script>


@endsection


@section('title','Geo-Pengajian | Lokasi Pengajian')

@section('content')
    <div id="detailmap" class="mb-4"></div>
    <!-- get lat long from database and hidden it to call from js -->
    <div class="d-none">
        <span id="lat">{{$jadwal->lat}}</span>
        <span id="long">{{$jadwal->long}}</span>
    </div>


    <h4 class="mb-0">{{strtoupper($jadwal->title)}} Bersama {{strtoupper($jadwal->oleh)}}</h4>
    <p class="text-muted">
        <span class="fas fa-calendar-alt"></span> {{date('l', strtotime($jadwal->start))}}, {{date('d M Y', strtotime($jadwal->start))}} &nbsp&nbsp
        <span class="fas fa-clock"></span> {{date("H:i",strtotime($jadwal->start))}} - {{date("H:i",strtotime($jadwal->end))}} &nbsp&nbsp
        <span class="fas fa-map-marker-alt"></span> {{$jadwal->tempat}}
    </p>

    <p class="text-justify">{{$jadwal->description}}</p>

    <div class="addthis_inline_share_toolbox mt-4 mb-4"></div>
@endsection

@section('widget')
    @include("widget/adsense")
@endsection