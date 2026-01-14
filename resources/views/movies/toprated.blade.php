@extends('templates.index')
@section('title')
    CinéPedia - Les mieux notés
@endsection
@section('content')
<ul>
    @foreach ($topRatedMovies as $movie)
        <li><a href="{{route('movies.show', ['movie' => $movie->id])}}">{{$movie->title}}</a></li>
    @endforeach
</ul>
@endsection