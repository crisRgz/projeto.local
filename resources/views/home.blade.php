@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                <!--
                    |
                    | If id==0 => meaning not existing id in this role, so we show the correct form
                    |
                -->
               id=  {{$id}}
                @if($id===0)
                    <div class="panel-heading">Complete Register</div>

                    <div class="panel-body">
                    <!--
                    |
                    | if employee, complete form
                    |
                    -->
                    @if(Auth::User()->rol == 'Employee')
                    <h6>You are an Employee</h6>
                        <form class="form-horizontal" method="POST" action="{{ route('employee') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('NIF') ? ' has-error' : '' }}">
                                <label for="NIF" class="col-md-4 control-label">NIF</label>

                                <div class="col-md-6">
                                    <input id="NIF" type="text" class="form-control" name="NIF" required>

                                    @if ($errors->has('NIF'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('NIF') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ Auth::User()->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('lastName1') ? ' has-error' : '' }}">
                                <label for="lastName1" class="col-md-4 control-label">Surname 1</label>

                                <div class="col-md-6">
                                    <input id="lastName1" type="text" class="form-control" name="lastName1" value="{{ old('lastName1') }}" required>

                                    @if ($errors->has('lastName1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName1') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('lastName2') ? ' has-error' : '' }}">
                                <label for="lastName2" class="col-md-4 control-label">Surname 2</label>

                                <div class="col-md-6">
                                    <input id="lastName2" type="text" class="form-control" name="lastName2" required>

                                    @if ($errors->has('lastName2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName2') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address" required>

                                    @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-4 control-label">Telephone</label>

                                <div class="col-md-6">
                                    <input id="phone" type="tel" class="form-control" name="phone" required>

                                    @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <input id="rol" type="hidden" value="{{ Auth::User()->rol }}" name="rol">

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>

                        </form>
                        @endif
                        <!--
                        |
                        |If patient, complete form
                        |
                        -->
                        @if(Auth::User()->rol == 'Patient')
                        <h6>You are a Patient</h6>
                        <form class="form-horizontal" method="POST" action="{{ route('patient') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('NIF') ? ' has-error' : '' }}">
                                <label for="NIF" class="col-md-4 control-label">NIF</label>

                                <div class="col-md-6">
                                    <input id="NIF" type="text" class="form-control" name="NIF" required>

                                    @if ($errors->has('NIF'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('NIF') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ Auth::User()->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('lastName1') ? ' has-error' : '' }}">
                                <label for="lastName1" class="col-md-4 control-label">Surname 1</label>

                                <div class="col-md-6">
                                    <input id="lastName1" type="text" class="form-control" name="lastName1" value="{{ old('lastName1') }}" required>

                                    @if ($errors->has('lastName1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName1') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('lastName2') ? ' has-error' : '' }}">
                                <label for="lastName2" class="col-md-4 control-label">Surname 2</label>

                                <div class="col-md-6">
                                    <input id="lastName2" type="text" class="form-control" name="lastName2" required>

                                    @if ($errors->has('lastName2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName2') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address" required>

                                    @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-4 control-label">Telephone</label>

                                <div class="col-md-6">
                                    <input id="phone" type="tel" class="form-control" name="phone" required>

                                    @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('lat') ? ' has-error' : '' }}">
                                <label for="lat" class="col-md-4 control-label">Latitude</label>

                                <div class="col-md-6">
                                    <input id="lat" type="text" class="form-control" name="lat" required>

                                    @if ($errors->has('lat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lat') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('long') ? ' has-error' : '' }}">
                                <label for="long" class="col-md-4 control-label">Longitude</label>

                                <div class="col-md-6">
                                    <input id="long" type="text" class="form-control" name="long" required>

                                    @if ($errors->has('long'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('long') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('contactName') ? ' has-error' : '' }}">
                                <label for="contactName" class="col-md-4 control-label">Contact Name</label>

                                <div class="col-md-6">
                                    <input id="contactName" type="text" class="form-control" name="contactName" value="{{ old('contactName') }}" required>

                                    @if ($errors->has('contactName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contactName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('contactPhone') ? ' has-error' : '' }}">
                                <label for="contactPhone" class="col-md-4 control-label">Contact Phone</label>

                                <div class="col-md-6">
                                    <input id="contactPhone" type="text" class="form-control" name="contactPhone" value="{{ old('contactPhone') }}" required>

                                    @if ($errors->has('contactPhone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contactPhone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <input id="rol" type="hidden" value="{{ Auth::User()->rol }}" name="rol">

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>

                        </form>
                        @endif
                    </div>
                @endif
                
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
