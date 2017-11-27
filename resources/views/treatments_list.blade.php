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
		        <a href="/patient/{{$treatment->idPat}}">
		        <div class="panel-body">
                    ID: {{$treatment->id}}</br>
                    
                    PATIENT NAME: {{$treatment->patient->name}}</br>
                    SERVICE: 
                    @if ($treatment->service)
					    {{ $treatment->service->name }}
					@endif </br>
                    START: {{$treatment->timeStart}}</br>
                    END: {{$treatment->timeEnd}}</br>
                    MONTHLY: {{$treatment->monthlyHours}}</br>
                    DATE START: {{$treatment->dateStart}}</br>
                    DATE END: {{$treatment->dateEnd}}</br>
                    DONE: {{$treatment->done}}</br>
                    REASON: {{$treatment->reason}}</br>
		        </div>
		   		</a>
		        @endforeach
			</div>

		<a href="/home">Back</a>
		</div>
	</div>
</div>
@endsection
