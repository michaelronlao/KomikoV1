@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">

                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>{{ $user->LastName }}'s Profile</h2>
                <form enctype="multipart/form-data" action="myprofile" method="POST">
                    <label>Update Profile Image</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
                <br>
                <br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <form class="form-horizontal" role="form" method="POST">
                                    <div class="form-group">
                                        <label for="LastName" class="col-md-4 control-label">Last Name</label>

                                        <div class="col-md-6">
                                            <input id="LastName" type="text" class="form-control" name="LastName" value="{{ $user['LastName'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="FirstName" class="col-md-4 control-label">First Name</label>

                                        <div class="col-md-6">
                                            <input id="FirstName" type="text" class="form-control" name="FirstName" value="{{ $user['FirstName'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ $user['email'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Phone" class="col-md-4 control-label">Phone</label>

                                        <div class="col-md-6">
                                            <input id="Phone" type="text" class="form-control" name="Phone" value="{{ $user['Phone'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Username" class="col-md-4 control-label">Username</label>

                                        <div class="col-md-6">
                                            <input id="Username" type="text" class="form-control" name="Username" value="{{ $user['Username'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="col-md-4 control-label">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password">
                                        </div>
                                    </div>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
