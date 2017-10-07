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
            <h1 class="title m-b-md">
                <a href="/">What We Do</a>
            </h1>

            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">TELEASISTENCIA</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Ponemos la última tecnología de teleasistencia a disposición de las personas para mejorar su calidad de vida y seguridad.</h6>
                    <p class="card-text">Ofrecemos un servicio de carácter social, fundamentalmente preventivo, que permite una atención permanente a aquellas personas que por sus características personales, sanitarias o sociales lo necesitan.

                    La teleasistencia permite mediante un dispositivo móvil o fijo, que la persona usuaria se ponga en contacto con la central de atención, que canaliza las diferentes demandas a través de un equipo de profesionales especializados, movilizando recursos -privados o públicos- en caso necesario.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">AYUDA A DOMICILIO</h4>
                    <h6 class="card-subtitle mb-2 text-muted">El Servicio de Ayuda a Domicilio ofrece una atención integral a las personas y grupos familiares que se encuentran en una situación que les impide satisfacer sus necesidades personales y sociales por sus propios medios.</h6>
                    <p class="card-text">Con este servicio contribuimos a:
                        <ol>
                            <li>Permitir que las personas puedan permanecer en su domicilio y entorno habitual el mayor tiempo posible, mejorando su calidad de vida.</li>
                            <li> Prevenir situaciones de deterioro personal y social.</li>
                            <li>Promover la convivencia de la persona dentro de su entorno comunitario y su familia.</li>
                            <li>Favorecer la adquisición de habilidades o hábitos de vida positivos, que permitan un desenvolvimiento más autónomo en la vida diaria.</li>
                        </ol>
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">SERVICIOS SANITARIOS</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Nuestras actividades también contemplan la organización y gestión integral de servicios sanitarios, tanto en atención primaria como en especializada.</h6>
                    <p class="card-text">
                        Éste es el caso de la gestión de centrales de esterilización en hospitales, los servicios médicos y de enfermería de atención primaria o la atención integral a enfermos crónicos.

                        Los servicios de esterilización son una parte fundamental de nuestra gestión hospitalaria y donde observamos los protocolos de seguridad y calidad más exigentes.

                        La atención del médico de cabecera es esencial y se complementa con la atención domiciliaria, dando seguimiento a patologías crónicas y a situaciones de enfermedad aguda.

                        Tratamos de mejorar la calidad de vida de los pacientes crónicos facilitándoles el control de su
                        enfermedad, mediante un sistema de seguimiento integral en el domicilio.

                        Basándonos en nuevas tecnologías y teniendo como pilar la educación para la salud, prevenimos las reagudizaciones o iniciamos su tratamiento incluso antes de la aparición de los síntomas, con el objetivo de disminuir visitas a urgencias e ingresos hospitalarios.
                    </p>
                </div>
            </div>

            <div class="card"><div class="card-block">
                <h4 class="card-title">RESIDENCIALES</h4>
                <h6 class="card-subtitle mb-2 text-muted">Servicios dispuestos en residencias.</h6>
                <p class="card-text">
                    <ol>
                        <li>Unidad de Alzheimer y otras demencias</li>
                        <li>Convalecencia y rehabilitación</li>
                        <li>Respiro familiar</li>
                        <li>Cuidados paliativos</li>
                        <li>Trastornos de Conducta</li>
                        <li>Atención gerontológica</li>
                        <li>Discapacidad física y psíquica</li>
                        <li>Unidad Salud Mental</li>
                        <li>Atención diurna</li>
                        <li>Centro de noche</li>
                    </ol>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
