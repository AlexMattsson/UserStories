@extends('layout')

@section('title', 'New story')

@section('content')
    
<form method="POST" action="../stories">
    
    {{ csrf_field() }}
    
    <div>
        
        <p>Som en </p>
        <input type="text" name="role" placeholder="Elev" value="{{ old('role') }}" autofocus>
        <p> vill jag </p>
        <input type="text" name="action" placeholder="lära mig" value="{{ old('action') }}">
        <p> i </p>
        <input type="text" name="location" placeholder="skolan" value="{{ old('location') }}">
        <p> för att </p>
        <input type="text" name="reason" placeholder="det är intressant" value="{{ old('reason') }}">
        <p>.</p>
        
    </div>

    <div>
        
        <button type="submit">Create story!</button>
        
    </div>


    @if ($errors->any())
    <div>
        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>    

            @endforeach

        </ul>

    </div>
    @endif
    
    
</form>

@endsection