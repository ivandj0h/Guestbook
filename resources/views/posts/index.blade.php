@extends('layouts.app')

@section('content')
    {{-- <div class="jumbotron text-center"> --}}
        <h1>GuestBook List</h1>
        <a href="/posts/create" class="btn btn-primary">Add New Guest</a>
        <br /><br />
        @if(@count($posts) > 0)
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Content</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
              <tr class="table-light">
                <th scope="row">{{$post->name}}</th>
                <td>{{$post->email}}</td>
                <td>{{$post->content}}</td>
                <td><a href="/posts/{{$post->id}}/edit"><i class="fa fa-edit"></i></a> 
                <a href="/posts/{{$post->id}}/edit"><i class="fa fa-trash"></i></a>
                        {{-- {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!} --}}
                    </td>
            </tr>
             @endforeach 
                           
            </tbody>
          </table>
          {{$posts->links()}} 
        @else
           <b>There's no Guest</b>
        @endif
    {{-- </div>    --}}
@endsection