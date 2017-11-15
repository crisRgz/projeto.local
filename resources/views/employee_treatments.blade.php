@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
					<div class="panel-heading">TREATMENTS</div>
					<div class="panel-body">

					@foreach ($treatments as $treatment)
						
						<p>
							Patient name: {{ $treatment->idEmp }} 
							<br>
							idUser: {{ $treatment->idUser }}  - nif: {{ $treatment->idPat }} 
						</p>
					
					@endforeach

					</div>
					</div>
					<!---->

		<a href="/home">Back</a>
	</div>

</div>
@endsection
