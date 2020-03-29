<!DOCTYPE html>
<html lang="nl">
    <head>
        <style>
            * {
                font-family: sans-serif;
            }
            .button {
                background-color: #0066ff;
                padding: 5px 26px;
                border: none;
                border-radius: 100px;
                width: 160px;
            }
            .alignleft {
                float: left;
            }
            .alignright {
                float: right;
            }
            .box {
                width: 30vw;
                height: 70vh;
            }
            .boxes {
                justify-content: center;
                align-items: center;
                text-align: center;
                width: 61vw;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <div class="topbar">
            <h3 style="float: left;"><a href="/library" style="color: black; text-decoration: none;">Music Catalog Indexer Premium</a></h3>
            <div style="display: inline; float: right; width: 250px;">
                <h4 style="float: left;">Hallo <i>{{ $user }}</i></h4>
                <h4 style="float: right;" onclick="window.location='{{ url("/logout") }}'">Log Uit</h4>
            </div>
        </div>
        <div style="clear: both;"></div>
        <hr>

        @yield('content')
    </body>
</html>
