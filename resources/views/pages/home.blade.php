@extends('templates.index')

@section('content')


<ul>
    @foreach ($popularMovies as $movie)
        <li>{{$movie->title}}</li>
    @endforeach
</ul>
    
@endsection