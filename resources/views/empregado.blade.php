@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">EMPLOYEE PROFILE</div>

				<div class="panel-body">


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
					<li><fieldset>
						COMPANY:
						<!--
						@if($empoEmpa)
						{{$empoEmpa->nome}} {{-- use only the `nome` property here --}}
						@endif
						-->

						<form method="POST" action="/empregadoF/{{ $empregado->id }}">

							{{ csrf_field() }}

							<select name="empresas_id">
								<option value="">Select a company</option>
								@foreach ($empresas as $empresa)
								    <option value="{{ $empresa->id }}" {{ $empoEmpa->id == $empresa->id ? 'selected' : '' }}>
								
									{{ $empresa->nome }}
								</option>
								@endforeach
							</select>

							<input type='submit' value='Update'>
						</form>
						 @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
					</fieldset></li>
				</ul>
				<!---->
				@endif
				@endif
				<a href="/home">Back</a>
			</div></div>
		</div>
	</div>
</div>
@endsection
