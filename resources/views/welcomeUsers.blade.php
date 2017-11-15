@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <!--
                    welcome 
                -->
                    <h3>Wel Come {{ Auth::User()->rol }}s, <strong><em>{{ Auth::User()->name }}</em></strong></h3>
                <!-- EMPLOYEES  -->
                    @if(Auth::User()->rol == 'Employee')
                        <div class="panel-heading">What to do</div>
                        <div class="panel-body">
                            <div class="panel-body">
                                <a href="/employee/{{$id}}" class="btn btn-primary" >
                                SEE Profile
                                </a>
                                <a href="/employee/{{$id}}/edit" class="btn btn-primary" >
                                EDIT Profile
                                </a>
                                <a href="/employee/{{$id}}/delete" class="btn btn-primary" >
                                Delete Profile</a>
                               
                            </div>
                            <div class="panel-body">
                                <a href="/employee/{{$id}}/treatments" class="btn btn-primary" >
                                List Treatments</a>
                                <a href="/employee/{{$id}}/patients" class="btn btn-primary" >
                                List Patients</a>
                            </div>
                        </div>
                    @endif

                    <!-- RELATIVES  -->
                    @if(Auth::User()->rol == 'Patient')
                        <div class="panel-heading">What to do</div>
                        <div class="panel-body">
                            <div class="panel-body">
                                <button class="btn btn-primary" >See Profile</button>
                                <button class="btn btn-primary" >Edit Profile</button>
                                <button class="btn btn-primary" >Delete Profile</button>
                            </div>
                            <div class="panel-body">
                                <button class="btn btn-primary" >List Available Treatments</button>
                                <button class="btn btn-primary" >Ask for Treatment</button>
                            </div>
                        </div>
                    @endif
               
            </div>
        </div>
    </div>
</div>
@endsection