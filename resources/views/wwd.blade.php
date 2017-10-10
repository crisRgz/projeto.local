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
                <a href="/">What We Do</a>
            </div>

            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">TELE-ASSISTANCE</h4>
                    <h6 class="card-subtitle mb-2 text-muted">We put the latest tele-assistance technology available to improve your quality of life and safety.</h6>
                    <p class="card-text">
                        We offer a social service, fundamentally preventive, that allows a permanent attention to those people who, by their personal, sanitary or social characteristics, need it.

                    Teleassistance allows the user, through a mobile or fixed device, to contact the service center, which channels the different demands through a team of specialized professionals, mobilizing resources - private or public - if necessary.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">HOME HEALTH HELP</h4>
                    <h6 class="card-subtitle mb-2 text-muted">
                    The Home Help Service provides comprehensive care to individuals and family groups who are in a situation that prevents them from meeting their personal and social needs on their own.</h6>
                    <p class="card-text">With this service we contribute to:
                        <ol>
                            <li> Allow people to stay in their home and usual environment for as long as possible, improving their quality of life. </li>
                            <li> Prevent situations of personal and social deterioration. </li>
                            <li> Promote the coexistence of the person within their community environment and their family. </li>
                            <li> Encourage the acquisition of positive skills or life habits that allow a more autonomous development in daily life. </li>
                        </ol>
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">HEALTH SERVICES</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Our activities also contemplate the organization and integral management of health services, in both primary and specialized care.</h6>
                    <p class="card-text">
                        This is the case of the management of sterilization centers in hospitals, medical and nursing services of primary care or comprehensive care for chronic patients.

                        Sterilization services are a fundamental part of our hospital management and where we observe the most demanding safety and quality protocols.

                        The care of the primary care physician is essential and is complemented by home care, following up on chronic pathologies and situations of acute illness.

                        We try to improve the quality of life of chronic patients by facilitating the control of their
                        disease, through a system of comprehensive monitoring at home.

                        Based on new technologies and based on health education, we prevent exacerbations or start treatment even before the onset of symptoms, in order to reduce visits to emergencies and hospital admissions.
                    </p>
                </div>
            </div>

            <div class="card"><div class="card-block">
                <h4 class="card-title">Residential</h4>
                <h6 class="card-subtitle mb-2 text-muted">
                Services arranged in residences.</h6>
                <p class="card-text">
                    <ol>
                        <li> Alzheimer's and other dementias </li>
                        <li> Convalescence and rehabilitation </li>
                        <li> Family Respite </li>
                        <li> Hospice care </li>
                        <li> Behavioral Disorders </li>
                        <li> Gerontological care </li>
                        <li> Physical and Psychic Disability </li>
                        <li> Mental Health Unit </li>
                        <li> Day care </li>
                        <li> Night Center </li>
                    </ol>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
