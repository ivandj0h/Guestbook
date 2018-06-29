@extends('layouts.app')

@section('content')
    <h3>Edit Guest</h3>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::text('name', $post->name, ['class' => 'form-control', 'placeholder' => 'Enter Your Name here'])}}
        </div>
        <div class="form-group">
                {{Form::email('email', $post->email, ['class' => 'form-control', 'placeholder' => 'Enter Your Email here'])}}
            </div>
        <div class="form-group">
            {{Form::textarea('content', $post->content, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter Your Content here'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        <a href="/posts/" class="btn btn-secondary">Back</a>
    {!! Form::close() !!}
@endsection