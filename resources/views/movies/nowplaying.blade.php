@extends('templates.index')
@section('title')
    CinéPedia - En salle
@endsection
@section('content')
<ul>
    @foreach ($nowPlayingMovies as $movie)
        <li><a href="{{route('movies.show', ['movie' => $movie->id])}}">{{$movie->title}}</a></li>
    @endforeach
</ul>
@endsection