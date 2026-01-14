@extends('templates.index')
@section('title')
    CinéPedia - Séries populaires
@endsection
@section('content')
    <ul>
        @foreach ($popularTvShows as $tvShow)
            <li><a href="{{route('tvshows.show', ['tv-show'=>$tvShow->id])}}">{{$tvShow->name}}</a></li>
        @endforeach
    </ul>
@endsection