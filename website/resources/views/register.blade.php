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
            background-color: #0066ff;
            padding: 5px 26px;
            margin: 0px 20px;
            border: none;
            border-radius: 100px;
            width: 250px;
        }
        .textfield {
            text-align: center;
            margin: 6px 0px;
            width: 350px;
        }
        .green-textfield {
            /*background-color: limegreen;*/
            text-align: center;
            margin: 6px 0px;
            width: 350px;
        }
    </style>
</head>


<div class="center-screen">
    <form action="#">
        <input class="textfield" type="text" id="email" name="email" placeholder="E-Mail">
        <input class="textfield" type="text" id="password" name="password" placeholder="Wachtwoord"><br>

        <input class="textfield" type="text" id="email_verif" name="email_verif" placeholder="E-Mail Verificatie">
        <input class="textfield" type="text" id="password_verif" name="password_verif" placeholder="Wachtwoord Verificatie"><br>

        <input class="textfield" type="text" id="username" name="username" placeholder="Gebruikersnaam">
        <input class="green-textfield" type="text" id="token" name="token" placeholder="Token"><br>
        <input class="button" type="submit" value="Registreer">
    </form>
</div>
