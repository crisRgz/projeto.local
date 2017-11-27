@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
					<div class="panel-heading">SERVICE</div>
					<div class="panel-body">
					 <form class="form-horizontal" method="POST" action="">
                            {{ csrf_field() }}
                        <label for="idPat">PATIENT ID: </label>
						<input id="idPat" type="text" class="form-control" name="idPat" value="{{ $idPat }}" required disabled>
						<label for="idSer">SERVICE ID: </label>
						<input id="idSer" type="text" class="form-control" name="idSer" value="{{ $service->id }}" required disabled>
						<label for="name">NAME: </label>
						<input id="name" type="text" class="form-control" name="name" value="{{ $service->name }}" required disabled>
						<label for="description">DESCRIPTION: </label>
						<input id="description" type="text" class="form-control" name="description" value="{{ $service->description }}" required disabled>
						<div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Ask about it
                                    </button>
                                </div>
                            </div>
					</form>
					</div>
					</div>
					<!---->

		<a href="/home">Back</a>
	</div>

</div>
@endsection
