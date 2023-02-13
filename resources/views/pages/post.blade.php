@extends('layouts.main-layout')

@section('post')
    <h1>Post</h1>
    <ul>

        @foreach ($posts as $post)
            <li>

                <h2>{{$post -> title}}</h2>    
                <p>{{$post -> body}}</p>    
                <h3>{{$post -> person -> name}}</h3>
            </li>
        @endforeach
    </ul>
@endsection