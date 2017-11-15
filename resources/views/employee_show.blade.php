@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
					<div class="panel-heading">EMPLOYEE PROFILE</div>
					<div class="panel-body">
					<ul>
						<li>Employee ID: {{ $employee->id }} </li>
						<li>User ID: {{ $employee->idUser }} </li>
						<li>NIF: {{ $employee->NIF }} </li>
						<li>NAME: {{ $employee->name }} {{ $employee->lastName1 }} {{ $employee->lastName2 }} </li>
						<li>ADDRESS: {{ $employee->address }} </li>
						<li>PHONE NUMBER: {{ $employee->phone }} </li>
					</ul>
					</div>
					</div>
					<!---->

		<a href="/home">Back</a>
	</div>

</div>
@endsection
