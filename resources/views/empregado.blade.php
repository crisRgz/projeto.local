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

							@if($empoEmpa)
							{{$empoEmpa->nome}} {{-- use only the `nome` property here --}}
							@endif


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
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">EDIT</div>
				<div class="panel-body">

					<form method="POST" action="/empregado/{{ $empregado->id }}">

						{{ csrf_field() }}
						<div class="form-group">
							</br>
							<label for="EmpoId">Employee ID: </label></br>
							<input type="text" name="EmpoId" value="{{ $empregado->id }}" disabled>
							</br>
							<label for="UserID">User ID:</label></br>
							<input type="text" name="UserID" class="" id="userid" value="{{ $empregado->idUser }}" disabled=""> 
						</div> 
						<div class="form-group">
							</br>
							<label for="nif">NIF:</label></br>
							<input type="text" name="nif" class="" id="nif" value="{{ $empregado->NIF }}">
							
						</div>
						<div class="form-group">
							</br>
							<label for="nome">NAME: </label></br>
							<input type="text" name="nome" class="" id="nome" value="{{ $empregado->nome }}">
							</br>
							<label for="apelido1">LAST NAME 1:</label></br>
							<input type="text" name="apelido1" class="" id="apelido1" value="{{ $empregado->apelido1 }}">  
							</br>
							<label for="apelido2">LAST NAME 2:</label></br>
							<input type="text" name="apelido2" class="" id="apelido2" value="{{ $empregado->apelido2 }} "> 
						</div>
						<div class="form-group">
							</br>
							<label for="direccion">ADDRESS:</label></br>
							<input type="text" name="direccion" class="" id="direccion" value="{{ $empregado->direccion }}">  
						</div>
						<div class="form-group">
							</br>
							<label for="telefono">PHONE NUMBER:</label></br>
							<input type="text" name="telefono" class="" id="telefono" value="{{ $empregado->telefono }} "> 
						</div>
						<div class="form-group">
							</br>
							<label for="empresas_id">COMPANY: </label></br>
							<select name="empresas_id">
								<option value="">Select a company</option>
								@foreach ($empresas as $empresa)
								<option value="{{ $empresa->id }}" {{ $empoEmpa->id == $empresa->id ? 'selected' : '' }}>

									{{ $empresa->nome }}
								</option>
								@endforeach
							</select>
						</div>
						<input type='submit' value='Update'>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
