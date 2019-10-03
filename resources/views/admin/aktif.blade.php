@extends('layouts.admin')

@section('title', 'ADMIN | Jadwal Aktif')

@section('content')

        <h4>Jadwal Aktif</h4>
        <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pengajian</th>
                            <th>Oleh</th>
                            <th>Tempat</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jadwals as $index => $j)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$j->title}}</td>
                            <td>{{$j->oleh}}</td>
                            <td>{{$j->tempat}}</td>
                            <td>{{$j->start}}</td>
                            <td>{{$j->end}}</td>
                            <td>
                                <a href="{{url($j->id)}}/edit" class="badge badge-warning">Update</a> 
                                <form method="post" action="{{url($j->id)}}" class="d-inline">
                                @method('delete')
                                @csrf
                                    <button type="submit" class="badge badge-danger">Delete</button>
                                </form> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$jadwals->links()}}
        </div>

@endsection