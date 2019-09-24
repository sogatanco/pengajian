@extends('layout.main')

@section('adds')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALisurDb7RVJUKs2Es67Tw2jQL55LoClw"></script>
    <script src="{{url('js/detailpeta.js')}}"></script>
@endsection


@section('title','Geo-Pengajian | Lokasi Pengajian')

@section('content')
    <div id="detailmap"></div>
@endsection

@section('widget')
    @include("widget/adsense")
@endsection