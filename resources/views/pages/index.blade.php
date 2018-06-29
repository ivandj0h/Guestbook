@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To {{$title}}!</h1>
        <p>This is the laravel application for {{$title}}</p>
        <p>Created By Ivandi</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>   
@endsection