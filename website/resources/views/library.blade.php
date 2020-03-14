<head>
    <style>
        * {
            font-family: sans-serif;
        }
        .button {
            background-color: deepskyblue;
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

<div class="topbar">
    <h3 style="float: left;">Music Catalog Indexer Premium</h3>
    <div style="display: inline; float: right; width: 250px;">
        <h4 style="float: left;">Hallo <?php echo "CurrentUser"?></h4>
        <h4 style="float: right;" onclick="window.location='{{ url("/") }}'">Log Uit</h4>
    </div>
</div>
<div style="clear: both;"></div>
<hr>

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

        </div>
    </div>
    <div class="numbers alignright">
        <div style="height: 35px;"></div>
        <div class="box" style="padding: 0; margin: 0;border: 1px solid black;"   >

        </div>
    </div>
</div>
