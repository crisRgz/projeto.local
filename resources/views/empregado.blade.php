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
			<!---->
				<?php 
					echo Auth::User()->id;
					echo $empregado->id;
					print_r($empoEmpa);
					//echo $empoEmpa[0]->id;
				?>
			
			<!-- poñer listado máis bonito e que solo se lle mostre ao propio empregado -->
			@if(isset(Auth::User()->id))
				@if ($empregado->idUser == Auth::User()->id)
				<ul>
					<li>Employee ID: {{ $empregado->id }} </li>
					<li>User ID: {{ $empregado->idUser }} </li>
					<li>NIF: {{ $empregado->NIF }} </li>
					<li>NAME: {{ $empregado->nome }} {{ $empregado->apelido1 }} {{ $empregado->apelido2 }} </li>
					<li>ADDRESS: {{ $empregado->direccion }} </li>
					<li>PHONE NUMBER: {{ $empregado->telefono }} </li>
					<li>COMPANY: 
						@if($empoEmpa[0]->id)
							{{$empoEmpa[0]->nome}}
						@endif
						<?php
			
							$select= "<form method='post' action='/empregadoF' >";
							$select.= "<select>";

							for($n=0;$n<=count($empresas);$n++)
								{	
									if(isset($empresas[$n]))
									{
										/*	echo $empresas[$n]->nome;*/
										$select.= "<option value='";
										$select.= $empresas[$n]->id;
										$select.="'>";
										$select.=$empresas[$n]->nome;
										$select.="</option>";
									}
								}
							
							$select.= "</select>";
							$select.= "<input type='submit' value='Update'>";
							$select.= "</form>";
							echo $select;
						?>
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