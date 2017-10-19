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
	li {
		text-align: left;
		list-style-type: none;
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
</style>
</head>
<body>
	<div class="flex-center position-ref full-height">
		@if (Route::has('login'))
		<div class="top-right links">
			@auth
			<a href="{{ url('/home') }}" alt="Use home to go back">Home</a>
			@else
			<a href="{{ route('login') }}">Login</a>
			<a href="{{ route('register') }}">Register</a>
			@endauth
		</div>
		@endif

		<div class="content">
			<div class="title m-b-md">
				EMPLOYEE PROFILE
			</div>
			<!-- poñer listado máis bonito e que solo se lle mostre ao propio empregado -->
			@if(auth()->check())
 				@if ($empregado->idUser == auth()->id())
				<ul>
					<li>Employee ID: {{ $empregado->id }} </li>
					<li>User ID: {{ $empregado->idUser }} </li>
					<li>NIF: {{ $empregado->NIF }} </li>
					<li>NAME: {{ $empregado->nome }} {{ $empregado->apelido1 }} {{ $empregado->apelido2 }} </li>
					<li>ADDRESS: {{ $empregado->direccion }} </li>
					<li>PHONE NUMBER: {{ $empregado->telefono }} </li>
					<li>COMPANY:
						@if($empoEmpa)
							{{$empoEmpa}}
						@endif
						<form method="POST" action="/empregadoF/{{ $empregado->id }}">

							{{ csrf_field() }}

							<label>idEmployee:</label>{{ $empregado->id }}

							<select name="empresas_id">
								@foreach ($empresas as $empresa)
									<option value="{{ $empresa->id }}">
										{{ $empresa->nome }}
									</option>
								@endforeach
							</select>

							<input type='submit' value='Update'>
						</form>

					</li>
				</ul>
				<!---->
				@endif
			@endif
			<a href="/home">Back</a>
		</div>
	</div>
</body>
</html>