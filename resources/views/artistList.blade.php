<div>
    <h1>Artist List</h1>
    <br>
    @foreach($artistListV as $artist)
        ID: {{$artist->id}} - Name: {{$artist->name}} - email: {{$artist->email}} <br>
    @endforeach
</div>
