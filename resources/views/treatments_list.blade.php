@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
			<div class="panel-heading">TREATMENTS</div>
			    employee->iduser: {{$employee->idUser}} <br>
			    auth()->id(): {{auth()->id()}} <br>
		        @foreach($employee->tratamentos as $tratamento)
		        <div class="panel-body">
		            ID: {{$tratamento->id}}</br>
		            USUARIO NAME: {{$tratamento->usuario->nome}}</br>
		            ADDRESS: {{$tratamento->usuario->address}}</br>
		            PHONE: {{$tratamento->usuario->phone}}</br>
		        </div>
		        @endforeach
			</div>

		<a href="/home">Back</a>
		</div>
	</div>
</div>
@endsection
