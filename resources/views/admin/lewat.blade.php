@extends('layouts.admin')

@section('title', 'ADMIN | Jadwal Terlewatkan')

@section('content')
        <h4>Jadwal Terlewatkan</h4>
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
                        @foreach($lewats as $index => $j)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$j->title}}</td>
                            <td>{{$j->oleh}}</td>
                            <td>{{$j->tempat}}</td>
                            <td>{{$j->start}}</td>
                            <td>{{$j->end}}</td>
                            <td>
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
                {{$lewats->links()}}
        </div>
@endsection