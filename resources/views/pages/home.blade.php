@extends('templates.index')

@section('content')

<h2>Film populaire</h2>
<ul>
    @foreach ($popularMovies as $movie)
        <li>{{$movie->title}}</li>
    @endforeach
</ul>
<br/>
<h2>Actuellement en salle</h2>
<ul>
    @foreach ($nowPlaying as $movie)
        <li>{{$movie->title}}</li>
    @endforeach
</ul>
    
<br/>
<h2>Séries en cours de diffusion</h2>
<ul>
    @foreach ($tvShowOnAir as $tvShow)
        <li>{{$tvShow->name}}</li>
    @endforeach
</ul>
@endsection