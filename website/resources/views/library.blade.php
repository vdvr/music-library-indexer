@extends('layout/app')
<head>
    <style>
        .album_list_item:hover {
            border: 1px solid blue;
            color: white;
            background-color: blue;
        }
        .album_list_item {
            border: 1px solid blue;
            color: blue;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<script> var albumslist = []; </script>
@section('content')
    <div>
        <p class="alignleft">Persoonlijke Bibliotheek</p>
        <p class="alignright button" style="text-align: center;">Album Toevoegen</p>
    </div>
    <div style="clear: both;"></div>

    <div class="boxes">

        <div class="albums alignleft">
            <div class="filters" style="height: 35px;">
                Sorteren:
                <select id="sort">
                    <option value="alphup">Oplopend Alfabetisch</option>
                    <option value="alphdown">Aflopend Alfabetisch</option>
                </select>
                Filteren:
                <input class="textfield" type="text" id="filter" name="filter" value=""><br>
            </div>
            <div class="box" style="padding: 0; margin: 0;border: 1px solid black;">
                @foreach ($albums as $album)
                    <div id="album{{$album->id}}" class="album_list_item">
                    <script>albumslist.push("{{$album->id}}");</script>
                    {{ $album->title }}
                    </div>
                @endforeach
            </div>
        </div>
        <div class="numbers alignright">
            <div style="height: 35px;"></div>
            <div class="box" id="songsView" style="padding: 0; margin: 0;border: 1px solid black;"   >
                </div>
            </div>
        </div>
    </div>
<script>
// Sorteren
var e = document.getElementById("sort");
var order = e.options[e.selectedIndex].value;

// Nummers inladen
var songs = @json($songs);
var songslist = "";
albumslist.forEach(x => $("#album"+x).click(function() {
    songs[x].forEach(songs => songslist += "<div class='album_list_item'>" + songs['name'] + "</div>");
    $("#songsView").html(songslist);
    console.log(songs);
    songslist = "";
}));

</script>
@endsection
