@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('LastName') ? ' has-error' : '' }}">
                            <label for="LastName" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="LastName" type="text" class="form-control" name="LastName" value="{{ old('LastName') }}" required autofocus>

                                @if ($errors->has('LastName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('LastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('FirstName') ? ' has-error' : '' }}">
                            <label for="FirstName" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="FirstName" type="text" class="form-control" name="FirstName" value="{{ old('FirstName') }}" required autofocus>

                                @if ($errors->has('FirstName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('FirstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Phone') ? ' has-error' : '' }}">
                            <label for="Phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="Phone" type="text" class="form-control" name="Phone" value="{{ old('Phone') }}" required autofocus>

                                @if ($errors->has('Phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Username') ? ' has-error' : '' }}">
                            <label for="Username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="Username" type="text" class="form-control" name="Username" value="{{ old('Username') }}" required autofocus>

                                @if ($errors->has('Username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
