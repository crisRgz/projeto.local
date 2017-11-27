@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
			<div class="panel-heading">PATIENTS</div>
			    employee->id: {{$employee->id}} <br>
			    auth()->id(): {{auth()->id()}} <br>

		        @foreach($employee->patients()->get() as $patient)
		        <a href="/patient/{{$patient->id}}">
		        <div class="panel-body">
                    ID: {{$patient->id}}</br>
                    
                    PATIENT NAME: {{$patient->name}}</br>
                    
		        </div>
		   		</a>
		        @endforeach
			</div>

		<a href="/home">Back</a>
		</div>
	</div>
</div>
@endsection
