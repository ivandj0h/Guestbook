@extends('layouts.app')

@section('content')
    <h3>New Guest</h3>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::text('name', '', ['class' => 'form-control form-control-sm', 'autocomplete' => 'disabled', 'placeholder' => 'Enter Your Name here'])}}
        </div>
        <div class="form-group">
                {{Form::email('email', '', ['class' => 'form-control form-control-sm', 'placeholder' => 'Enter Your Email here'])}}
        </div>
        <div class="form-group">
            {{Form::textarea('content', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter Your Content here'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        <a href="/posts/" class="btn btn-secondary">Back</a>
    {!! Form::close() !!}
@endsection