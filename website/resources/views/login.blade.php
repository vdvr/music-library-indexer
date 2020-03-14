<head>
    <style>
        .center-screen {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100vh;
        }
        .button {
            background-color: deepskyblue;
            padding: 5px 26px;
            margin: 0px 20px;
            border: none;
            border-radius: 100px;
            width: 225px;
        }
        .textfield {
            text-align: center;
            margin: 6px 0px;
            width: 500px;
        }
    </style>
</head>


<div class="center-screen">
    <form action="#">
        <input class="textfield" type="text" id="email" name="email" value="E-Mail"><br>
        <input class="textfield" type="text" id="password" name="password" value="Wachtwoord"><br>
        <input class="button" type="submit" value="Login">
        <input class="button" type="submit" value="Registreer"
               onclick="window.location='{{ url("/register") }}'">
    </form>
</div>
