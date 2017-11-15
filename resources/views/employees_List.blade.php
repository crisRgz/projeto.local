@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">EMPLOYEE PROFILE</div>
				<div class="panel-body">
					@foreach ($employees as $employee)
					<a href="/empregado/{{ $employee->idEmp }}">
						<p>
							Employee id: {{ $employee->idEmp }} 
							<br>
							idUser: {{ $employee->idUser }}  - nif: {{ $employee->NIF }} - nome: {{ $employee->name }} {{ $employee->lastName1 }} {{ $employee->lastName2 }}
						</p>
					</a>
					@endforeach
				</div>
			</div>
			<!---->

			<a href="/home">Back</a>
		</div>

	</div>
	@endsection
