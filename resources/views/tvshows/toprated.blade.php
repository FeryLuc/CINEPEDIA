@extends('templates.index')
@section('title')
    CinéPedia - Les séries les mieux notées
@endsection
@section('content')
    <ul>
        @foreach ($topRatedTvShows as $tvShow)
            <li><a href="{{route('tvshows.show', ['tvShow'=>$tvShow->id])}}">{{$tvShow->name}}</a></li>
        @endforeach
    </ul>
@endsection