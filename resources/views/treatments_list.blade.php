@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
			<div class="panel-heading">TREATMENTS</div>
			    employee->id: {{$employee->id}} <br>
			    auth()->id(): {{auth()->id()}} <br>
			   
		        @foreach($employee->treatments()->get() as $treatment)
		        <div class="panel-body">
		            ID: {{$treatment->id}}</br>
					
					{{$patient = $treatment->patient()->get()}}
					USUARIO NAME: {{$patient->name}}</br>
		            ADDRESS: {{$patient->address}}</br>
		            PHONE: {{$patient->phone}}</br>
		        </div>
		        @endforeach
			</div>

		<a href="/home">Back</a>
		</div>
	</div>
</div>
@endsection
