@extends('layouts.app')

@section('content')
    {{-- <div class="jumbotron text-center"> --}}
        <h1>GuestBook List</h1>
        @if(@count($posts) > 0)
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Content</th>
              </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
              <tr class="table-light">
                <th scope="row">{{$post->name}}</th>
                <td>{{$post->email}}</td>
                <td>{{$post->content}}</td>
            </tr>
             @endforeach                

            </tbody>
          </table>



        @else
           <b>There's no Guest</b>
        @endif
    {{-- </div>    --}}
@endsection