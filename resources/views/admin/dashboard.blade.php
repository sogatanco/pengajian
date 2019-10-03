@extends('layouts.admin')

@section('title', 'ADMIN | Sistem Informasi Pengajian Lhoksukon')

@section('adds')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALisurDb7RVJUKs2Es67Tw2jQL55LoClw"></script>
    <script src="{{url('js/peta.js')}}"></script>
@endsection

@section('content')
    <h4>Dashboard</h4>
    <hr>
        <div class="row">
            <div class="col-md-3">
                <div class="card-counter primary">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="count-numbers" >{{count($all)}}</span>
                    <span class="count-name">Jadwal</span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-counter danger">
                    <i class="fas fa-calendar-check"></i>
                    <span class="count-numbers" id="jmotor">{{count($jadwals)}}</span>
                    <span class="count-name">Aktif</span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-counter success">
                    <i class="fas fa-calendar-times"></i>
                    <span class="count-numbers junapprove">{{count($lewats)}}</span>
                    <span class="count-name">Terlewatkan</span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-counter info">
                    <i class="fas fa-clock"></i>
                    <span class="count-numbers" id="juser">{{count($today)}}</span>
                    <span class="count-name">Hari Ini</span>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <span class="fas fa-map"> Lokasi Pengajian</span>
                    </div>
                    <div class="card-body">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card today">
                    <div class="card-header">
                        <span class="fas fa-clock"> Today</span>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            @foreach($today as $td)
                                <a href="{{$td->id}}" class=" mt-2 list-group-item d-flex justify-content-between align-items-center list-group-item-action">{{$td->title}} <span class="badge badge-danger badge-pill">{{date("H : i",strtotime($td->start))}} </span></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
