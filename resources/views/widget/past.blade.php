<div class="mb-4">
    <h4>Terlewatkan</h4>
    <hr class="garis float-left"><br>
    @foreach($lewats as $lwt)
    <a href="{{$lwt->id}}" class="custom-card">
        <p >{{$lwt->title}} bersama {{$lwt->oleh}}</p>
        <hr class="mb-1">
    </a>
    @endforeach
</div>


