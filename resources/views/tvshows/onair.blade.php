@extends('templates.index')
@section('title')
    CinéPedia - Séries en diffusion
@endsection
@section('content')
    <ul>
        @foreach ($onAirTvShows as $tvShow)
            <li><a href="{{route('tvshows.show', ['tvShow'=>$tvShow->id])}}">{{$tvShow->name}}</a></li>
        @endforeach
    </ul>
@endsection