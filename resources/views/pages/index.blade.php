@extends('layouts.main-layout')

@section('prerson')
    <a href="{{route('post')}}">See posts</a>

    <h1>People</h1>
    <ul>

        @foreach ($people as $person)
        <li>

            <h2> {{$person -> name}}</h2>
            <h3>Contact:</h3>
            <ul>
                <li>Email: {{$person -> email}}</li>    
                <li>Phone: {{$person -> personDetail -> phone}}</li>    
                <li>Address: {{$person -> personDetail -> address}}</li>    
            </ul>       
        </li>
        @endforeach
    </ul>
@endsection


