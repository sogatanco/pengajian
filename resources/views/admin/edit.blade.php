@extends('layouts.admin')

@section('adds')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALisurDb7RVJUKs2Es67Tw2jQL55LoClw"></script>


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/djibe/bootstrap-material-datetimepicker@6659d24c7d2a9c782dc2058dcf4267603934c863/css/bootstrap-material-datetimepicker-bs4.min.css">
<script src="https://cdn.jsdelivr.net/gh/moment/moment@develop/min/moment-with-locales.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/djibe/bootstrap-material-datetimepicker@6659d24c7d2a9c782dc2058dcf4267603934c863/css/bootstrap-material-datetimepicker-bs4.min.css">
<script src="https://cdn.jsdelivr.net/gh/djibe/bootstrap-material-datetimepicker@83a10c38ee94dd27fd946ea137af6667c65a738f/js/bootstrap-material-datetimepicker-bs4.min.js"></script>

@endsection

@section('title', 'ADMIN | Tambah Data Jadwal Pengajian')

@section('content')

        <h4>Tambah Data Jadwal Pengajian</h4>
        <hr>
        <form method="post" action="{{url($jadwal->id)}}  ">
        @csrf
        @method('patch')
            <div class="form-group">
                <label for="pengajian">Pengajian :</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="Pengajian" placeholder="Nama pengajian" name="title" value="{{$jadwal->title}}">
                @error('title')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bersama">Bersama :</label>
                <input type="text" class="form-control @error('oleh') is-invalid @enderror" id="bersama" placeholder="Nama Tgk" name="oleh" value="{{$jadwal->oleh}}">
                @error('oleh')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="des">Description :</label>
                <textarea class="form-control @error('description') is-invalid @enderror" rows="5" placeholder="Deskripsi di sini" name="description" id="des">{{$jadwal->description}}</textarea>
                @error('description')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bersama">Tempat :</label>
                <input type="text" class="form-control @error('tempat') is-invalid @enderror" id="tempat" placeholder="Tempat" name="tempat" value="{{$jadwal->tempat}}">
                @error('tempat')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bersama">Lokasi :</label>
                    <div class="row">
                        <div class="col-5">
                            <input type="text" class="form-control @error('lat') is-invalid @enderror" id="lat" name="lat" placeholder="Latitude" value="{{$jadwal->lat}}"  readonly>
                            @error('lat')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control @error('long') is-invalid @enderror" id="long" name="long" placeholder="Longitude" value="{{$jadwal->long}}" readonly>
                            @error('long')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-2">
                            <button type="button" id="open" data-toggle="modal" data-target="#lokasi" data-lat="" data-long="" class="btn btn-dark"><span class="fas fa-search-location"></span></button>
                        </div>
                    </div>
            </div>
            <div class="form-group">
                <label for="mulai">Mulai :</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="material-icons">event</i></span>
                    </div>
                    <input class="form-control @error('start') is-invalid @enderror" id="mulai" type="text" name="start" placeholder="Choose time" value="{{$jadwal->start}}">
                    @error('start')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="end">Selesai :</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="material-icons">event</i></span>
                    </div>
                    <input class="form-control @error('end') is-invalid @enderror" id="end" type="text" name="end"  placeholder="Choose time" value="{{$jadwal->end}}">
                    @error('end')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-dark" type="submit">Update Data</button>
            </div>
        </form>



    <div class="modal fade" id="lokasi">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
            <!-- show map here -->
                <div id="map"></div>
                <small class="float-right">*Drag marker to get LatLong</small>
            </div>

        </div>
        </div>
    </div>

@endsection