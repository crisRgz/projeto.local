<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SocioSanitario</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-top: 10%;
        margin-bottom: 30px;
    }
    a{
        text-decoration: none !important;
        color: #636b6f;
    }
</style>
</head>
<body>
    <div class="jumbotron flex-center position-ref">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                <a href="/">What You Can Do</a>
            </div>

            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">TELEASISTANCE</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Call us.</h6>
                    <p class="card-text">Whenever help is needed.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">HOME HEALTH HELP</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Whithout leaving home.</h6>
                    <p class="card-text">
                        We go to your house, we evaluate the situation and we will put at your disposal the necessary help.
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">HEALTH SERVICES</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Private medicine.</h6>
                    <p class="card-text">
                        You will always be covered. No long waits. The best specialists.
                    </p>
                </div>
            </div>

            <div class="card"><div class="card-block">
                <h4 class="card-title">RESIDENTIAL</h4>
                <h6 class="card-subtitle mb-2 text-muted">Atencion en mnuestras residencias privadas.</h6>
                <p class="card-text">
                    While you are in one of our complete residences, you will have access to all services. Therapies, consultations, events. You will feel at home, with the best care.
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
