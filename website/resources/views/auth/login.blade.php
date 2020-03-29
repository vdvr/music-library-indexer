<head>
    <style>
        .center-screen {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 90vh;
        }
        .button {
            background-color: #0066ff;
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
        .column {
          float: left;
          width: 50%;
        }

        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
    </style>
</head>

<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="center-screen">
        <input class="textfield" type="text" id="email" name="email" placeholder="E-Mail" required autocomplete="email" autofocus><br>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input id="password" type="password" class="textfield form-control @error('password') is-invalid @enderror" name="password" placeholder="Wachtwoord" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="row">
          <div class="column">
            <button type="submit" class="button btn btn-primary">
                {{ __('Login') }}
            </button>
            </div>
          <div class="column">
            <button type="submit" class="button btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
        </div>
    </div>
</form>
