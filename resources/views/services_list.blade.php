@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
			<div class="panel-heading">SERVICES</div>
			    patient->id: {{$id}} <br>
			    auth()->id(): {{auth()->id()}} <br>

		        @foreach($services as $service)
		        <a href="/service/{{$service->id}}/{{$id}}">
		        <div class="panel-body">
                    ID: {{$service->id}}</br>
                    
                    SERVICE NAME: {{$service->name}}</br>
                    
		        </div>
		   		</a>
		        @endforeach
			</div>

		<a href="/home">Back</a>
		</div>
	</div>
</div>
@endsection
