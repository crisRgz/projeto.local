@extends('layouts.app')

@section('content')
			<!-- Edit form for employee profile -->
			<div class="panel panel-default">
				<div class="panel-heading">EDIT</div>
				<div class="panel-body">

					<form method="POST" action="/employee/{{ $employee->id }}">

						{{ csrf_field() }}
						<div class="form-group">
							</br>
							<label for="idEmp">Employee ID: </label></br>
							<input type="text" name="idEmp" value="{{ $employee->id }}" disabled>
							</br>
							<label for="idUser">User ID:</label></br>
							<input type="text" name="idUser" class="" id="idUser" value="{{ $employee->idUser }}" disabled=""> 
						</div> 
						<div class="form-group">
							</br>
							<label for="nif">NIF:</label></br>
							<input type="text" name="nif" class="" id="nif" value="{{ $employee->NIF }}">
							
						</div>
						<div class="form-group">
							</br>
							<label for="name">NAME: </label></br>
							<input type="text" name="name" class="" id="name" value="{{ $employee->name }}">
							</br>
							<label for="lastName1">LAST NAME 1:</label></br>
							<input type="text" name="lastName1" class="" id="lastName1" value="{{ $employee->lastName1 }}">  
							</br>
							<label for="lastName2">LAST NAME 2:</label></br>
							<input type="text" name="lastName2" class="" id="lastName2" value="{{ $employee->lastName2 }} "> 
						</div>
						<div class="form-group">
							</br>
							<label for="address">ADDRESS:</label></br>
							<input type="text" name="address" class="" id="address" value="{{ $employee->address }}">  
						</div>
						<div class="form-group">
							</br>
							<label for="phone">PHONE NUMBER:</label></br>
							<input type="text" name="phone" class="" id="phone" value="{{ $employee->phone }} "> 
						</div>
						
						<input type='submit' value='Update'>
					</form>
				</div>
			</div>
		</div>
		<a href="/home">Back</a>
@endsection