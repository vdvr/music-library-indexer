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
</head>
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
                    <div class="album_list_item">{{ $album->title }}</div>
                @endforeach
            </div>
        </div>
        <div class="numbers alignright">
            <div style="height: 35px;"></div>
            <div class="box" style="padding: 0; margin: 0;border: 1px solid black;"   >
                @foreach ($albums as $album)
                    <div class="album_list_item">{{ $album->title }}</div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
