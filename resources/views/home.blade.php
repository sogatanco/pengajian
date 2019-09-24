<!-- call main layout -->
@extends('layout.main')

@section('title', 'Geo-Pengajian | Sistem Informasi Lokasi Pengajian')

@section('content')

    @foreach($jadwals as $jdw)
        <div class="card mb-3 card-list">
            <div class="card-body">
                <div class="row">
                    <div class="col-2  text-center align-self-center">
                        <h3>{{date('d', strtotime($jdw->start))}}<br>{{strtoupper(date('M', strtotime($jdw->start)))}}</h3>
                    </div>
                    <div class="col-10">
                        <h4 class="card-title mb-0">{{$jdw->title}}</h4>
                        <p class="card-text small mb-1 text-muted"> 
                            <span class="fas fa-calendar-alt"></span> {{date('l', strtotime($jdw->start))}} &nbsp&nbsp
                            <span class="fas fa-clock"></span> {{date("H:i",strtotime($jdw->start))}} &nbsp&nbsp
                            <span class="fas fa-map-marker-alt"></span> {{substr($jdw->tempat, 0, 10)}}
                        </p>
                        <p class="card-text">{{substr($jdw->description,0,200)}} . . . .</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{ $jadwals->links() }}
@endsection
@section('widget')

    @include('widget.search')
    @include('widget.past')
    @include('widget.adsense')

@endsection



           