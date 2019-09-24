<div class="mb-4">
    <h4>Terlewatkan</h4>
    <hr class="garis float-left"><br>
    @foreach($lewats as $lwt)
        <p >{{$lwt->title}}</p>
        <hr class="mb-1">
    @endforeach
</div>


