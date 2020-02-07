@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title of comic')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Description')}}
        {{Form::text('body', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
    </div>
    <!--add to database migration-->
    <div class="form-group">
        {{Form::label('issue', 'Issue')}}
        {{Form::text('issue', '', ['class' => 'form-control', 'placeholder' => 'Issue'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection