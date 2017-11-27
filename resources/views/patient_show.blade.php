@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
					<div class="panel-heading">PATIENT PROFILE</div>
					<div class="panel-body">
					<ul>
						<li>PATIENT ID: {{ $patient->id }} </li>
						<li>User ID: {{ $patient->idUser }} </li>
						<li>NIF: {{ $patient->NIF }} </li>
						<li>NAME: {{ $patient->name }} {{ $patient->lastName1 }} {{ $patient->lastName2 }} </li>
						<li>ADDRESS: {{ $patient->address }} </li>
						<li>PHONE NUMBER: {{ $patient->phone }} </li>
						<li>CONTACT NAME: {{ $patient->contactName }} </li>
						<li>CONTACT PHONE: {{ $patient->contactPhone }} </li>
						<li>LATITUDE: {{ $patient->lat }} </li>
						<li>LONGITUDE: {{ $patient->long }} </li>
					</ul>
					</div>
					</div>
					<!---->

		<a href="/home">Back</a>
	</div>

</div>
@endsection
