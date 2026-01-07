@extends('templates.index')
@section('title')
    CinéPedia - Films Populaires
@endsection
@section('content')
    <div>
    <ul>
        @foreach ($popularMovies as $movie)
            <li><a href="">{{$movie->title}}</a></li>
        @endforeach
    </ul>
</div>
@endsection
