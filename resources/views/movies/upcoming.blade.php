@extends('templates.index')
@section('title')
    CinéPedia - A venir
@endsection
@section('content')
<ul>
    @foreach ($upComingMovies as $movie)
        <li><a href="{{route('movies.show', ['movie' => $movie->id])}}">{{$movie->title}}</a></li>
    @endforeach
</ul>
@endsection