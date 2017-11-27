@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			<!-- Edit form for patient profile -->
			<div class="panel panel-default">
				<div class="panel-heading">EDIT</div>
				<div class="panel-body">

					<form method="POST" action="/patient/{{ $patient->id }}/edit">

						{{ csrf_field() }}
						<div class="form-group">
							</br>
							<label for="idPat">patient ID: </label></br>
							<input type="text" name="idPat" value="{{ $patient->id }}" disabled>
							</br>
							<label for="idUser">User ID:</label></br>
							<input type="text" name="idUser" class="" id="idUser" value="{{ $patient->idUser }}" disabled=""> 
						</div> 
						<div class="form-group">
							</br>
							<label for="nif">NIF:</label></br>
							<input type="text" name="nif" class="" id="nif" value="{{ $patient->NIF }}">
							
						</div>
						<div class="form-group">
							</br>
							<label for="name">NAME: </label></br>
							<input type="text" name="name" class="" id="name" value="{{ $patient->name }}">
							</br>
							<label for="lastName1">LAST NAME 1:</label></br>
							<input type="text" name="lastName1" class="" id="lastName1" value="{{ $patient->lastName1 }}">  
							</br>
							<label for="lastName2">LAST NAME 2:</label></br>
							<input type="text" name="lastName2" class="" id="lastName2" value="{{ $patient->lastName2 }} "> 
						</div>
						<div class="form-group">
							</br>
							<label for="address">ADDRESS:</label></br>
							<input type="text" name="address" class="" id="address" value="{{ $patient->address }}">  
						</div>
						<div class="form-group">
							</br>
							<label for="phone">PHONE NUMBER:</label></br>
							<input type="text" name="phone" class="" id="phone" value="{{ $patient->phone }} "> 
						</div>
						<div class="form-group">
							</br>
							<label for="contactName">CONTACT PERSON:</label></br>
							<input type="text" name="contactName" class="" id="contactName" value="{{ $patient->contactName }} "> 
							</br>
							<label for="contactPhone">CONTACT PHONE NUMBER:</label></br>
							<input type="text" name="contactPhone" class="" id="contactPhone" value="{{ $patient->contactPhone }} "> 
						</div>
						<div class="form-group">
							</br>
							<label for="lat">LATITUDE:</label></br>
							<input type="text" name="lat" class="" id="lat" value="{{ $patient->lat }} "> 
							</br>
							<label for="long">LONGITUDE:</label></br>
							<input type="text" name="long" class="" id="long" value="{{ $patient->long }} "> 
						</div>
						
						<input type='submit' value='Update'>
					</form>
				</div>
			</div>
		</div>
		<a href="/home">Back</a>
@endsection