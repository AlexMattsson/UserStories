@extends('layout')

@section('title', 'Stories')

@section('content')




<h1 class="display-4 text-center">Stories:</h1>
        @foreach ($stories as $story)

            <p class="text-center">Som en {{$story->role}} vill jag {{$story->action}} i {{$story->location}} för att {{$story->reason}} </p><br>
        

            
            
        @endforeach
    </div>
    
    <a href="/stories/create">Create a new story</a>
        
@endsection