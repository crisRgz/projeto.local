@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
			<div class="panel-heading">TREATMENTS</div>
			    employee->iduser: {{$employee->idUser}} <br>
			    auth()->id(): {{auth()->id()}} <br>
			    {{$empoTreat}}
		        @foreach($employee->treatments as $tratamento)
		        <div class="panel-body">
		            ID: {{$tratamento->id}}</br>
		            USUARIO NAME: {{$tratamento->patient->name}}</br>
		            ADDRESS: {{$tratamento->patient->address}}</br>
		            PHONE: {{$tratamento->patient->phone}}</br>
		        </div>
		        @endforeach
			</div>

		<a href="/home">Back</a>
		</div>
	</div>
</div>
@endsection
